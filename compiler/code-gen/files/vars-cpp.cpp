#include "compiler/code-gen/files/vars-cpp.h"

#include "common/algorithms/hashes.h"

#include "compiler/code-gen/common.h"
#include "compiler/code-gen/declarations.h"
#include "compiler/code-gen/includes.h"
#include "compiler/code-gen/namespace.h"
#include "compiler/code-gen/raw-data.h"
#include "compiler/code-gen/vertex-compiler.h"
#include "compiler/data/var-data.h"
#include "compiler/stage.h"

struct InitVar {
  VarPtr var;
  explicit InitVar(VarPtr var) : var(var) {}

  void compile(CodeGenerator &W) const {
    Location save_location = stage::get_location();
    W << UnlockComments();

    VertexPtr init_val = var->init_val;
    if (init_val->type() == op_conv_regexp) {
      W << VarName(var) << ".init (" << var->init_val << ");" << NL;
    } else {
      W << VarName(var) << " = " << var->init_val << ";" << NL;
    }

    W << LockComments();
    stage::set_location(save_location);
  }
};


static void add_dependent_declarations(VertexPtr vertex, std::set<VarPtr> &dependent_vars) {
  if (!vertex) {
    return;
  }
  for (auto child: *vertex) {
    add_dependent_declarations(child, dependent_vars);
  }
  if (vertex->type() == op_var) {
    dependent_vars.emplace(vertex->get_var_id());
  }
}

void compile_raw_array(CodeGenerator &W, const VarPtr &var, int shift) {
  if (shift == -1) {
    W << InitVar(var);
    W << VarName(var) << ".set_reference_counter_to_const();" << NL << NL;
    return;
  }

  const Location &save_location = stage::get_location();
  W << UnlockComments();
  W << UpdateLocation(var->init_val->location);

  W << VarName(var) << ".assign_raw((char *) &raw_arrays[" << int_to_str(shift) << "]);" << NL << NL;

  W << LockComments();
  stage::set_location(save_location);
}

static std::vector<bool> compile_vars_part(CodeGenerator &W, const std::vector<VarPtr> &vars, size_t part) {
  std::string file_name = "vars" + std::to_string(part) + ".cpp";
  W << OpenFile(file_name, "o_vars", false);

  W << ExternInclude("php_functions.h");

  std::vector<VarPtr> const_raw_string_vars;
  std::vector<VarPtr> const_raw_array_vars;
  std::vector<VarPtr> other_const_vars;
  std::set<VarPtr> dependent_vars;

  IncludesCollector includes;
  for (auto var : vars) {
    if (!G->env().is_static_lib_mode() || !var->is_builtin_global()) {
      includes.add_var_signature_depends(var);
    }
  }
  W << includes;

  std::vector<bool> dep_mask;
  W << OpenNamespace();
  for (auto var : vars) {
    if (G->env().is_static_lib_mode() && var->is_builtin_global()) {
      continue;
    }

    W << VarDeclaration(var);
    if (var->is_constant()) {
      if (dep_mask.size() <= var->dependency_level) {
        dep_mask.resize(var->dependency_level + 1, false);
        dep_mask[var->dependency_level] = true;
      }
      switch (var->init_val->type()) {
        case op_string:
          const_raw_string_vars.push_back(var);
          break;
        case op_array:
          add_dependent_declarations(var->init_val, dependent_vars);
          const_raw_array_vars.push_back(var);
          break;
        case op_var:
          add_dependent_declarations(var->init_val, dependent_vars);
          other_const_vars.emplace_back(var);
          break;
        default:
          other_const_vars.emplace_back(var);
          break;
      }
    }
  }

  std::vector<VarPtr> extern_depends;
  std::set_difference(dependent_vars.begin(), dependent_vars.end(),
                      vars.begin(), vars.end(), std::back_inserter(extern_depends));
  for (auto var : extern_depends) {
    W << VarExternDeclaration(var);
  }

  std::vector<std::string> values(const_raw_string_vars.size());
  std::transform(const_raw_string_vars.begin(), const_raw_string_vars.end(),
                 values.begin(),
                 [](const VarPtr &var){ return var->init_val.as<op_string>()->get_string(); });
  auto const_string_shifts = compile_raw_data(W, values);

  const std::vector<int> const_array_shifts = compile_arrays_raw_representation(const_raw_array_vars, W);
  kphp_assert(const_array_shifts.size() == const_raw_array_vars.size());

  for (size_t dep_level = 0; dep_level < dep_mask.size(); ++dep_level) {
    if (!dep_mask[dep_level]) {
      continue;
    }

    W << NL << "void const_vars_init_priority_" << std::to_string(dep_level) << "_file_" << std::to_string(part) << "()";
    W << BEGIN;

    for (size_t ii = 0; ii < const_raw_string_vars.size(); ++ii) {
      VarPtr var = const_raw_string_vars[ii];
      if (var->dependency_level == dep_level) {
        W << VarName(var) << ".assign_raw (&raw[" << std::to_string(const_string_shifts[ii]) << "]);" << NL;
      }
    }

    for (size_t array_id = 0; array_id < const_raw_array_vars.size(); ++array_id) {
      VarPtr var = const_raw_array_vars[array_id];
      if (var->dependency_level == dep_level) {
        compile_raw_array(W, var, const_array_shifts[array_id]);
      }
    }

    for (const auto &var: other_const_vars) {
      if (var->dependency_level == dep_level) {
        W << InitVar(var);
        auto type_data = var->tinf_node.get_type();
        PrimitiveType ptype = type_data->ptype();
        if (vk::any_of_equal(ptype, tp_array, tp_var, tp_string)) {
          W << VarName(var);
          if (type_data->use_or_false()) {
            W << ".val()";
          }
          W << ".set_reference_counter_to_const();" << NL;
        }
      }
    }
    W << END << NL;
  }

  W << CloseNamespace();
  W << CloseFile();
  return dep_mask;
}


VarsCpp::VarsCpp(std::vector<VarPtr> &&vars, size_t parts_cnt) :
  vars_(std::move(vars)),
  parts_cnt_(parts_cnt) {
  kphp_assert (1 <= parts_cnt_ && parts_cnt_ <= 128);
}

void VarsCpp::compile(CodeGenerator &W) const {
  std::vector<std::vector<VarPtr>> vars_batches(parts_cnt_);
  std::vector<std::vector<bool>> dep_masks(parts_cnt_);
  for (auto var : vars_) {
    vars_batches[vk::std_hash(var->name) % parts_cnt_].emplace_back(var);
  }
  for (size_t part_id = 0; part_id < parts_cnt_; ++part_id) {
    std::sort(vars_batches[part_id].begin(), vars_batches[part_id].end());
    dep_masks[part_id] = compile_vars_part(W, vars_batches[part_id], part_id);
  }

  W << OpenFile("vars.cpp", "", false);
  W << OpenNamespace();

  W << "void const_vars_init() " << BEGIN;

  char init_fun[128] = {0};
  const auto longest_dep_mask = std::max_element(
    dep_masks.begin(), dep_masks.end(),
    [](const std::vector<bool> &l, const std::vector<bool> &r) {
      return l.size() < r.size();
    });
  for (int dep_level = 0; dep_level < longest_dep_mask->size(); ++dep_level) {
    for (size_t part_id = 0; part_id < parts_cnt_; ++part_id) {
      if (dep_masks[part_id].size() > dep_level && dep_masks[part_id][dep_level]) {
        const int s = snprintf(init_fun, sizeof(init_fun),
                               "const_vars_init_priority_%d_file_%zu();", dep_level, part_id);
        kphp_assert(s > 0 && s < sizeof(init_fun));
        // function declaration
        W << "void " << vk::string_view{init_fun, static_cast<size_t>(s)} << NL;
        // function call
        W << vk::string_view{init_fun, static_cast<size_t>(s)} << NL;
      }
    }
  }
  W << END;
  W << CloseNamespace();
  W << CloseFile();
}
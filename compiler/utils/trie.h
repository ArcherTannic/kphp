#pragma once

#include "compiler/common.h"

template<typename T>
struct Trie {
  Trie *next[256];
  int has_val;
  T val;

  Trie();

  void add(const string &s, const T &val);
  T *get_deepest(const char *s);
  void clear();
  ~Trie();

private:
  DISALLOW_COPY_AND_ASSIGN(Trie);
};

template<typename T>
Trie<T>::Trie() {
  memset(next, 0, sizeof(next));
  has_val = 0;
}

template<typename T>
void Trie<T>::add(const string &s, const T &val) {
  Trie *cur = this;

  for (int i = 0; i < (int)s.size(); i++) {
    int c = (unsigned char)s[i];

    if (cur->next[c] == nullptr) {
      cur->next[c] = new Trie();
    }
    cur = cur->next[c];
  }

  cur->val = val;
  assert (cur->has_val == 0);
  cur->has_val = 1;
}

template<typename T>
T *Trie<T>::get_deepest(const char *s) {
  T *best = nullptr;
  Trie<T> *cur = this;

  while (cur) {
    if (cur->has_val) {
      best = &cur->val;
    }
    if (*s == 0) {
      break;
    }
    cur = cur->next[(unsigned char)*s++];
  }

  return best;
}


template<typename T>
void Trie<T>::clear() {
  for (int i = 0; i < 256; i++) {
    delete next[i];
  }
}

template<typename T>
Trie<T>::~Trie() {
  clear();
}
<<<<<<< HEAD:PHP/compiler/trie.hpp

=======
>>>>>>> f48689eb... PHP: split some files:PHP/compiler/utils/trie.h
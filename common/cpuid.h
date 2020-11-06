#ifndef __CPUID_H__
#define __CPUID_H__

enum kdb_cpuid_type { KDB_CPUID_UNKNOWN = 0, KDB_CPUID_X86_64 = 0x280147b8, KDB_CPUID_AARCH64 = 0xfd327130 };
typedef enum kdb_cpuid_type kdb_cpuid_type_t;

typedef struct {
  kdb_cpuid_type_t type;
  union {
    struct {
      int ebx, ecx, edx;
    } x86_64;
  };
} kdb_cpuid_t;

const kdb_cpuid_t *kdb_cpuid ();

#endif

@ok
<?php
  printf ("-<a>-%d-<b>-%s-<c>-%f\n", 1, "123", 0.2);
  echo sprintf ("-<a>-%d-<b>-%s-<c>-%f\n", 1, "123", 0.2);
  echo sprintf('������������� ��������� %s%%\n', 5);
  echo sprintf("������������� ��������� %%\n");

  vprintf ("-<a>-%d-<b>-%s-<c>-%f\n", array (1, "123", 0.2));
  echo vsprintf ("-<a>-%d-<b>-%s-<c>-%f\n", array (1, "123", 0.2));
  echo vsprintf('������������� ��������� %s%%\n', array (5));
  echo vsprintf("������������� ��������� %%\n", array());

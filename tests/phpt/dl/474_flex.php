@ok benchmark
<?php
#ifndef KittenPHP

function vk_flex($name, $case, $sex, $type, $lang_id = 0) {
  if ($sex != 1) $sex = 0;
  if (!$case || $case == 'Nom') return $name;

  static $flex_langs = array();
  if (!isset($flex_langs[$lang_id])) {
    $res = array();
    if (in_array($lang_id, array(0, 11, 19, 52, 777, 888, 999))) {
$res['flexible_symbols'] = "�����Ũ������������������������������������������������������";

$res['names'] = array(
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�')
  ),
  array(
    'patterns' => array('������', '������', '������', '������', '������', '������', '������',
'������', '�����', '�������', '�������', '�������', '������', '������', '�����', '������', '�����', '�����',
'������', '�����', '�����', '������', '������', '�����', '���', '������', '����', '�����', '�������', '*����',
'������', '�����', '�������', '������', '�������'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('������(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('������()', '������()', '�����()', '�������()', '�������()', '�������()', '������()', 
'������()', '�����()', '������()', '�����()', '�����()', '�����()', '�����()', '�������()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�', '*�', '*�'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => 'fixed',
    'female' => 'fixed', 
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'), // ������ m � f ������??
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('���(�)', '����(�)', '����(�)', '�����(�)', '�����(�)', '����(�)', '������(�)','���(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('������(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('ϸ��'),
    'male' => array('Gen' => '�����', 'Dat' => '�����', 'Acc' => '�����', 'Ins' => '������', 'Abl' => '�����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�����'),
    'male' => array('Gen' => '�����', 'Dat' => '�����', 'Acc' => '�����', 'Ins' => '������', 'Abl' => '�����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('����'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�����()', '����()', '������()', '�����()', '������()','����()','������()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array("����-", '���-'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
);

$res['surnames'] = array(
  array(
    'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�', '*�', '*�'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('�����(�)', '������(�)', '����(�)', '����(�)', '����(�)', '�����(�)', '��(�)', '����(�)', '���(�)','���(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => 'fixed',
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '��'),
  ),
  
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('������', '�����', '�����', '���', '�����', '��������', '�����', '�����', 
     '�����', '������', '�������', '�����', '��������', '���', '�����', '����', '��', '��', '���', '����',
     '����', '���', '�����', '��', '�', '���'),
    'male' => 'fixed',
    'female' => 'fixed', 
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('*��(�)', '*��(�)', '*��(�)', '*��(�)', '*��(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��'), 
  ),
  array(
    'patterns' => array('�����(�)', '���������(�)', '�������(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��'), 
  ),
  array(
    'patterns' => array('�������(�)', '��������(�)', '�������(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��'), 
  ),
  array(
    'patterns' => array('���(�)', '���(�)', '�����(�)', '������(�)', '�����(�)', '�����(�)','�����(�)',
      '������(�)', '�����(�)', '���(�)', '������(�)', '�����(�)', '�����(�)', '����(�)', '�����(�)', '�����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)','*�(�)'),
    'male' => 'fixed',
    'female' => 'fixed', 
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('����(�)', '����(�)', '��(�)', '�����(�)', '�����(�)', '����(�)', '����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'), 
  ),
  array(
    'patterns' => array('���(�)', '�����(�)', '�������(�)', '�����(�)', '����(�)', '����(�)', '���(�)', '����(�)', 
      '����(�)', '�(�)', '���(�)', '���(�)', '���(�)', '�������(�)', '���(�)', '�����(�)', '��������(�)', '�'),
    'male' => 'fixed',
    'female' => 'fixed' 
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*���', '�����(��)', '����(��)', '��(��)', '��(��)', '����(��)', '���(��)','���(��)',
       '����(��)', '����(��)', '����(��)', '�����(��)', '����(��)', '��(��)', '����(��)', '������(��)','�����(��)',
       '�����(��)', '��(��)', '����(��)', '��(��)', '�����(��)', '�����(��)', '���(��)', '��(��)', '�����(��)'), // any "*���" like "�������"? // Alexey: except monosyllabic, I guess
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
//  array(
//    'patterns' => array('�����(���)'),
//    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
//    'female' => 'fixed'
//  ),
  array(
    'patterns' => array('*�', '������(�)', '�������(�)', '�����(�)', '����(�)', '����(�)', '����(�)', 
      '����(�)', '�������(�)', '�����(�)', '���(�)', '�����(�)', '������(�)', '�����(�)', '������(�)', '��(�)', 
      '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', 
      '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '����(�)', '���(�)',
      '�������(�)', '������(�)', '������(�)', '������(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��', '*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('������(�)', '�����(�)', '������(�)', '����(�)', '�����(�)', '�����(�)', '������(�)', 
      '�������(�)', '�������(�)', '������(�)', '���(�)', "���\xb3(�)", '����(�)', '���(�)', '�����(�)',
      '��������(�)', '������(�)','�������(�)','�����(�)','����(�)', '����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('�����(��)', '�����(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('����', '���', '����', '�����', '���', '��', '����', '�����', '����', '����', '��','�','�','�','�����','�'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��', '*��'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��', '*��', '*�(��)', '��������(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�������(�)', '���(�)', '����(�)', '����(�)', '����(�)', '��(�)', '�����(�)', '����(�)',
      '��������(�)', '����(�)', '�����(�)', '����-����(�)', '����(�)', '����(�)', '����(�)', '�����(�)', '����(�)', 
      '����(�)', '����(�)', '����(�)', '���(�)', '���(�)', '����(�)', '����(�)', '���(�)', '������(�)', '�����(�)', 
      '���(�)', '��(�)', '���(�)', '������(�)', '���(�)', '�������(�)', '���(�)', '���(�)', '�����(�)', '����(�)',
      '������(�)', '������(�)', '���(�)', '����(�)', '�����(�)', '���(�)', '������(�)', '������(�)', '������(�)','������(�)',
      '������(�)', '����(�)', '�����(�)', '��(�)', '������(�)', '��(�)', '������(�)', '����(�)', '���(�)','�������(�)','�������(�)',
      '��(�)', '���(�)', '����(�)', '����(�)', '����(�)', '��������(�)', '����(�)', '������(�)', '�����(�)','��(�)','��(�)',
      '���������(�)', '����(�)', '����(�)', '���(�)', '�����(�)', '�����(�)', '������(�)', '������(�)','����(�)','���(�)',
      '����(�)', '����(�)', '������(�)', '������(�)', '��������(�)', '������(�)', '���(�)', '����(�)', '����(�)', '���(�)',
      '������(�)', '���(�)', '����(�)', '���(�)', '�����(�)', '����(�)', '������(�)', '����(�)','������(�)','�����(�)','�����(�)',
      '�������(�)', '����(�)', '���(�)', '����(�)', '����(�)', '�����(�)','����(�)','����(�)','����(�)','�����(�)','�����(�)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('������(��)', '�����(��)', '������(��)', '�����(��)',
      '�����(��)', '��(��)', '������(��)', '������(��)', '�����(��)', '�����(��)', '�����(�)', '��(��)', '��(��)',
      '��(��)', '�����(��)', '�����(��)', '�����(��)', '�������(��)', '�����(��)', '���(��)', '���(��)', '�����(��)', '�����(��)',
      '�����(��)', '������(��)', '������(��)', '���(��)', '�������(��)', '�����(��)', '�����(��)', '����(��)', '�����(��)', '������(��)',
      '�����(��)', '�����(��)', '������(��)', '������(��)', '�����(��)', '���(��)', '�����(��)', '�����(��)', '�����(��)',
      '�����(��)', '����(��)', '���(��)', '�������(��)', '���(��)', '���(�)', '����(��)', '�������(��)',
      '���(�)', '�������(��)', '������(��)', '���(��)', '������(��)', '�����(�)', '������(��)','�����(��)','������(��)',
      '�����(��)', '�����(��)', '�����(��)', '�����(��)', '���(��)', '�����(��)', '����(��)','������(��)',
      '�����(��)', '��������(��)', '���(��)', '������(��)', '������(��)', '���(��)', '����(��)', '������(��)', 
      '��(��)', '������(�)', '������(��)', '������(��)', '������(��)', '�����(��)', '�������(��)', '������(��)',
      '�����(��)', '������(��)', '�����(��)', '������(��)', '�����(��)', '������(��)', '������(��)', '������(��)',
      '�����(��)', '����(��)', '������(�)', '����(�)', '������(��)', '�����(��)', '�����(��)', '�����(�)', '���(��)',
      '����(�)', '�����(�)', '��(�)', '�����(��)', '������(�)', '�����(��)', '��(�)', '�����(��)', '������(�)', '��(�)',
      '�����(�)', '��(�)','�����(��)','�����(��)','����(�)','���(��)','�����(��)','�����(�)','�����(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�(���)', '�����(���)', '����(���)'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('��(��)','����(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('��(��)', '��(��)', '��(��)', '�(��)', '�����(��)', '��(��)', '���(��)', '����(��)', '�(��)','�����(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���(��)', '��(��)', '��(��)', '�(��)', '�(��)', '��(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'), // Ins �� �����, ��� � ���������� ��������
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('��(�)', '��(�)', '�����(�)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�����'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
  
  array(
    'patterns' => array('*'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed',
  ),
  
  array(
    'patterns' => array('���������()', '�����()', '������()', '���()', '�������()', '���()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('������()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('*��()', '*��()', '*��()', '*��()', '*��()', '*��()', '���������()', 
       '�������()', '������()', '������()', '�����()'), // *��?
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('���()', '��������()', '���()', '�����()', '���()', '�������()', '������()', 
     '������()', '����()', '���()', '���()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed',
  ),
  
  array(
    'patterns' => array("���-", "���-", "������-", "���-", "����-", "�����-", "����-", "�-", "���-", 
      "�����-", "�����-", "���-", "������-", "-���()", "�����-", "���-", "���-", "���-���-", "���-", "��-","��-"),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
 
);

      $flex_config = $res;
    } else if (in_array($lang_id, array(1, 2, 21, 51, 91, 100))) {
switch($lang_id){

case 1:

// Alexey, 28.11.2009: ��������� ���������� ���������, ������������ � �����������
// \xb2 - I ����������, \xb3 - i ���������� (�������� �����)

$res['flexible_symbols'] = "�����Ũ������������������������������������������������������\xb2\xb3";

$res['names'] = array(
  array(
    'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�', '*�'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
  ),
  array(
    'patterns' => array("*\xb3(�)"),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '��i', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
  ),
  array(
    'patterns' => array('*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
  ),
  array(
    'patterns' => array('*(��)'),
    'male' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
    'female' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
  ),
  array(
    'patterns' => array('*(��)'),
    'male' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
    'female' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
  ),
  array(
    'patterns' => array('*(��)'),
    'male' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
    'female' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '��i', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '�', 'Abl' => 'i')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '����i', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
    'female' => array('Gen' => '���', 'Dat' => '����i', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '���i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => array('Gen' => '��', 'Dat' => '���i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
  ),
  array(
    'patterns' => array('*'),
    'male' => array('Gen' => '�', 'Dat' => '��i', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array("\xb2���"),
    'male' => array('Gen' => "\xb2����", 'Dat' => "\xb2�����i", 'Acc' => "\xb2����", 'Ins' => "\xb2�����", 'Abl' => "I�����i"),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('������', '������', '������', '������', '������', '������', '�������', '������',
'������', '�����', '�������', '�������', '�������', '������', '������', '�����', '������', '�����', '�����',
'������', '�����', '�����', '������', '������', '�����', '���'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),

  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
    'female' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
  ),
  array(
    'patterns' => array('ϸ��'),
    'male' => array('Gen' => '�����', 'Dat' => '������i', 'Acc' => '�����', 'Ins' => '������', 'Abl' => '������i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�����'),
    'male' => array('Gen' => '�����', 'Dat' => '������i', 'Acc' => '�����', 'Ins' => '������', 'Abl' => '������i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���'),
    'male' => array('Gen' => '����', 'Dat' => '�����i', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '�����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '����i', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
    'female' => array('Gen' => '���', 'Dat' => '����i', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
  ),
  array(
    'patterns' => array('����'),
    'male' => array('Gen' => '����', 'Dat' => '�����i', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '�����i'),
    'female' => 'fixed',
  ),
);


$res['surnames'] = array(
  array(
    'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�', '*�'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '��i', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
  ),
  array(
    'patterns' => array("*\xb3(�)"),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('�����(�)', '������(�)', '����(�)', '����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '��', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '��', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
    'female' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
  ),
  array(
    'patterns' => array('*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
  ),
  array(
    'patterns' => array('*(��)'),
    'male' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
    'female' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
  ),
  array(
    'patterns' => array('*(��)'),
    'male' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
    'female' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
  ),
  array(
    'patterns' => array('*(��)'),
    'male' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
    'female' => array('Gen' => '��', 'Dat' => '�i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '�i'),
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�', '������()'),
    'male' => array('Gen' => '�', 'Dat' => '��i', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => 'fixed'
    //'female' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '�', 'Abl' => 'i')
  ),
  array(
    'patterns' => array('*��(�)', '*��(�)', '*��(�)', '*��(�)', '*��(�)', '������(�)'),
    'male' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => '�', 'Dat' => 'i�', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i�'), 
  ),
  array(
    'patterns' => array('���(�)', '���(�)', '�����(�)', '������(�)', '�����(�)'),
    'male' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'),
    'female' => array('Gen' => '�', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i'), 
  ),
  
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => 'fixed',
    'female' => 'fixed', 
  ),
  array(
    'patterns' => array('���(�)', '�����(�)', '�������(�)', '�����(�)', '����(�)', '����(�)', '���(�)', '����(�)', '����(�)', '�(�)', '���(�)'),
    'male' => 'fixed',
    'female' => 'fixed' 
  ),
  array(
    'patterns' => array('*���', '�����(��)', '����(��)','��(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�', '������(�)', '�������(�)', '�����(�)', '����(�)', '����(�)', '����(�)', '����(�)', 
       '�������(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', 
       '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', "������\xb3(�)",
       "���\xb3(�)", '������(�)', "��\xb3(�)", '���(�)',"���\xb3(�)"),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��', '*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '���', 'Abl' => '�i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*(���)', '*(���)'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '���', 'Abl' => '�i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*(���)', '*(���)'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '���', 'Abl' => '�i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*(���)', '*(���)'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '���', 'Abl' => '�i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
   'patterns' => array('������(�)', '�����(�)', '������(�)', '����(�)', '�����(�)', "���\xb3(�)", "���\xb3(�)", "���i(�)","����\xb3(�)",'����i�',
      "����\xb3(�)","����i(�)","�����\xb3(�)","�����i(�)","���\xb3(�)",'���i�',"�\xb3(�)",'�i�',"���\xb3(�)",'���i�','����i�',"����\xb3(�)"),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array("*\xb3�", '�����(��)'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => 'i�', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array("����\xb3(�)", "�����\xb3(�)"),
    'male' => array('Gen' => "�", 'Dat' => "�", 'Acc' => "�", 'Ins' => "��", 'Abl' => "�"),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('�����(��)', '�����(��)'),
    'male' => array('Gen' => '&#39;�', 'Dat' => '&#39;�', 'Acc' => '&#39;�', 'Ins' => '&#39;��', 'Abl' => '&#39;�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��', '*��'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���(���)'),
    'male' => array('Gen' => '��', 'Dat' => '���i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array("�(\xb3�)",'�(i�)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��', '*��', '*�(��)'),
    'male' => array('Gen' => '��', 'Dat' => '���i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '����i', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�������(�)', '���(�)', '����(�)', '����(�)', '����(�)', '��(�)', '�����(�)', '����(�)','����(�)',
      '��������(�)', '����(�)', '�����(�)', '����-����(�)', '����(�)', '����(�)', '����(�)', '�����(�)', '����(�)', '����(�)', '����(�)', '����(�)', '���(�)', '���(�)', '����(�)', '����(�)', '���(�)'),
    'male' => array('Gen' => '��', 'Dat' => '���i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�(���)'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '�����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '�����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array("\xb3(���)", '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�����(���)',),
    'male' => array('Gen' => '��', 'Dat' => '���i', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('��(���)', '��(���)', '��(���)', '�(���)', '�����(���)', '��(���)', '���(���)', '����(���)','��(���)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('��(��)', '��(��)', '��(��)', '�(��)', '�����(��)', '��(��)', '���(��)', '����(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���i'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*', '������()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => 'fixed',
  ),
  
  array(
    'patterns' => array('*��()', '*��()', '*��()', '*��()', '*��()', '���������()'), // *��?
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('���()', '��������()', '���()', '�����()', '���()', '�������()', '������()', '������()', '����()', '���()'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��i'),
    'female' => 'fixed',
  ),
  
);

break;

case 2:

// Alexey, 29.11.2009: ��������� ����������� ���������, ������������ � �����������
// \xb2 - I �����������, \xb3 - i ����������� (�������� �����)

$res['flexible_symbols'] = "�����Ũ������������������������������������������������������\xa2\xb2\xb3";

$res['names'] = array(
  array(
    'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => 'i', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i')
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => 'i', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�', '*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array("*\xb3"),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '�����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '�����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '�����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '�����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '�����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '�����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '������')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '�����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '�����')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '���', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���')
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�')
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('ϸ��', '����'),
    'male' => array('Gen' => '�����', 'Dat' => '�����', 'Acc' => '�����', 'Ins' => '������', 'Abl' => '�����'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('�����', '�����'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '�����', 'Abl' => '����'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('����������', '���������'),
    'male' => array('Gen' => '����������', 'Dat' => '����������', 'Acc' => '����������', 'Ins' => '�����������', 'Abl' => '����������'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array("\xb2����", "\xb2����", "\xb2���"),
    'male' => array('Gen' => "\xb2���i", 'Dat' => "\xb2����", 'Acc' => "\xb2����", 'Ins' => "\xb2����", 'Abl' => "\xb2����"),
    'female' => 'fixed'
  ),
);


$res['surnames'] = array(
  array(
    'patterns' => array('*�', '*�', '*�', '*�', '*�'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => 'i', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => 'i', 'Dat' => 'i', 'Acc' => '�', 'Ins' => '��', 'Abl' => 'i')
  ),
  array(
    'patterns' => array('*���', '*���'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��', '*��'),
    'male' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*��', '*��'),
    'male' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*��', '*��'),
    'male' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '�i', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�')
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array("*\xb2",'*i'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => 'i�', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array("*\xb3�"),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => 'i�', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '��', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '�����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '�����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '�����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '�����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '�����')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '�����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '������')
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '�����', 'Acc' => '���', 'Ins' => '����', 'Abl' => '�����')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '���', 'Acc' => '��', 'Ins' => '���', 'Abl' => '���')
  ),
  array(
    'patterns' => array('*��(�)', '*��(�)', '*��(�)', "*\xb3�(�)"),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��')
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�')
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��()', '*��()', '*��()', "*\xb3�()"),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => 'fixed'
  ),

);

break;

case 51: // bash

$res['flexible_symbols'] = "�����Ũ������������������������������������������������������QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";

$res['names'] = array(
  array(
  'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '&#1171;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '&#1171;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
  'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()'),
  'male' => array('Gen' => '&#1177;�&#1187;', 'Dat' => '&#1171;�', 'Acc' => '&#1177;�', 'Ins' => '&#1177;��', 'Abl' => '&#1177;�'),
  'female' => array('Gen' => '&#1177;�&#1187;', 'Dat' => '&#1171;�', 'Acc' => '&#1177;�', 'Ins' => '&#1177;��', 'Abl' => '&#1177;�'),
  ),
  array(
  'patterns' => array('*�(�)'),
  'male' => array('Gen' => '&#1177;�&#1187;', 'Dat' => '�&#1241;', 'Acc' => '&#1177;�', 'Ins' => '&#1177;&#1241;�', 'Abl' => '&#1177;&#1241;'),
  'female' => array('Gen' => '&#1177;�&#1187;', 'Dat' => '�&#1241;', 'Acc' => '&#1177;�', 'Ins' => '&#1177;&#1241;�', 'Abl' => '&#1177;&#1241;'),
  ),
  array(
  'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '&#1171;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '&#1171;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
  'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '�&#1241;', 'Acc' => '��', 'Ins' => '�&#1241;�', 'Abl' => '�&#1241;'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '�&#1241;', 'Acc' => '��', 'Ins' => '�&#1241;�', 'Abl' => '�&#1241;'),
  ),
  array(
  'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '&#1185;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '&#1185;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
  'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '�&#1241;', 'Acc' => '��', 'Ins' => '�&#1241;�', 'Abl' => '�&#1241;'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '�&#1241;', 'Acc' => '��', 'Ins' => '�&#1241;�', 'Abl' => '�&#1241;'),
  ),
  
  //lat
  
  array(
  'patterns' => array('*a()', '*o()', '*e()'),
  'male' => array('Gen' => '���&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  'female' => array('Gen' => '���&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  ),
  array(
  'patterns' => array('*u()', '*r()', '*i()', '*y()', '*w()'),
  'male' => array('Gen' => '�&#1177;�&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '�&#1177;�', 'Ins' => '�&#1177;��', 'Abl' => '�&#1177;�'),
  'female' => array('Gen' => '�&#1177;�&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '�&#1177;�', 'Ins' => '�&#1177;��', 'Abl' => '�&#1177;�'),
  ),
  array(
  'patterns' => array('*n()', '*l()', '*m()', '*z()', '*j()'),
  'male' => array('Gen' => '���&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  'female' => array('Gen' => '���&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  ),
  array(
  'patterns' => array('*q()', '*t()', '*p()', '*s()', '*d()', '*f()', '*g()', '*h()', '*k()', '*x()', '*c()', '*v()', '*b()'),
  'male' => array('Gen' => '���&#1187;', 'Dat' => '�&#1185;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  'female' => array('Gen' => '���&#1187;', 'Dat' => '�&#1185;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  ),

);

$res['surnames'] = array(
  array(
  'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '&#1171;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '&#1171;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
  'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()'),
  'male' => array('Gen' => '&#1177;�&#1187;', 'Dat' => '&#1171;�', 'Acc' => '&#1177;�', 'Ins' => '&#1177;��', 'Abl' => '&#1177;�'),
  'female' => array('Gen' => '&#1177;�&#1187;', 'Dat' => '&#1171;�', 'Acc' => '&#1177;�', 'Ins' => '&#1177;��', 'Abl' => '&#1177;�'),
  ),
  array(
  'patterns' => array('*�(�)'),
  'male' => array('Gen' => '&#1177;�&#1187;', 'Dat' => '�&#1241;', 'Acc' => '&#1177;�', 'Ins' => '&#1177;&#1241;�', 'Abl' => '&#1177;&#1241;'),
  'female' => array('Gen' => '&#1177;�&#1187;', 'Dat' => '�&#1241;', 'Acc' => '&#1177;�', 'Ins' => '&#1177;&#1241;�', 'Abl' => '&#1177;&#1241;'),
  ),
  array(
  'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '&#1171;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '&#1171;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
  'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '�&#1241;', 'Acc' => '��', 'Ins' => '�&#1241;�', 'Abl' => '�&#1241;'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '�&#1241;', 'Acc' => '��', 'Ins' => '�&#1241;�', 'Abl' => '�&#1241;'),
  ),
  array(
  'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '&#1185;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '&#1185;�', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
  'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
  'male' => array('Gen' => '��&#1187;', 'Dat' => '�&#1241;', 'Acc' => '��', 'Ins' => '�&#1241;�', 'Abl' => '�&#1241;'),
  'female' => array('Gen' => '��&#1187;', 'Dat' => '�&#1241;', 'Acc' => '��', 'Ins' => '�&#1241;�', 'Abl' => '�&#1241;'),
  ),
  
  //lat
  
  array(
  'patterns' => array('*a()', '*o()', '*e()'),
  'male' => array('Gen' => '���&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  'female' => array('Gen' => '���&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  ),
  array(
  'patterns' => array('*u()', '*r()', '*i()', '*y()', '*w()'),
  'male' => array('Gen' => '�&#1177;�&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '�&#1177;�', 'Ins' => '�&#1177;��', 'Abl' => '�&#1177;�'),
  'female' => array('Gen' => '�&#1177;�&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '�&#1177;�', 'Ins' => '�&#1177;��', 'Abl' => '�&#1177;�'),
  ),
  array(
  'patterns' => array('*n()', '*l()', '*m()', '*z()', '*j()'),
  'male' => array('Gen' => '���&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  'female' => array('Gen' => '���&#1187;', 'Dat' => '�&#1171;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  ),
  array(
  'patterns' => array('*q()', '*t()', '*p()', '*s()', '*d()', '*f()', '*g()', '*h()', '*k()', '*x()', '*c()', '*v()', '*b()'),
  'male' => array('Gen' => '���&#1187;', 'Dat' => '�&#1185;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  'female' => array('Gen' => '���&#1187;', 'Dat' => '�&#1185;�', 'Acc' => '���', 'Ins' => '����', 'Abl' => '���'),
  ),

);

break;

case 100: //imperial

$res['flexible_symbols'] = "�����Ũ�������������������������I�������������������������������i";
/** /

$res['names'] = array(
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�')
  ),
  array(
    'patterns' => array('������', '������', '������', '������', '������', '������', '�������', '�������',
'�������', '������', '��������', '��������', '��������', '�������', '�������', '������', '�������', '������', '������',
'������', '������', '�����', '������', '������', '������', '���', '������'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�', '*�', '*�'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*i�'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i���', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*i�'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'), // ������ m � f ������??
    'female' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
  ),
  array(
    'patterns' => array('��i(�)', '���i(�)', '���i(�)', '����i(�)', '����i(�)', '���i(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('������(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*', '*(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('ϸ���'),
    'male' => array('Gen' => '�����', 'Dat' => '�����', 'Acc' => '�����', 'Ins' => '�������', 'Abl' => '�����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('������'),
    'male' => array('Gen' => '�����', 'Dat' => '�����', 'Acc' => '�����', 'Ins' => '�������', 'Abl' => '�����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('����'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '������', 'Abl' => '����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'),
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'),
    'female' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'),
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('�����'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '������', 'Abl' => '����'),
    'female' => 'fixed',
  ),
);

$res['surnames'] = array(
  array(
    'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�', '*�', '*�'),
    'male' => 'fixed',
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('�����(�)', '������(�)', '����(�)', '����(�)', '����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '��'),
  ),
  array(
    'patterns' => array('*��'),
    'male' => 'fixed',
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '��', 'Abl' => '��'),
  ),
  
  array(
    'patterns' => array('*i�'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'), // ������ m � f ������??
    'female' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i��', 'Abl' => 'i�'),
  ),
  array(
    'patterns' => array('������', '�����', '�����', '���', '�����', '��������', '�����', '�����', '�����'),
    'male' => 'fixed',
    'female' => 'fixed', 
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('*��(�)', '*��(�)', '*��(�)', '*��(�)', '*��(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��'), 
  ),
  array(
    'patterns' => array('�����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('�����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��'), 
  ),
  array(
    'patterns' => array('�������(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��'), 
  ),
  array(
    'patterns' => array('���(�)', '���(�)', '�����(�)', '������(�)', '�����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => 'fixed',
    'female' => 'fixed', 
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('����(�)', '����(�)', '��(�)', '�����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'),
    'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '��', 'Abl' => '�'), 
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'),
    'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '���', 'Abl' => '��'), 
  ),
  array(
    'patterns' => array('���(�)', '�����(�)', '�������(�)', '�����(�)', '����(�)', '����(�)', '���(�)', '����(�)', 
      '����(�)', '�(�)', '���(�)', '���(�)', '���(�)'),
    'male' => 'fixed',
    'female' => 'fixed' 
  ),
  array(
    'patterns' => array('*�'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*���', '�����(��)', '����(��)', '��(��)', '��(��)', '����(��)', '���(��)', '����(��)', '����(��)'), // any "*���" like "�������"? // Alexey: except monosyllabic, I guess
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('�����(���)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�', '������(�)', '�������(�)', '�����(�)', '����(�)', '����(�)', '����(�)', '����(�)', '�������(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��', '*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '����', 'Abl' => '����'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*i�'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i���', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(i�)', '*�(i�)', '*�(i�)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(i�)', '*�(i�)', '*�(i�)', '*�(i�)', '*�(i�)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('�����i(�)', '����i(�)', '�����i(�)', '���i(�)', '����i(�)', '����i(�)', '�����i(�)', '������i(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('�����(��)', '�����(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('�����', '����', '�����', '������', '����', '��', '�����'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*���', '*���'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*���', '*���', '*�(���)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�������(��)', '���(��)', '����(��)', '����(��)', '����(��)', '��(��)', '�����(��)', '����(��)',
      '��������(��)', '����(��)', '�����(��)', '����-����(��)', '����(��)', '����(��)', '����(��)', '�����(��)', '����(��)', 
      '����(��)', '����(��)', '����(��)', '���(��)', '���(��)', '����(��)', '����(��)', '���(��)', '������(��)', '�����(��)', '���(��)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('������(���)', '�����(���)', '������(���)', '�����(���)',
      '�����(���)', '��(���)', '������(���)', '������(���)', '�����(���)', '�����(���)', '����(���)', '��(���)', '��(���)',
      '��(���)', '�����(���)', '�����(���)', '�����(���)', '�������(���)', '�����(���)', '���(���)', '���(���)', '�����(���)', '�����(���)',
      '�����(���)', '������(���)', '������(���)', '���(���)', '�������(���)', '�����(���)', '�����(���)', '����(���)', '�����(���)', '������(���)',
      '�����(���)', '�����(���)', '������(���)', '������(���)', '�����(���)', '���(���)', '�����(���)', '�����(���)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('�(����)'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '������', 'Abl' => '����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*����'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '������', 'Abl' => '����'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('��(���)', '��(���)', '��(���)', '�(���)', '�����(���)', '��(���)', '���(���)', '����(���)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���(���)', '��(���)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'), // Ins �� �����, ��� � ���������� ��������
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('���(���)'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '��'),
    'female' => 'fixed',
  ),
  array(
    'patterns' => array('������'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
  
  array(
    'patterns' => array('*', '*(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed',
  ),
  
  array(
    'patterns' => array('���������(�)', '�����(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('*��(�)', '*��(�)', '*��(�)', '*��(�)', '*��(�)', '���������(�)'), // *��?
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed',
  ),

  array(
    'patterns' => array('���(�)', '��������(�)', '���(�)', '�����(�)', '���(�)', '�������(�)', '������(�)', '������(�)', '����(�)', '���(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed',
  ),
  
  array(
    'patterns' => array("���-", "���-", "������-", "���-", "����-", "�����-"),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
 
);

/**/

$res['names'] = array(
 array(
   'patterns' => array('*�'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '�')
 ),
 array(
   'patterns' => array('������', '������', '������', '������',
'������', '������', '�������', '�������',
'�������', '������', '��������', '��������', '��������', '�������',
'�������', '������', '�������', '������', '������',
'������', '������', '�����', '������', '������', '������', '���', '������'),
   'male' => 'fixed',
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�', '*�', '*�'),
   'male' => 'fixed',
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('*�'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' =>
'���', 'Abl' => '&#1123;'),
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('*i�'),
   'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins'
=> 'i���', 'Abl' => 'i�'),
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('*�'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*i�'),
   'male' => array('Gen' => 'i�', 'Dat' => 'i&#1123;', 'Acc' => 'i�', 'Ins'
=> 'i��', 'Abl' => 'i&#1123;'), // ������ m � f ������??
   'female' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�',
'Ins' => 'i��', 'Abl' => 'i�'),
 ),
 array(
   'patterns' => array('��i(�)', '���i(�)', '���i(�)', '����i(�)',
'����i(�)', '���i(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*�'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*�(�)', '*�(�)', '*�(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*��'),
   'male' => array('Gen' => '��', 'Dat' => '�&#1123;', 'Acc' => '��', 'Ins'
=> '���', 'Abl' => '�&#1123;'),
   'female' => array('Gen' => '��', 'Dat' => '�&#1123;', 'Acc' => '��',
'Ins' => '���', 'Abl' => '�&#1123;'),
 ),
 array(
   'patterns' => array('������(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*', '*(�)'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' =>
'���', 'Abl' => '&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('ϸ���'),
   'male' => array('Gen' => '�����', 'Dat' => '�����', 'Acc' =>
'�����', 'Ins' => '�������', 'Abl' => '����&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('������'),
   'male' => array('Gen' => '�����', 'Dat' => '�����', 'Acc' =>
'�����', 'Ins' => '�������', 'Abl' => '����&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('����'),
   'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����',
'Ins' => '������', 'Abl' => '���&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)'),
   'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���',
'Ins' => '�����', 'Abl' => '��&#1123;'),
   'female' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���',
'Ins' => '�����', 'Abl' => '��&#1123;'),
 ),
 array(
   'patterns' => array('*���'),
   'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���',
'Ins' => '�����', 'Abl' => '��&#1123;'),
   'female' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���',
'Ins' => '�����', 'Abl' => '��&#1123;'),
 ),
 array(
   'patterns' => array('*���'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins'
=> '����', 'Abl' => '�&#1123;'),
   'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��',
'Ins' => '����', 'Abl' => '�&#1123;'),
 ),
 array(
   'patterns' => array('�����'),
   'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����',
'Ins' => '������', 'Abl' => '���&#1123;'),
   'female' => 'fixed',
 ),
);

$res['surnames'] = array(
 array(
   'patterns' => array('*�', '*�', '*�', '*�', '*�', '*�', '*�', '*�'),
   'male' => 'fixed',
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('*�'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('�����(�)', '������(�)', '����(�)', '����(�)',
'����(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*��'),
   'male' => array('Gen' => '��', 'Dat' => '�&#1123;', 'Acc' => '��', 'Ins'
=> '���', 'Abl' => '�&#1123;'),
   'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��',
'Ins' => '��', 'Abl' => '��'),
 ),
 array(
   'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
   'male' => array('Gen' => '��', 'Dat' => '�&#1123;', 'Acc' => '��', 'Ins'
=> '���', 'Abl' => '�&#1123;'),
   'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��',
'Ins' => '��', 'Abl' => '��'),
 ),
 array(
   'patterns' => array('*��'),
   'male' => 'fixed',
   'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��',
'Ins' => '��', 'Abl' => '��'),
 ),

 array(
   'patterns' => array('*i�'),
   'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins'
=> 'i��', 'Abl' => 'i�'), // ������ m � f ������??
   'female' => array('Gen' => 'i�', 'Dat' => 'i&#1123;', 'Acc' => 'i�',
'Ins' => 'i��', 'Abl' => 'i&#1123;'),
 ),
 array(
   'patterns' => array('������', '�����', '�����', '���', '�����',
'��������', '�����', '�����', '�����'),
   'male' => 'fixed',
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*�'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*��(�)', '*��(�)', '*��(�)', '*��(�)', '*��(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�',
'Ins' => '��', 'Abl' => '��'),
 ),
 array(
   'patterns' => array('�����(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' => '��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' => '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('�����(�)'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��'),
 ),
 array(
   'patterns' => array('�������(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' => '��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '�', 'Ins' => '��', 'Abl' => '��'),
 ),
 array(
   'patterns' => array('���(�)', '���(�)', '�����(�)', '������(�)',
'�����(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' => '��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' => '��', 'Abl' => '&#1123;'),
 ),

 array(
   'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
   'male' => 'fixed',
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*�(�)', '*�(�)', '*�(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('����(�)', '����(�)', '��(�)', '�����(�)'),
   'male' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins' =>
'��', 'Abl' => '&#1123;'),
   'female' => array('Gen' => '�', 'Dat' => '&#1123;', 'Acc' => '�', 'Ins'
=> '��', 'Abl' => '&#1123;'),
 ),
 array(
   'patterns' => array('*��'),
   'male' => array('Gen' => '��', 'Dat' => '�&#1123;', 'Acc' => '��', 'Ins'
=> '���', 'Abl' => '�&#1123;'),
   'female' => array('Gen' => '��', 'Dat' => '�&#1123;', 'Acc' => '��',
'Ins' => '���', 'Abl' => '�&#1123;'),
 ),
 array(
   'patterns' => array('���(�)', '�����(�)', '�������(�)',
'�����(�)', '����(�)', '����(�)', '���(�)', '����(�)',
     '����(�)', '�(�)', '���(�)', '���(�)', '���(�)'),
   'male' => 'fixed',
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('*�'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' =>
'���', 'Abl' => '&#1123;'),
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('*���', '�����(��)', '����(��)', '��(��)',
'��(��)', '����(��)', '���(��)', '����(��)', '����(��)'), // any "*���" like "�������"? // Alexey: except monosyllabic, I guess
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins'
=> '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('�����(���)'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins'
=> '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('*�', '������(�)', '�������(�)', '�����(�)',
'����(�)', '����(�)', '����(�)', '����(�)', '�������(�)'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' =>
'���', 'Abl' => '&#1123;'),
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('��(�)', '��(�)', '��(�)', '��(�)', '��(�)',
'��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)',
'��(�)', '��(�)', '��(�)', '��(�)', '��(�)', '��(�)'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '&#1123;'),
   'female' => 'fixed'
 ),
//
  array(
    'patterns' => array('*��', '*��'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*���'),
    'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����', 'Ins' => '����', 'Abl' => '����'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)', '*�(��)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*i�'),
    'male' => array('Gen' => 'i�', 'Dat' => 'i�', 'Acc' => 'i�', 'Ins' => 'i���', 'Abl' => 'i�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(i�)', '*�(i�)', '*�(i�)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*�(i�)', '*�(i�)', '*�(i�)', '*�(i�)', '*�(i�)'),
    'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '���', 'Abl' => '���'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('�����i(�)', '����i(�)', '�����i(�)', '���i(�)', '����i(�)', '����i(�)', '�����i(�)', '������i(�)'),
    'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '�'),
    'female' => 'fixed'
  ),
  array(
    'patterns' => array('*��'),
    'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '�&#1123;'),
    'female' => 'fixed'
  ),
//
  array(
   'patterns' => array('�����(��)', '�����(��)'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed'
 ),
 array(
   'patterns' => array('�����', '����', '�����', '������', '����', '��', '�����'),
   'male' => 'fixed',
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*���', '*���'),
   'male' => 'fixed',
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*���', '*���', '*�(���)'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('�������(��)', '���(��)', '����(��)',
'����(��)', '����(��)', '��(��)', '�����(��)', '����(��)',
     '��������(��)', '����(��)', '�����(��)', '����-����(��)',
'����(��)', '����(��)', '����(��)', '�����(��)', '����(��)',
     '����(��)', '����(��)', '����(��)', '���(��)', '���(��)',
'����(��)', '����(��)', '���(��)', '������(��)', '�����(��)',
'���(��)'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins'
=> '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*���'),
   'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���',
'Ins' => '�����', 'Abl' => '��&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*���'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins'
=> '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('������(���)', '�����(���)', '������(���)',
'�����(���)',
     '�����(���)', '��(���)', '������(���)', '������(���)',
'�����(���)', '�����(���)', '����(���)', '��(���)', '��(���)',
     '��(���)', '�����(���)', '�����(���)', '�����(���)',
'�������(���)', '�����(���)', '���(���)', '���(���)', '�����(���)',
'�����(���)',
     '�����(���)', '������(���)', '������(���)', '���(���)',
'�������(���)', '�����(���)', '�����(���)', '����(���)', '�����(���)',
'������(���)',
     '�����(���)', '�����(���)', '������(���)', '������(���)',
'�����(���)', '���(���)', '�����(���)', '�����(���)'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins'
=> '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('�(����)'),
   'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����',
'Ins' => '������', 'Abl' => '���&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*����'),
   'male' => array('Gen' => '����', 'Dat' => '����', 'Acc' => '����',
'Ins' => '������', 'Abl' => '���&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)', '*�(���)'),
   'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '���'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('��(���)', '��(���)', '��(���)', '�(���)',
'�����(���)', '��(���)', '���(���)', '����(���)'),
   'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���',
'Ins' => '�����', 'Abl' => '��&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('���(���)', '��(���)'),
   'male' => array('Gen' => '���', 'Dat' => '���', 'Acc' => '���', 'Ins' => '�����', 'Abl' => '��&#1123;'), // Ins �� �����, ��� � ���������� ��������
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('���(���)'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('*���'),
   'male' => array('Gen' => '��', 'Dat' => '��', 'Acc' => '��', 'Ins' => '����', 'Abl' => '�&#1123;'),
   'female' => 'fixed',
 ),
 array(
   'patterns' => array('������'),
   'male' => 'fixed',
   'female' => 'fixed',
 ),

 array(
   'patterns' => array('*', '*(�)'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' =>
'���', 'Abl' => '&#1123;'),
   'female' => 'fixed',
 ),

 array(
   'patterns' => array('���������(�)', '�����(�)'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '&#1123;'),
   'female' => 'fixed',
 ),

 array(
   'patterns' => array('*��(�)', '*��(�)', '*��(�)', '*��(�)',
'*��(�)', '���������(�)'), // *��?
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '&#1123;'),
   'female' => 'fixed',
 ),

 array(
   'patterns' => array('*�(�)', '*�(�)', '*�(�)', '*�(�)', '*�(�)'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '&#1123;'),
   'female' => 'fixed',
 ),

 array(
   'patterns' => array('���(�)', '��������(�)', '���(�)', '�����(�)', '���(�)', '�������(�)', '������(�)', '������(�)', '����(�)',
'���(�)'),
   'male' => array('Gen' => '�', 'Dat' => '�', 'Acc' => '�', 'Ins' => '���', 'Abl' => '&#1123;'),
   'female' => 'fixed',
 ),

 array(
   'patterns' => array("���-", "���-", "������-", "���-", "����-", "�����-"),
   'male' => 'fixed',
   'female' => 'fixed',
 ),

); 
break;

case 21: // czech

$res['flexible_symbols'] = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";

$res['names'] = array(
  array(
    'patterns' => array('*a'),
    'male' => array('Gen' => 'y', 'Dat' => 'ovi', 'Acc' => 'u', 'Ins' => 'ou', 'Abl' => 'ovi'),
    'female' => array('Gen' => 'y', 'Dat' => '&#283;', 'Acc' => 'u', 'Ins' => 'ou', 'Abl' => '&#283;'),
  ),
  array(
    'patterns' => array('*'),
    'male' => array('Gen' => 'a', 'Dat' => 'ovi', 'Acc' => 'a', 'Ins' => 'em', 'Abl' => 'ovi'),
    'female' => 'fixed',
  ),
);


$res['surnames'] = $res['names'];

break;

case 91: // ossetian

$res['flexible_symbols'] = "�����Ũ������������������������������������������������������;";  

// &#230; = ae , &#198; = AE
$res['names'] = array(
  array( // � ����� ������� - ����������� (����. w)
    'patterns' => array('*��()', '*��()', '*��()', '*��()', '*��()', '*��()', '*��()', '*��()', '*��()', '*&#230;�()'),
    'male' => array('Gen' => '�', 'Dat' => '&#230;�', 'Dir' => '�&#230;', 'Ine' => '�', 'Abl' => '&#230;�', 'Ade' => '��', 'Equ' => '��', 'Com' => '��&#230;'),
    'female' => array('Gen' => '�', 'Dat' => '&#230;�', 'Dir' => '�&#230;', 'Ine' => '�', 'Abl' => '&#230;�', 'Ade' => '��', 'Equ' => '��', 'Com' => '��&#230;'),
  ),
  array(
    'patterns' => array('*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*�()', '*&#230;()'),
    'male' => array('Gen' => '��', 'Dat' => '�&#230;�', 'Dir' => '�&#230;', 'Ine' => '��', 'Abl' => '�&#230;', 'Ade' => '���', 'Equ' => '���', 'Com' => '��&#230;'),
    'female' => array('Gen' => '��', 'Dat' => '�&#230;�', 'Dir' => '�&#230;', 'Ine' => '��', 'Abl' => '�&#230;', 'Ade' => '���', 'Equ' => '���', 'Com' => '��&#230;'),
  ),
  array(
    'patterns' => array('*'),
    'male' => array('Gen' => '�', 'Dat' => '&#230;�', 'Dir' => '�&#230;', 'Ine' => '�', 'Abl' => '&#230;�', 'Ade' => '��', 'Equ' => '��', 'Com' => '��&#230;'),
    'female' => array('Gen' => '�', 'Dat' => '&#230;�', 'Dir' => '�&#230;', 'Ine' => '�', 'Abl' => '&#230;�', 'Ade' => '��', 'Equ' => '��', 'Com' => '��&#230;'),
  ),
);

$res['surnames'] = array(
  array(
    'patterns' => array('*'),
    'male' => 'fixed',
    'female' => 'fixed',
  ),
);


break;

}

      $flex_config = $res;
    }
    $flex_langs[$lang_id] = $flex_config;
  }
  $flex_config = &$flex_langs[$lang_id];

  if (!$flex_config['flexible_symbols'] || empty($flex_config[$type])) return $name;

  //prepare
  if (!isset($flex_config[$type.'_sorted'])) {
    $rules = array();
    $tmp_keys = array();
    foreach ($flex_config[$type] as $i => $rule) {
      $max_len = 0;
      foreach ($rule['patterns'] as $pattern) {
        $have_asterix = strpos($pattern, '*');
        $have_hyphen = strpos($pattern, '-');
        $pattern = str_replace(array('*', '-'), array('', ''), $pattern);
        $fixed_len = strpos($pattern, '(');
        $pattern = str_replace(array('(', ')'), array('', ''), $pattern); // get clear pattern (without braces)
        $pat_len = strlen($pattern);
        if ($have_asterix !== false && $pattern == '') { // default pattern
          $last_pattern_letter = '*';
          $key = '*';
        } else if ($have_asterix === false) { // exact match pattern
          $last_pattern_letter = '*';
          $key = $pattern;
        } else {
          $last_pattern_letter = substr($pattern, -1); // organize rules by last letter
          $key = $pat_len * 100000 + $tmp_keys[$pat_len];
        }
        $rules[$last_pattern_letter][$key] = array($pat_len, $fixed_len, $pattern, $rule['male'], $rule['female'], $have_hyphen);
        $tmp_keys[$pat_len]++;
      }
    }
    foreach ($rules as $letter => $letterRules) {
      krsort($rules[$letter]); // sort rules by pattern length (long pattern goes first)
    }
    $flex_config[$type.'_sorted'] = true;
    $flex_config[$type] = $rules;
    $flex_langs[$lang_id] = $flex_config;
  } else {
    $rules = $flex_config[$type];
  }

  $default_rule = $rules['*']['*'];

  $names = explode('-', $name);
  $name_count = count($names);
  foreach ($names as $i => $name) {

    if ($rules['*'][$name] && ($rules['*'][$name][5] === false || $i != $name_count - 1)) { //exact match
      $name_len = strlen($name);
      $rule = $rules['*'][$name];
      if($rule[3 + $sex] === 'fixed' || !isset($rule[3 + $sex][$case])) continue;
      $end = $rule[3 + $sex][$case];
      $name = substr($name, 0, ($rule[1]) ? ($name_len - ($rule[0] - $rule[1])) : ($name_len - $rule[0])).$end;
      $names[$i] = $name;
      continue;
    }

    $last_letter = substr($name, -1);
    if (strpos($flex_config['flexible_symbols'], $last_letter) === false) continue;

    $letter_rules = $rules[$last_letter]; // choose patterns group by last letter
    $name_len = strlen($name);
    $last_len = 0;
    $last_sub = '';
    $pattern_found = false;
    if ($letter_rules) {
      foreach ($letter_rules as $rule) {
        if ($name_len < $rule[0]) continue;
        if ($last_len != $rule[0]) {$last_len = $rule[0]; $last_sub = substr($name, - $last_len);}
        if ($last_sub == $rule[2]) { //pattern found
          $pattern_found = true;
          if($rule[3 + $sex] === 'fixed' || !isset($rule[3 + $sex][$case])) break;
          $end = $rule[3 + $sex][$case];
          $name = substr($name, 0, ($rule[1]) ? ($name_len - ($rule[0] - $rule[1])) : ($name_len - $rule[0])).$end;
          break;
        }
      }
    }

    if (!$pattern_found) { //default pattern
      $rule = $default_rule;
      if ($rule[3 + $sex] === 'fixed') {
       $names[$i] = $name;
       continue;
      }
      $end = $rule[3 + $sex][$case];
      $name = ($rule[1]) ? substr($name, 0, ($name_len - ($rule[0] - $rule[1]))).$end : $name.$end;
    }

    $names[$i] = $name;
  }
  return implode('-', $names);
}

#endif

$langs = array (0, 1, 2, 8, 11, 19, 21, 51, 52, 91, 100, 777, 888, 999);

for ($j = 0; $j < 1000; $j++)
foreach ($langs as $i) {
  var_dump($i.vk_flex("", 'Dat', 0, 'names', $i));
  var_dump($i.vk_flex("John", 'Dat', 0, 'names', $i));
  var_dump($i.vk_flex("asdasd-", 'Dat', 0, 'names', $i));
  var_dump($i.vk_flex("�������", 'Dat', 0, 'names', $i));
}

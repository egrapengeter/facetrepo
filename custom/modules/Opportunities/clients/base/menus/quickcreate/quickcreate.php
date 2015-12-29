<?php
// created: 2015-04-23 19:42:12
$viewdefs['Opportunities']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_OPPORTUNITY',
  'visible' => true,
  'order' => 3,
  'icon' => 'icon-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'opportunities',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'opportunities',
    ),
  ),
);
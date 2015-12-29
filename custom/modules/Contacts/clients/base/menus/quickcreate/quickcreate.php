<?php
// created: 2015-04-23 19:42:12
$viewdefs['Contacts']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_CONTACT',
  'visible' => true,
  'order' => 2,
  'icon' => 'icon-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'contacts',
    ),
    1 => 
    array (
      'module' => 'Opportunities',
      'link' => 'contacts',
    ),
  ),
);
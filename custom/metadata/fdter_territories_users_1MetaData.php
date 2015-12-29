<?php
// created: 2015-10-23 11:49:44
$dictionary["fdter_territories_users_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'fdter_territories_users_1' => 
    array (
      'lhs_module' => 'fdter_Territories',
      'lhs_table' => 'fdter_territories',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fdter_territories_users_1_c',
      'join_key_lhs' => 'fdter_territories_users_1fdter_territories_ida',
      'join_key_rhs' => 'fdter_territories_users_1users_idb',
    ),
  ),
  'table' => 'fdter_territories_users_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'fdter_territories_users_1fdter_territories_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fdter_territories_users_1users_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fdter_territories_users_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fdter_territories_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fdter_territories_users_1fdter_territories_ida',
        1 => 'fdter_territories_users_1users_idb',
      ),
    ),
  ),
);
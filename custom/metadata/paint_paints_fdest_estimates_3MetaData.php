<?php
// created: 2015-12-04 16:32:17
$dictionary["paint_paints_fdest_estimates_3"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'paint_paints_fdest_estimates_3' => 
    array (
      'lhs_module' => 'paint_Paints',
      'lhs_table' => 'paint_paints',
      'lhs_key' => 'id',
      'rhs_module' => 'fdest_Estimates',
      'rhs_table' => 'fdest_estimates',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'paint_paints_fdest_estimates_3_c',
      'join_key_lhs' => 'paint_paints_fdest_estimates_3paint_paints_ida',
      'join_key_rhs' => 'paint_paints_fdest_estimates_3fdest_estimates_idb',
    ),
  ),
  'table' => 'paint_paints_fdest_estimates_3_c',
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
      'name' => 'paint_paints_fdest_estimates_3paint_paints_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'paint_paints_fdest_estimates_3fdest_estimates_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'paint_paints_fdest_estimates_3spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'paint_paints_fdest_estimates_3_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'paint_paints_fdest_estimates_3paint_paints_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'paint_paints_fdest_estimates_3_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'paint_paints_fdest_estimates_3fdest_estimates_idb',
      ),
    ),
  ),
);
<?php
// created: 2015-02-17 23:10:03
$dictionary["opportunities_jbs_jobs_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_jbs_jobs_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'jbs_Jobs',
      'rhs_table' => 'jbs_jobs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_jbs_jobs_1_c',
      'join_key_lhs' => 'opportunities_jbs_jobs_1opportunities_ida',
      'join_key_rhs' => 'opportunities_jbs_jobs_1jbs_jobs_idb',
    ),
  ),
  'table' => 'opportunities_jbs_jobs_1_c',
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
      'name' => 'opportunities_jbs_jobs_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_jbs_jobs_1jbs_jobs_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_jbs_jobs_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_jbs_jobs_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_jbs_jobs_1opportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_jbs_jobs_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_jbs_jobs_1jbs_jobs_idb',
      ),
    ),
  ),
);
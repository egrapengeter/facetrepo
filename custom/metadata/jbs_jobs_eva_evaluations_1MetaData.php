<?php
// created: 2015-02-24 19:47:28
$dictionary["jbs_jobs_eva_evaluations_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'jbs_jobs_eva_evaluations_1' => 
    array (
      'lhs_module' => 'jbs_Jobs',
      'lhs_table' => 'jbs_jobs',
      'lhs_key' => 'id',
      'rhs_module' => 'eva_Evaluations',
      'rhs_table' => 'eva_evaluations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'jbs_jobs_eva_evaluations_1_c',
      'join_key_lhs' => 'jbs_jobs_eva_evaluations_1jbs_jobs_ida',
      'join_key_rhs' => 'jbs_jobs_eva_evaluations_1eva_evaluations_idb',
    ),
  ),
  'table' => 'jbs_jobs_eva_evaluations_1_c',
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
      'name' => 'jbs_jobs_eva_evaluations_1jbs_jobs_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'jbs_jobs_eva_evaluations_1eva_evaluations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'jbs_jobs_eva_evaluations_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'jbs_jobs_eva_evaluations_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'jbs_jobs_eva_evaluations_1jbs_jobs_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'jbs_jobs_eva_evaluations_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'jbs_jobs_eva_evaluations_1eva_evaluations_idb',
      ),
    ),
  ),
);
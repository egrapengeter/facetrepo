<?php
// created: 2015-02-17 23:47:20
$dictionary["jbs_jobs_activities_1_notes"] = array (
  'relationships' => 
  array (
    'jbs_jobs_activities_1_notes' => 
    array (
      'lhs_module' => 'jbs_Jobs',
      'lhs_table' => 'jbs_jobs',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'relationship_role_column_value' => 'jbs_Jobs',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
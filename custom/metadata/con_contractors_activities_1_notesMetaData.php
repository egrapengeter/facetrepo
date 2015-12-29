<?php
// created: 2015-02-24 19:48:49
$dictionary["con_contractors_activities_1_notes"] = array (
  'relationships' => 
  array (
    'con_contractors_activities_1_notes' => 
    array (
      'lhs_module' => 'con_Contractors',
      'lhs_table' => 'con_contractors',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'relationship_role_column_value' => 'con_Contractors',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
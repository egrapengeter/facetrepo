<?php
// created: 2015-02-24 19:48:53
$dictionary["con_contractors_activities_1_emails"] = array (
  'relationships' => 
  array (
    'con_contractors_activities_1_emails' => 
    array (
      'lhs_module' => 'con_Contractors',
      'lhs_table' => 'con_contractors',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'relationship_role_column_value' => 'con_Contractors',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'emails_beans',
      'join_key_rhs' => 'email_id',
      'join_key_lhs' => 'bean_id',
      'relationship_role_column' => 'bean_module',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
<?php
// created: 2015-02-03 16:05:00
$dictionary["leads_adr_addresses_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'leads_adr_addresses_1' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'adr_Addresses',
      'rhs_table' => 'adr_addresses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'leads_adr_addresses_1_c',
      'join_key_lhs' => 'leads_adr_addresses_1leads_ida',
      'join_key_rhs' => 'leads_adr_addresses_1adr_addresses_idb',
    ),
  ),
  'table' => 'leads_adr_addresses_1_c',
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
      'name' => 'leads_adr_addresses_1leads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'leads_adr_addresses_1adr_addresses_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'leads_adr_addresses_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'leads_adr_addresses_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'leads_adr_addresses_1leads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'leads_adr_addresses_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'leads_adr_addresses_1adr_addresses_idb',
      ),
    ),
  ),
);
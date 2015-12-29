<?php
$popupMeta = array (
    'moduleMain' => 'adr_Addresses',
    'varName' => 'adr_Addresses',
    'orderBy' => 'adr_addresses.name',
    'whereClauses' => array (
  'name' => 'adr_addresses.name',
  'assigned_user_id' => 'adr_addresses.assigned_user_id',
  'favorites_only' => 'adr_addresses.favorites_only',
  'sub_division' => 'adr_addresses.sub_division',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'assigned_user_id',
  5 => 'favorites_only',
  7 => 'sub_division',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
  'sub_division' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUB_DIVISION',
    'width' => '10%',
    'name' => 'sub_division',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ASSIGNED_USER_ID' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_ID',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'SUB_DIVISION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUB_DIVISION',
    'width' => '10%',
    'default' => true,
    'name' => 'sub_division',
  ),
),
);

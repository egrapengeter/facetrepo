<?php
$popupMeta = array (
    'moduleMain' => 'fdest_Estimates',
    'varName' => 'fdest_Estimates',
    'orderBy' => 'fdest_estimates.name',
    'whereClauses' => array (
  'name' => 'fdest_estimates.name',
  'status' => 'fdest_estimates.status',
  'line_item_num_c' => 'fdest_estimates_cstm.line_item_num_c',
  'assigned_user_id' => 'fdest_estimates.assigned_user_id',
  'favorites_only' => 'fdest_estimates.favorites_only',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'line_item_num_c',
  5 => 'assigned_user_id',
  6 => 'favorites_only',
),
    'searchdefs' => array (
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'line_item_num_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LINE_ITEM_NUM',
    'width' => '10%',
    'name' => 'line_item_num_c',
  ),
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
),
    'listviewdefs' => array (
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'LINE_ITEM_NUM_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_LINE_ITEM_NUM',
    'width' => '10%',
    'name' => 'line_item_num_c',
  ),
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
),
);

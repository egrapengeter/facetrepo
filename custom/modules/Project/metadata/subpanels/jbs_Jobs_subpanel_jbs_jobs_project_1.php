<?php
// created: 2015-07-13 15:39:49
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'vname' => 'LBL_LIST_ASSIGNED_USER_ID',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Users',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Users',
    'width' => '10%',
    'sortable' => false,
    'default' => true,
  ),
  'estimated_start_date' => 
  array (
    'vname' => 'LBL_DATE_START',
    'width' => '10%',
    'sortable' => true,
    'default' => true,
  ),
  'estimated_end_date' => 
  array (
    'vname' => 'LBL_DATE_END',
    'width' => '10%',
    'sortable' => true,
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'priority' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_PRIORITY',
    'width' => '10%',
    'default' => true,
  ),
  'is_template' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_IS_TEMPLATE',
    'width' => '10%',
  ),
);
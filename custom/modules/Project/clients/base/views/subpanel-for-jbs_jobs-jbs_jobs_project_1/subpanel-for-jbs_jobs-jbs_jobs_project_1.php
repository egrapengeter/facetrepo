<?php
// created: 2015-07-13 15:39:52
$viewdefs['Project']['base']['view']['subpanel-for-jbs_jobs-jbs_jobs_project_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Users',
          'label' => 'LBL_LIST_ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => true,
          'name' => 'assigned_user_name',
          'sortable' => false,
        ),
        2 => 
        array (
          'label' => 'LBL_DATE_START',
          'enabled' => true,
          'default' => true,
          'name' => 'estimated_start_date',
        ),
        3 => 
        array (
          'label' => 'LBL_DATE_END',
          'enabled' => true,
          'default' => true,
          'name' => 'estimated_end_date',
        ),
        4 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'priority',
          'label' => 'LBL_PRIORITY',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'total_estimated_effort',
          'label' => 'LBL_LIST_TOTAL_ESTIMATED_EFFORT',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'total_actual_effort',
          'label' => 'LBL_LIST_TOTAL_ACTUAL_EFFORT',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'is_template',
          'label' => 'LBL_IS_TEMPLATE',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'icon-pencil',
        'label' => 'LBL_EDIT_BUTTON',
        'event' => 'list:editrow:fire',
        'acl_action' => 'edit',
        'allow_bwc' => true,
      ),
      1 => 
      array (
        'type' => 'unlink-action',
        'icon' => 'icon-unlink',
        'label' => 'LBL_UNLINK_BUTTON',
      ),
    ),
  ),
  'type' => 'subpanel-list',
);
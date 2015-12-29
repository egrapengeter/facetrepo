<?php
$module_name = 'jbs_Jobs';
$_module_name = 'jbs_jobs';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'width' => '32%',
                'label' => 'LBL_SUBJECT',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              1 => 
              array (
                'name' => 'status',
                'width' => '10%',
                'label' => 'LBL_STATUS',
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'priority',
                'width' => '10%',
                'label' => 'LBL_PRIORITY',
                'default' => true,
                'enabled' => true,
              ),
              3 => 
              array (
                'name' => 'resolution',
                'width' => '10%',
                'label' => 'LBL_RESOLUTION',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'team_name',
                'width' => '9%',
                'label' => 'LBL_TEAM',
                'default' => true,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'width' => '9%',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
              ),
              6 => 
              array (
                'name' => 'jbs_jobs_number',
                'width' => '5%',
                'label' => 'LBL_NUMBER',
                'link' => true,
                'default' => false,
                'enabled' => true,
              ),
              7 => 
              array (
                'name' => 'start_date_c',
                'label' => 'LBL_START_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'opportunities_jbs_jobs_1_name',
                'label' => 'LBL_OPPORTUNITIES_JBS_JOBS_1_FROM_OPPORTUNITIES_TITLE',
                'enabled' => true,
                'id' => 'OPPORTUNITIES_JBS_JOBS_1OPPORTUNITIES_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

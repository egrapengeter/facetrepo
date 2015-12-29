<?php
$popupMeta = array (
    'moduleMain' => 'jbs_Jobs',
    'varName' => 'jbs_Jobs',
    'orderBy' => 'jbs_jobs.name',
    'whereClauses' => array (
  'name' => 'jbs_jobs.name',
  'jbs_jobs_number' => 'jbs_jobs.jbs_jobs_number',
  'my_favorite' => 'jbs_jobs.my_favorite',
  'type' => 'jbs_jobs.type',
  'opportunities_jbs_jobs_1_name' => 'jbs_jobs.opportunities_jbs_jobs_1_name',
  'start_date_c' => 'jbs_jobs_cstm.start_date_c',
  'resolution' => 'jbs_jobs.resolution',
  'status' => 'jbs_jobs.status',
  'priority' => 'jbs_jobs.priority',
  'assigned_user_id' => 'jbs_jobs.assigned_user_id',
  'favorites_only' => 'jbs_jobs.favorites_only',
),
    'searchInputs' => array (
  0 => 'jbs_jobs_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
  4 => 'my_favorite',
  5 => 'type',
  6 => 'opportunities_jbs_jobs_1_name',
  7 => 'start_date_c',
  8 => 'resolution',
  9 => 'assigned_user_id',
  10 => 'favorites_only',
),
    'searchdefs' => array (
  'my_favorite' => 
  array (
    'type' => 'bool',
    'studio' => 
    array (
      'list' => false,
      'recordview' => false,
    ),
    'link' => 'favorite_link',
    'label' => 'LBL_FAVORITE',
    'width' => '10%',
    'name' => 'my_favorite',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'sortable' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'opportunities_jbs_jobs_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPPORTUNITIES_JBS_JOBS_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_JBS_JOBS_1OPPORTUNITIES_IDA',
    'sortable' => false,
    'width' => '10%',
    'name' => 'opportunities_jbs_jobs_1_name',
  ),
  'start_date_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'name' => 'start_date_c',
  ),
  'jbs_jobs_number' => 
  array (
    'name' => 'jbs_jobs_number',
    'width' => '10%',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'resolution' => 
  array (
    'name' => 'resolution',
    'width' => '10%',
  ),
  'status' => 
  array (
    'name' => 'status',
    'width' => '10%',
  ),
  'priority' => 
  array (
    'name' => 'priority',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
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
  'MY_FAVORITE' => 
  array (
    'type' => 'bool',
    'studio' => 
    array (
      'list' => false,
      'recordview' => false,
    ),
    'link' => 'favorite_link',
    'label' => 'LBL_FAVORITE',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'sortable' => true,
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'OPPORTUNITIES_JBS_JOBS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPPORTUNITIES_JBS_JOBS_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_JBS_JOBS_1OPPORTUNITIES_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'START_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_START_DATE',
    'width' => '10%',
  ),
  'JBS_JOBS_NUMBER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NUMBER',
    'link' => true,
    'default' => true,
    'name' => 'jbs_jobs_number',
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SUBJECT',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'RESOLUTION' => 
  array (
    'width' => '10%',
    'label' => 'LBL_RESOLUTION',
    'default' => true,
    'name' => 'resolution',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'PRIORITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIORITY',
    'default' => true,
    'name' => 'priority',
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

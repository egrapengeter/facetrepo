<?php
// created: 2015-04-22 20:17:21
$viewdefs['eva_Evaluations']['base']['view']['subpanel-for-con_contractors-con_contractors_eva_evaluations_1'] = array (
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'jbs_jobs_eva_evaluations_1_name',
          'label' => 'LBL_JBS_JOBS_EVA_EVALUATIONS_1_FROM_JBS_JOBS_TITLE',
          'enabled' => true,
          'id' => 'JBS_JOBS_EVA_EVALUATIONS_1JBS_JOBS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'evaluation_total_c',
          'label' => 'LBL_EVALUATION_TOTAL',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'modified_by_name',
          'label' => 'LBL_MODIFIED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'MODIFIED_USER_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);
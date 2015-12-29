<?php
// created: 2015-04-22 20:17:08
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'jbs_jobs_eva_evaluations_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_JBS_JOBS_EVA_EVALUATIONS_1_FROM_JBS_JOBS_TITLE',
    'id' => 'JBS_JOBS_EVA_EVALUATIONS_1JBS_JOBS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'jbs_Jobs',
    'target_record_key' => 'jbs_jobs_eva_evaluations_1jbs_jobs_ida',
  ),
  'evaluation_total_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_EVALUATION_TOTAL',
    'width' => '10%',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'vname' => 'LBL_MODIFIED',
    'id' => 'MODIFIED_USER_ID',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'modified_user_id',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
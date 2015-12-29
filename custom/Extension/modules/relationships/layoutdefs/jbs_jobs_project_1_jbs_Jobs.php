<?php
 // created: 2015-07-13 15:23:14
$layout_defs["jbs_Jobs"]["subpanel_setup"]['jbs_jobs_project_1'] = array (
  'order' => 100,
  'module' => 'Project',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_JBS_JOBS_PROJECT_1_FROM_PROJECT_TITLE',
  'get_subpanel_data' => 'jbs_jobs_project_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
  ),
);

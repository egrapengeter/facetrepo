<?php
 // created: 2015-03-03 21:18:32
$layout_defs["jbs_Jobs"]["subpanel_setup"]['jbs_jobs_con_contractors_1'] = array (
  'order' => 100,
  'module' => 'con_Contractors',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_JBS_JOBS_CON_CONTRACTORS_1_FROM_CON_CONTRACTORS_TITLE',
  'get_subpanel_data' => 'jbs_jobs_con_contractors_1',
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

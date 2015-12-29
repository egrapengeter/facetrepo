<?php
 // created: 2015-10-23 11:49:44
$layout_defs["Users"]["subpanel_setup"]['fdter_territories_users_1'] = array (
  'order' => 100,
  'module' => 'fdter_Territories',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FDTER_TERRITORIES_USERS_1_FROM_FDTER_TERRITORIES_TITLE',
  'get_subpanel_data' => 'fdter_territories_users_1',
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

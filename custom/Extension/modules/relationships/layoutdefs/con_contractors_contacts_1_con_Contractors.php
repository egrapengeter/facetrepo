<?php
 // created: 2015-07-17 16:52:54
$layout_defs["con_Contractors"]["subpanel_setup"]['con_contractors_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CON_CONTRACTORS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'con_contractors_contacts_1',
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

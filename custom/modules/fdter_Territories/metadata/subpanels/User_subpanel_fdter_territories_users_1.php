<?php
// created: 2015-11-11 15:59:15
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'state' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATE',
    'width' => '10%',
  ),
  'city' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'subdivision' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SUBDIVISION',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'fdter_Territories',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'fdter_Territories',
    'width' => '5%',
    'default' => true,
  ),
);
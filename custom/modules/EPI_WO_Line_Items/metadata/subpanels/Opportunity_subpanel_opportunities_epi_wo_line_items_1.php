<?php
// created: 2015-09-23 14:21:05
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'line_item_num_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_LINE_ITEM_NUM',
    'width' => '10%',
  ),
  'interior_exterior_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_INTERIOR_EXTERIOR_C',
    'width' => '10%',
  ),
  'primary_interior_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRIMARY_INTERIOR',
    'width' => '10%',
  ),
  'additional_areas_interior_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ADDITIONAL_AREAS_INTERIOR',
    'width' => '10%',
  ),
  'deck_patio_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_DECK_PATIO',
    'width' => '10%',
  ),
  'primary_area_serviced_other_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRIMARY_AREA_SERVICED_OTHER',
    'sortable' => false,
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);
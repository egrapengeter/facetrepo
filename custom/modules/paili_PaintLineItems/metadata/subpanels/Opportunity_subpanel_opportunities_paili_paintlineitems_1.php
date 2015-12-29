<?php
// created: 2015-07-20 16:28:19
$subpanel_layout['list_fields'] = array (
  'wo_line_item_num_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_WO_LINE_ITEM_NUM',
    'width' => '10%',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'color_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_COLOR',
    'width' => '10%',
  ),
  'quantity_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
  'gallons_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_GALLONS',
    'width' => '10%',
  ),
  'paint_cost_c' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_PAINT_COST',
    'currency_format' => true,
    'width' => '10%',
  ),
  'paint_line_item_total_cost_c' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_PAINT_LINE_ITEM_TOTAL_COST',
    'currency_format' => true,
    'width' => '10%',
  ),
);
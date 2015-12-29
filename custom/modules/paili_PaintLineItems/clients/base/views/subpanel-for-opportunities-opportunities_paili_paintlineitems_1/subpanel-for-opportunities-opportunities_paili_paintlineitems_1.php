<?php
// created: 2015-07-20 16:28:20
$viewdefs['paili_PaintLineItems']['base']['view']['subpanel-for-opportunities-opportunities_paili_paintlineitems_1'] = array (
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
          'name' => 'wo_line_item_num_c',
          'label' => 'LBL_WO_LINE_ITEM_NUM',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        2 => 
        array (
          'name' => 'color_c',
          'label' => 'LBL_COLOR',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'quantity_c',
          'label' => 'LBL_QUANTITY',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'gallons_c',
          'label' => 'LBL_GALLONS',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'paint_cost_c',
          'label' => 'LBL_PAINT_COST',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'paint_line_item_total_cost_c',
          'label' => 'LBL_PAINT_LINE_ITEM_TOTAL_COST',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
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
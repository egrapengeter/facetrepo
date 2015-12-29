<?php
// created: 2015-09-23 14:21:06
$viewdefs['EPI_WO_Line_Items']['base']['view']['subpanel-for-opportunities-opportunities_epi_wo_line_items_1'] = array (
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
          'name' => 'name',
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'line_item_num_c',
          'label' => 'LBL_LINE_ITEM_NUM',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'interior_exterior_c',
          'label' => 'LBL_INTERIOR_EXTERIOR_C',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'primary_interior_c',
          'label' => 'LBL_PRIMARY_INTERIOR',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'additional_areas_interior_c',
          'label' => 'LBL_ADDITIONAL_AREAS_INTERIOR',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'deck_patio_c',
          'label' => 'LBL_DECK_PATIO',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'primary_area_serviced_other_c',
          'label' => 'LBL_PRIMARY_AREA_SERVICED_OTHER',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
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
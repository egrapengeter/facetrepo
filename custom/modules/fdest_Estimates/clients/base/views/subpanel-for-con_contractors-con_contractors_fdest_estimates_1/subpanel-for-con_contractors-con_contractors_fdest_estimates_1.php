<?php
// created: 2015-11-10 17:44:34
$viewdefs['fdest_Estimates']['base']['view']['subpanel-for-con_contractors-con_contractors_fdest_estimates_1'] = array (
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
          'name' => 'opportunities_fdest_estimates_1_name',
          'label' => 'LBL_OPPORTUNITIES_FDEST_ESTIMATES_1_FROM_OPPORTUNITIES_TITLE',
          'enabled' => true,
          'id' => 'OPPORTUNITIES_FDEST_ESTIMATES_1OPPORTUNITIES_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'contractor_pickup',
          'label' => 'LBL_CONTRACTOR_PICKUP',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'qty_boards',
          'label' => 'LBL_QTY_BOARDS',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'application_type',
          'label' => 'LBL_APPLICATION_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'total_hours',
          'label' => 'LBL_TOTAL_HOURS',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'total_cost_labor',
          'label' => 'LBL_TOTAL_COST_LABOR',
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        7 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'cont_wo_num_c',
          'label' => 'LBL_CONT_WO_NUM_C',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'interior_exterior_c',
          'label' => 'LBL_INTERIOR_EXTERIOR_C',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'prep_items_list_c',
          'label' => 'LBL_PREP_ITEMS_LIST',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'prep_interior_c',
          'label' => 'LBL_PREP_INTERIOR',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'other_area_c',
          'label' => 'LBL_OTHER_AREA',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        13 => 
        array (
          'name' => 'deck_patio_c',
          'label' => 'LBL_DECK_PATIO',
          'enabled' => true,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'application_items_list_c',
          'label' => 'LBL_APPLICATION_ITEMS_LIST',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        15 => 
        array (
          'name' => 'additional_areas_interior_c',
          'label' => 'LBL_ADDITIONAL_AREAS_INTERIOR',
          'enabled' => true,
          'default' => true,
        ),
        16 => 
        array (
          'name' => 'primary_interior_c',
          'label' => 'LBL_PRIMARY_INTERIOR',
          'enabled' => true,
          'default' => true,
        ),
        17 => 
        array (
          'name' => 'primary_area_exterior_c',
          'label' => 'LBL_PRIMARY_AREA_EXTERIOR',
          'enabled' => true,
          'default' => true,
        ),
        18 => 
        array (
          'name' => 'primary_area_serviced_other_c',
          'label' => 'LBL_PRIMARY_AREA_SERVICED_OTHER',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        19 => 
        array (
          'name' => 'extra_item_description_c',
          'label' => 'LBL_EXTRA_ITEM_DESCRIPTION',
          'enabled' => true,
          'default' => true,
        ),
        20 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
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
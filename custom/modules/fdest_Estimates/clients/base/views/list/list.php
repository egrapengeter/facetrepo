<?php
$module_name = 'fdest_Estimates';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'line_item_num_c',
                'label' => 'LBL_LINE_ITEM_NUM',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'areas_of_attention_rating_c',
                'label' => 'LBL_AREAS_OF_ATTENTION_RATING',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'average_areas_of_attention_c',
                'label' => 'LBL_AVERAGE_AREAS_OF_ATTENTION',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'application_type',
                'label' => 'LBL_APPLICATION_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'cust_paint_selection',
                'label' => 'LBL_CUST_PAINT_SELECTION',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'total_cost',
                'label' => 'LBL_TOTAL_COST',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              7 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'total_price',
                'label' => 'LBL_TOTAL_PRICE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'con_contractors_fdest_estimates_1_name',
                'label' => 'LBL_CON_CONTRACTORS_FDEST_ESTIMATES_1_FROM_CON_CONTRACTORS_TITLE',
                'enabled' => true,
                'id' => 'CON_CONTRACTORS_FDEST_ESTIMATES_1CON_CONTRACTORS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'total_hours',
                'label' => 'LBL_TOTAL_HOURS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              12 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              13 => 
              array (
                'name' => 'interior_exterior_c',
                'label' => 'LBL_INTERIOR_EXTERIOR_C',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'other_area_c',
                'label' => 'LBL_OTHER_AREA',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'primary_area_exterior_c',
                'label' => 'LBL_PRIMARY_AREA_EXTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'primary_interior_c',
                'label' => 'LBL_PRIMARY_INTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'primary_area_serviced_other_c',
                'label' => 'LBL_PRIMARY_AREA_SERVICED_OTHER',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'additional_areas_interior_c',
                'label' => 'LBL_ADDITIONAL_AREAS_INTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'prep_exterior_c',
                'label' => 'LBL_PREP_EXTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'prep_interior_c',
                'label' => 'LBL_PREP_INTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'deck_patio_c',
                'label' => 'LBL_DECK_PATIO',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'opportunities_fdest_estimates_1_name',
                'label' => 'LBL_OPPORTUNITIES_FDEST_ESTIMATES_1_FROM_OPPORTUNITIES_TITLE',
                'enabled' => true,
                'id' => 'OPPORTUNITIES_FDEST_ESTIMATES_1OPPORTUNITIES_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              23 => 
              array (
                'name' => 'contractor_pickup',
                'label' => 'LBL_CONTRACTOR_PICKUP',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              24 => 
              array (
                'name' => 'customer_perboard_price',
                'label' => 'LBL_CUSTOMER_PERBOARD_PRICE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              25 => 
              array (
                'name' => 'hourly_cost_labor',
                'label' => 'LBL_HOURLY_COST_LABOR',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              26 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
              ),
              27 => 
              array (
                'name' => 'qty_boards',
                'label' => 'LBL_QTY_BOARDS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              28 => 
              array (
                'name' => 'total_price_labor',
                'label' => 'LBL_TOTAL_PRICE_LABOR',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              29 => 
              array (
                'name' => 'total_price_paint',
                'label' => 'LBL_TOTAL_PRICE_PAINT',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              30 => 
              array (
                'name' => 'total_price_supplies',
                'label' => 'LBL_TOTAL_PRICE_SUPPLIES',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              31 => 
              array (
                'name' => 'total_price_boards',
                'label' => 'LBL_TOTAL_PRICE_BOARDS',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              32 => 
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
                'width' => '10%',
                'default' => false,
              ),
              33 => 
              array (
                'name' => 'total_cost_paint',
                'label' => 'LBL_TOTAL_COST_PAINT',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              34 => 
              array (
                'name' => 'total_cost_supplies',
                'label' => 'LBL_TOTAL_COST_SUPPLIES',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              35 => 
              array (
                'name' => 'total_cost_boards',
                'label' => 'LBL_TOTAL_COST_BOARDS',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);

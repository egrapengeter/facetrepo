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
                'name' => 'application_type',
                'label' => 'LBL_APPLICATION_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'cust_paint_selection',
                'label' => 'LBL_CUST_PAINT_SELECTION',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
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
              3 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              4 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
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
              6 => 
              array (
                'name' => 'total_hours',
                'label' => 'LBL_TOTAL_HOURS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              8 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              9 => 
              array (
                'name' => 'contractor_pickup',
                'label' => 'LBL_CONTRACTOR_PICKUP',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              10 => 
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
              11 => 
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
              12 => 
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
              13 => 
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
              14 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
              ),
              15 => 
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
              16 => 
              array (
                'name' => 'qty_boards',
                'label' => 'LBL_QTY_BOARDS',
                'enabled' => true,
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

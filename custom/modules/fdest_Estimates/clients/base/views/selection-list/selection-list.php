<?php
$module_name = 'fdest_Estimates';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
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
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
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
                'name' => 'line_item_num_c',
                'label' => 'LBL_LINE_ITEM_NUM',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'areas_of_attention_rating_c',
                'label' => 'LBL_AREAS_OF_ATTENTION_RATING',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'average_areas_of_attention_c',
                'label' => 'LBL_AVERAGE_AREAS_OF_ATTENTION',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'opportunities_fdest_estimates_1_name',
                'label' => 'LBL_OPPORTUNITIES_FDEST_ESTIMATES_1_FROM_OPPORTUNITIES_TITLE',
                'enabled' => true,
                'id' => 'OPPORTUNITIES_FDEST_ESTIMATES_1OPPORTUNITIES_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
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
              8 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              9 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              11 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              12 => 
              array (
                'name' => 'primary_area_exterior_c',
                'label' => 'LBL_PRIMARY_AREA_EXTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'primary_area_serviced_other_c',
                'label' => 'LBL_PRIMARY_AREA_SERVICED_OTHER',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'primary_interior_c',
                'label' => 'LBL_PRIMARY_INTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'interior_exterior_c',
                'label' => 'LBL_INTERIOR_EXTERIOR_C',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'additional_areas_interior_c',
                'label' => 'LBL_ADDITIONAL_AREAS_INTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'prep_deck_c',
                'label' => 'LBL_PREP_DECK',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'prep_exterior_c',
                'label' => 'LBL_PREP_EXTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'other_area_c',
                'label' => 'LBL_OTHER_AREA',
                'enabled' => true,
                'sortable' => false,
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

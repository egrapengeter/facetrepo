<?php
$viewdefs['Opportunities'] = 
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
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'users_opportunities_1_name',
                'label' => 'LBL_USERS_OPPORTUNITIES_1_FROM_USERS_TITLE',
                'enabled' => true,
                'id' => 'USERS_OPPORTUNITIES_1USERS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'width' => '30%',
                'link' => true,
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              2 => 
              array (
                'name' => 'account_name',
                'width' => '20%',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'sales_status',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'width' => '10%',
              ),
              4 => 
              array (
                'name' => 'amount',
                'type' => 'currency',
                'label' => 'LBL_LIKELY',
                'related_fields' => 
                array (
                  0 => 'amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'readonly' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'width' => '10%',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'opportunity_type',
                'width' => '15%',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'lead_source',
                'width' => '15%',
                'label' => 'LBL_LEAD_SOURCE',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'next_step',
                'width' => '10%',
                'label' => 'LBL_NEXT_STEP',
                'enabled' => true,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'date_closed',
                'width' => '10%',
                'label' => 'LBL_DATE_CLOSED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              9 => 
              array (
                'name' => 'created_by_name',
                'width' => '10%',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              10 => 
              array (
                'name' => 'team_name',
                'type' => 'teamset',
                'width' => '5%',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'assigned_user_name',
                'width' => '5%',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'modified_by_name',
                'width' => '5%',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              13 => 
              array (
                'name' => 'date_entered',
                'width' => '10%',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

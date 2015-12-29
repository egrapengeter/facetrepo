<?php
$viewdefs['Opportunities'] = 
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
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'width' => '30%',
                'link' => true,
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
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
                'name' => 'sales_stage',
                'width' => '10%',
                'label' => 'LBL_LIST_SALES_STAGE',
                'enabled' => true,
                'default' => true,
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
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'lead_source',
                'width' => '15%',
                'label' => 'LBL_LEAD_SOURCE',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'next_step',
                'width' => '10%',
                'label' => 'LBL_NEXT_STEP',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'date_closed',
                'width' => '10%',
                'label' => 'LBL_DATE_CLOSED',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'created_by_name',
                'width' => '10%',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'width' => '5%',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'modified_by_name',
                'width' => '5%',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              12 => 
              array (
                'name' => 'date_entered',
                'width' => '10%',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              13 => 
              array (
                'name' => 'expected_completion_date_c',
                'label' => 'LBL_EXPECTED_COMPLETION_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'expected_job_start_c',
                'label' => 'LBL_EXPECTED_JOB_START',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'invoice_number_c',
                'label' => 'LBL_INVOICE_NUMBER',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'team_name',
                'type' => 'teamset',
                'width' => '5%',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'probability',
                'width' => '10%',
                'label' => 'LBL_PROBABILITY',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

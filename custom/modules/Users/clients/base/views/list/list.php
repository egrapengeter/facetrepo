<?php
$viewdefs['Users'] = 
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
                'label' => 'LBL_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '30%',
              ),
              1 => 
              array (
                'name' => 'user_name',
                'label' => 'LBL_USER_NAME',
                'sortable' => true,
                'width' => '5%',
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'is_production_coordinator_c',
                'label' => 'LBL_IS_PRODUCTION_COORDINATOR',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'evaluation_rating_c',
                'label' => 'LBL_EVALUATION_RATING',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'title',
                'label' => 'LBL_TITLE',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '15%',
              ),
              5 => 
              array (
                'name' => 'department',
                'label' => 'LBL_DEPARTMENT',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '15%',
              ),
              6 => 
              array (
                'name' => 'email1',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'width' => '30%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'phone_work',
                'width' => '25%',
                'label' => 'LBL_OFFICE_PHONE',
                'default' => true,
                'enabled' => true,
                'sortable' => true,
              ),
              8 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '10%',
              ),
              9 => 
              array (
                'name' => 'is_admin',
                'label' => 'LBL_IS_ADMIN',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '10%',
              ),
              10 => 
              array (
                'name' => 'is_group',
                'label' => 'LBL_GROUP_USER',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

<?php
$viewdefs['Users'] = 
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
                'name' => 'is_production_coordinator_c',
                'label' => 'LBL_IS_PRODUCTION_COORDINATOR',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'evaluation_rating_c',
                'label' => 'LBL_EVALUATION_RATING',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '10%',
              ),
              3 => 
              array (
                'name' => 'user_name',
                'label' => 'LBL_USER_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '10%',
              ),
              4 => 
              array (
                'name' => 'title',
                'label' => 'LBL_TITLE',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '10%',
              ),
              5 => 
              array (
                'name' => 'department',
                'label' => 'LBL_DEPARTMENT',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '10%',
              ),
              6 => 
              array (
                'name' => 'email',
                'width' => '15%',
                'label' => 'LBL_EMAIL',
                'enabled' => true,
                'default' => false,
                'sortable' => true,
              ),
              7 => 
              array (
                'name' => 'phone_work',
                'width' => '15%',
                'label' => 'LBL_OFFICE_PHONE',
                'enabled' => true,
                'default' => false,
                'sortable' => true,
              ),
              8 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'default' => false,
                'sortable' => true,
                'width' => '10%',
              ),
              9 => 
              array (
                'name' => 'is_admin',
                'label' => 'LBL_IS_ADMIN',
                'enabled' => true,
                'default' => false,
                'sortable' => true,
                'width' => '10%',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

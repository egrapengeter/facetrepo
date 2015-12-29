<?php
$module_name = 'EPI_WO_Line_Items';
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
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              1 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              2 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              3 => 
              array (
                'name' => 'primary_interior_c',
                'label' => 'LBL_PRIMARY_INTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'primary_area_exterior_c',
                'label' => 'LBL_PRIMARY_AREA_EXTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
              ),
              6 => 
              array (
                'name' => 'deck_patio_c',
                'label' => 'LBL_DECK_PATIO',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'prep_interior_c',
                'label' => 'LBL_PREP_INTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'prep_deck_c',
                'label' => 'LBL_PREP_DECK',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'additional_areas_interior_c',
                'label' => 'LBL_ADDITIONAL_AREAS_INTERIOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'prep_exterior_c',
                'label' => 'LBL_PREP_EXTERIOR',
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

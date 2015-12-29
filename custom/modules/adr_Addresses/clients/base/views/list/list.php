<?php
$module_name = 'adr_Addresses';
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
                'name' => 'leads_adr_addresses_1_name',
                'label' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_LEADS_TITLE',
                'enabled' => true,
                'id' => 'LEADS_ADR_ADDRESSES_1LEADS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              2 => 
              array (
                'name' => 'sub_division',
                'label' => 'LBL_SUB_DIVISION',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'property_type',
                'label' => 'LBL_PROPERTY_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'home_class',
                'label' => 'LBL_HOME_CLASS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'priority_not_home',
                'label' => 'LBL_PRIORITY_NOT_HOME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'rating',
                'label' => 'LBL_RATING',
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
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'google_map_link_c',
                'label' => 'LBL_GOOGLE_MAP_LINK',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'house_number',
                'label' => 'LBL_HOUSE_NUMBER',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'street',
                'label' => 'LBL_STREET',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'city',
                'label' => 'LBL_CITY',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'state',
                'label' => 'LBL_STATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'zip',
                'label' => 'LBL_ZIP',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              15 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => false,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              16 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
              ),
              17 => 
              array (
                'name' => 'type_of_substrate_c',
                'label' => 'LBL_TYPE_OF_SUBSTRATE_C',
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

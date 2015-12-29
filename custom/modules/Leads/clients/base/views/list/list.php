<?php
$viewdefs['Leads'] = 
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
                'name' => 'full_name',
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
                ),
                'link' => true,
                'css_class' => 'full-name',
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
                'width' => '10%',
              ),
              1 => 
              array (
                'name' => 'primary_address_street',
                'label' => 'LBL_PRIMARY_ADDRESS_STREET',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'property_type_c',
                'label' => 'LBL_PROPERTY_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'phone_home',
                'label' => 'LBL_HOME_PHONE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'phone_mobile',
                'label' => 'LBL_MOBILE_PHONE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'priority_not_home_c',
                'label' => 'LBL_PRIORITY_NOT_HOME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'width' => '10%',
              ),
              7 => 
              array (
                'name' => 'contact_time_c',
                'label' => 'LBL_CONTACT_TIME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'ready_for_sale_c',
                'label' => 'LBL_READY_FOR_SALE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'times_called_c',
                'label' => 'LBL_TIMES_CALLED',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'rating_c',
                'label' => 'LBL_RATING',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'type_of_substrate_c',
                'label' => 'LBL_TYPE_OF_SUBSTRATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'leads_adr_addresses_1_name',
                'label' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_ADR_ADDRESSES_TITLE',
                'enabled' => true,
                'id' => 'LEADS_ADR_ADDRESSES_1ADR_ADDRESSES_IDB',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'home_class_c',
                'label' => 'LBL_HOME_CLASS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'phone_work',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => false,
                'width' => '10%',
              ),
              15 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'account_id',
                  1 => 'converted',
                ),
                'width' => '10%',
              ),
              16 => 
              array (
                'name' => 'email',
                'label' => 'LBL_LIST_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => false,
                'width' => '10%',
              ),
              17 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'enabled' => true,
                'default' => false,
                'width' => '10%',
              ),
              18 => 
              array (
                'name' => 'status',
                'label' => 'LBL_LIST_STATUS',
                'enabled' => true,
                'default' => false,
                'width' => '10%',
              ),
              19 => 
              array (
                'name' => 'first_name',
                'label' => 'LBL_FIRST_NAME',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'last_name',
                'label' => 'LBL_LAST_NAME',
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

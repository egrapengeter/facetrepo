<?php
// created: 2015-01-13 15:45:08
$viewdefs['Leads']['base']['layout']['convert-main'] = array(
  'modules' =>
  array (
    0 =>
    array (
      'module' => 'Accounts',
      'required' => true,
      'copyData' => true,
      'duplicateCheckOnStart' => true,
      'duplicateCheckRequiredFields' =>
      array (
        0 => 'name',
      ),
      // 'contactRelateField' => 'account_name',
      'fieldMapping' =>
      array (
        'name' => 'account_name',
        'billing_address_street' => 'primary_address_street',
        'billing_address_city' => 'primary_address_city',
        'billing_address_state' => 'primary_address_state',
        'billing_address_postalcode' => 'primary_address_postalcode',
        'billing_address_country' => 'primary_address_country',
        'shipping_address_street' => 'primary_address_street',
        'shipping_address_city' => 'primary_address_city',
        'shipping_address_state' => 'primary_address_state',
        'shipping_address_postalcode' => 'primary_address_postalcode',
        'shipping_address_country' => 'primary_address_country',
        'phone_office' => 'phone_home',
        'home_class_c' => 'home_class_c',
        'property_type_c' => 'property_type_c',
        'lead_rating_c' => 'rating_c',
        'subdivision_c' => 'sub_division',
      ),
    ),
    1 =>
    array (
      'module' => 'Opportunities',
      'required' => false,
      'copyData' => true,
      'duplicateCheckOnStart' => false,
      'duplicateCheckRequiredFields' =>
      array (
        0 => 'account_id',
      ),
      'fieldMapping' =>
      array (
        'name' => 'account_name',
        'phone_work' => 'phone_office',
      ),
      'dependentModules' =>
      array (
        'Accounts' =>
        array (
          'fieldMapping' =>
          array (
            'account_id' => 'id',
          ),
        ),
      ),
      'hiddenFields' =>
      array (
        'account_name' => 'Accounts',
      ),
    ),
  ),
);
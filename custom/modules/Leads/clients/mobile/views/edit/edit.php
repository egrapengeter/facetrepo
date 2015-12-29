<?php
$viewdefs['Leads'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'first_name',
                'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
                'displayParams' => 
                array (
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 
              array (
                'name' => 'last_name',
                'displayParams' => 
                array (
                  'wireless_edit_only' => true,
                ),
              ),
              2 => 'title',
              3 => 'account_name',
              4 => 'phone_work',
              5 => 'phone_mobile',
              6 => 'phone_home',
              7 => 'email1',
              8 => 'primary_address_street',
              9 => 'primary_address_city',
              10 => 'primary_address_state',
              11 => 'primary_address_postalcode',
              12 => 'primary_address_country',
              13 => 
              array (
                'name' => 'ready_for_sale_c',
                'studio' => 'visible',
                'label' => 'LBL_READY_FOR_SALE',
              ),
              14 => 'status',
              15 => 'assigned_user_name',
              16 => 'team_name',
            ),
          ),
        ),
      ),
    ),
  ),
);

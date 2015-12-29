<?php
$module_name = 'adr_Addresses';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:address_convert_button:click',
                'label' => 'Convert Address',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Leads',
                'acl_action' => 'create',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              9 => 
              array (
                'type' => 'divider',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'lead_generation_time_c',
                'studio' => 'visible',
                'label' => 'LBL_LEAD_GENERATION_TIME',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'sub_division',
                'label' => 'LBL_SUB_DIVISION',
              ),
              3 => 
              array (
                'name' => 'property_type',
                'studio' => 'visible',
                'label' => 'LBL_PROPERTY_TYPE',
              ),
              4 => 
              array (
                'name' => 'new_turf_c',
                'label' => 'LBL_NEW_TURF',
              ),
              5 => 
              array (
                'name' => 'turf_region_c',
                'studio' => 'visible',
                'label' => 'LBL_TURF_REGION',
              ),
              6 => 
              array (
                'name' => 'follow_up_at_later_date_c',
                'label' => 'LBL_FOLLOW_UP_AT_LATER_DATE',
              ),
              7 => 
              array (
                'name' => 'follow_up_date_requested_c',
                'label' => 'LBL_FOLLOW_UP_DATE_REQUESTED',
              ),
              8 => 
              array (
                'name' => 'priority_not_home',
                'label' => 'LBL_PRIORITY_NOT_HOME',
              ),
              9 => 
              array (
                'name' => 'pnh_follow_up_c',
                'label' => 'LBL_PNH_FOLLOW_UP',
              ),
              10 => 
              array (
                'name' => 'home_class',
                'studio' => 'visible',
                'label' => 'LBL_HOME_CLASS',
                'span' => 12,
              ),
              11 => 
              array (
                'name' => 'type_of_substrate_c',
                'studio' => 'visible',
                'label' => 'LBL_TYPE_OF_SUBSTRATE_C',
                'span' => 6,
              ),
              12 => 
              array (
                'name' => 'rating',
                'studio' => 'visible',
                'label' => 'LBL_RATING',
              ),
              13 => 
              array (
                'name' => 'house_number',
                'label' => 'LBL_HOUSE_NUMBER',
              ),
              14 => 
              array (
                'name' => 'street',
                'label' => 'LBL_STREET',
              ),
              15 => 
              array (
                'name' => 'city',
                'label' => 'LBL_CITY',
              ),
              16 => 
              array (
                'name' => 'state',
                'label' => 'LBL_STATE',
              ),
              17 => 
              array (
                'name' => 'zip',
                'label' => 'LBL_ZIP',
                'span' => 6,
              ),
              18 => 
              array (
                'name' => 'leads_adr_addresses_1_name',
                'label' => 'LBL_LEADS_ADR_ADDRESSES_1_FROM_LEADS_TITLE',
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'google_map_link_c',
                'label' => 'LBL_GOOGLE_MAP_LINK',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'google_map_c',
                'label' => 'LBL_GOOGLE_MAP',
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              4 => 'assigned_user_name',
              5 => 'team_name',
              6 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              7 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);

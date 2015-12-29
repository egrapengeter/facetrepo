<?php
$module_name = 'EPI_WO_Line_Items';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
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
                'name' => 'line_item_num_c',
                'label' => 'LBL_LINE_ITEM_NUM',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'interior_exterior_c',
                'studio' => 'visible',
                'label' => 'LBL_INTERIOR_EXTERIOR_C',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'primary_interior_c',
                'studio' => 'visible',
                'label' => 'LBL_PRIMARY_INTERIOR',
                'span' => 6,
              ),
              3 => 
              array (
                'name' => 'prep_interior_c',
                'studio' => 'visible',
                'label' => 'LBL_PREP_INTERIOR',
              ),
              4 => 
              array (
                'name' => 'additional_areas_interior_c',
                'studio' => 'visible',
                'label' => 'LBL_ADDITIONAL_AREAS_INTERIOR',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'primary_area_exterior_c',
                'studio' => 'visible',
                'label' => 'LBL_PRIMARY_AREA_EXTERIOR',
              ),
              7 => 
              array (
                'name' => 'prep_exterior_c',
                'studio' => 'visible',
                'label' => 'LBL_PREP_EXTERIOR',
              ),
              8 => 
              array (
                'name' => 'deck_patio_c',
                'studio' => 'visible',
                'label' => 'LBL_DECK_PATIO',
              ),
              9 => 
              array (
                'name' => 'prep_deck_c',
                'studio' => 'visible',
                'label' => 'LBL_PREP_DECK',
                'span' => 6,
              ),
              10 => 
              array (
                'name' => 'other_area_c',
                'studio' => 'visible',
                'label' => 'LBL_OTHER_AREA',
                'span' => 12,
              ),
              11 => 
              array (
                'name' => 'primary_area_serviced_other_c',
                'studio' => 'visible',
                'label' => 'LBL_PRIMARY_AREA_SERVICED_OTHER',
                'span' => 6,
              ),
              12 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'average_areas_of_attention_c',
                'label' => 'LBL_AVERAGE_AREAS_OF_ATTENTION',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'areas_of_attention_rating_c',
                'label' => 'LBL_AREAS_OF_ATTENTION_RATING',
              ),
              2 => 
              array (
                'name' => 'sunware_c',
                'studio' => 'visible',
                'label' => 'LBL_SUNWARE',
              ),
              3 => 
              array (
                'name' => 'faded_c',
                'studio' => 'visible',
                'label' => 'LBL_FADED',
              ),
              4 => 
              array (
                'name' => 'chalking_c',
                'studio' => 'visible',
                'label' => 'LBL_CHALKING',
              ),
              5 => 
              array (
                'name' => 'mildew_decay_c',
                'studio' => 'visible',
                'label' => 'LBL_MILDEW_DECAY',
              ),
              6 => 
              array (
                'name' => 'peeling_flaking_c',
                'studio' => 'visible',
                'label' => 'LBL_PEELING_FLAKING',
              ),
              7 => 
              array (
                'name' => 'structural_failures_c',
                'studio' => 'visible',
                'label' => 'LBL_STRUCTURAL_FAILURES',
              ),
              8 => 
              array (
                'name' => 'surface_bondage_c',
                'studio' => 'visible',
                'label' => 'LBL_SURFACE_BONDAGE',
              ),
              9 => 
              array (
                'name' => 'water_sealed_c',
                'studio' => 'visible',
                'label' => 'LBL_WATER_SEALED',
              ),
              10 => 
              array (
                'name' => 'weathering_c',
                'studio' => 'visible',
                'label' => 'LBL_WEATHERING',
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          3 => 
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
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'assigned_user_name',
              2 => 'team_name',
              3 => 
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
              4 => 
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

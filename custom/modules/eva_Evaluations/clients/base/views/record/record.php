<?php
$module_name = 'eva_Evaluations';
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
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'con_contractors_eva_evaluations_1_name',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'jbs_jobs_eva_evaluations_1_name',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'evaluation_total_c',
                'label' => 'LBL_EVALUATION_TOTAL',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'communication_c',
                'label' => 'LBL_COMMUNICATION',
              ),
              1 => 
              array (
                'name' => 'professionalism_c',
                'label' => 'LBL_PROFESSIONALISM',
              ),
              2 => 
              array (
                'name' => 'abilitytohandlecomplaint_c',
                'label' => 'LBL_ABILITYTOHANDLECOMPLAINT',
              ),
              3 => 
              array (
                'name' => 'ability_rebound_c',
                'label' => 'LBL_ABILITY_REBOUND',
              ),
              4 => 
              array (
                'name' => 'overal_cust_exp_c',
                'label' => 'LBL_OVERAL_CUST_EXP',
              ),
              5 => 
              array (
                'name' => 'would_client_refer_c',
                'label' => 'LBL_WOULD_CLIENT_REFER',
              ),
              6 => 
              array (
                'name' => 'total_cust_service_c',
                'label' => 'LBL_TOTAL_CUST_SERVICE',
                'span' => 12,
              ),
            ),
          ),
          3 => 
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
                'name' => 'respons_timely_c',
                'label' => 'LBL_RESPONS_TIMELY',
              ),
              1 => 
              array (
                'name' => 'state_of_mind_c',
                'label' => 'LBL_STATE_OF_MIND',
              ),
              2 => 
              array (
                'name' => 'ability_to_comm_proj_strat_c',
                'label' => 'LBL_ABILITY_TO_COMM_PROJ_STRAT',
              ),
              3 => 
              array (
                'name' => 'advocate_lime_paint_cult_c',
                'label' => 'LBL_ADVOCATE_LIME_PAINT_CULT',
              ),
              4 => 
              array (
                'name' => 'leads_pass_along_c',
                'label' => 'LBL_LEADS_PASS_ALONG',
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'total_communication_c',
                'label' => 'LBL_TOTAL_COMMUNICATION',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'homebase_utilization_c',
                'label' => 'LBL_HOMEBASE_UTILIZATION',
              ),
              1 => 
              array (
                'name' => 'equip_organization_end_c',
                'label' => 'LBL_EQUIP_ORGANIZATION_END',
              ),
              2 => 
              array (
                'name' => 'trash_gathered_discarded_c',
                'label' => 'LBL_TRASH_GATHERED_DISCARDED',
              ),
              3 => 
              array (
                'name' => 'latters_left_standing_end_c',
                'label' => 'LBL_LATTERS_LEFT_STANDING_END',
              ),
              4 => 
              array (
                'name' => 'window_taped_longer_one_nigh_c',
                'label' => 'LBL_WINDOW_TAPED_LONGER_ONE_NIGH',
              ),
              5 => 
              array (
                'name' => 'tools_organized_during_op_c',
                'label' => 'LBL_TOOLS_ORGANIZED_DURING_OP',
              ),
              6 => 
              array (
                'name' => 'total_cleanliness_c',
                'label' => 'LBL_TOTAL_CLEANLINESS',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'detail_attention_c',
                'label' => 'LBL_DETAIL_ATTENTION',
              ),
              1 => 
              array (
                'name' => 'protected_surfaces_c',
                'label' => 'LBL_PROTECTED_SURFACES',
              ),
              2 => 
              array (
                'name' => 'maximum_water_seal_c',
                'label' => 'LBL_MAXIMUM_WATER_SEAL',
              ),
              3 => 
              array (
                'name' => 'drop_cloths_vacuum_catch_c',
                'label' => 'LBL_DROP_CLOTHS_VACUUM_CATCH',
              ),
              4 => 
              array (
                'name' => 'scrape_paint_feather_sanded_c',
                'label' => 'LBL_SCRAPE_PAINT_FEATHER_SANDED',
              ),
              5 => 
              array (
                'name' => 'power_wash_remove_c',
                'label' => 'LBL_POWER_WASH_REMOVE',
              ),
              6 => 
              array (
                'name' => 'chaulk_warranty_c',
                'label' => 'LBL_CHAULK_WARRANTY',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'total_preparation_c',
                'label' => 'LBL_TOTAL_PREPARATION',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'application_detail_c',
                'label' => 'LBL_APPLICATION_DETAIL',
              ),
              1 => 
              array (
                'name' => 'windows_not_painted_shut_c',
                'label' => 'LBL_WINDOWS_NOT_PAINTED_SHUT',
              ),
              2 => 
              array (
                'name' => 'no_lap_flash_marks_c',
                'label' => 'LBL_NO_LAP_FLASH_MARKS',
              ),
              3 => 
              array (
                'name' => 'no_runs_c',
                'label' => 'LBL_NO_RUNS',
              ),
              4 => 
              array (
                'name' => 'applied_product_c',
                'label' => 'LBL_APPLIED_PRODUCT',
              ),
              5 => 
              array (
                'name' => 'professional_edging_finish_c',
                'label' => 'LBL_PROFESSIONAL_EDGING_FINISH',
              ),
              6 => 
              array (
                'name' => 'sufficient_application_c',
                'label' => 'LBL_SUFFICIENT_APPLICATION',
              ),
              7 => 
              array (
                'name' => 'no_watering_tampering_c',
                'label' => 'LBL_NO_WATERING_TAMPERING',
              ),
              8 => 
              array (
                'name' => 'prime_bare_wood_c',
                'label' => 'LBL_PRIME_BARE_WOOD',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
              10 => 
              array (
                'name' => 'total_application_c',
                'label' => 'LBL_TOTAL_APPLICATION',
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'attendance_job_c',
                'label' => 'LBL_ATTENDANCE_JOB',
              ),
              1 => 
              array (
                'name' => 'reliability_job_c',
                'label' => 'LBL_RELIABILITY_JOB',
              ),
              2 => 
              array (
                'name' => 'work_ethic_c',
                'label' => 'LBL_WORK_ETHIC',
              ),
              3 => 
              array (
                'name' => 'safety_job_c',
                'label' => 'LBL_SAFETY_JOB',
              ),
              4 => 
              array (
                'name' => 'product_material_coordinatio_c',
                'label' => 'LBL_PRODUCT_MATERIAL_COORDINATIO',
              ),
              5 => 
              array (
                'name' => 'property_damage_c',
                'label' => 'LBL_PROPERTY_DAMAGE',
              ),
              6 => 
              array (
                'name' => 'before_after_pics_c',
                'label' => 'LBL_BEFORE_AFTER_PICS',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'total_job_operations_c',
                'label' => 'LBL_TOTAL_JOB_OPERATIONS',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          8 => 
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
              0 => 'assigned_user_name',
              1 => 'team_name',
              2 => 
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
              3 => 
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

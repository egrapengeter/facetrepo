<?php

if(!isset($hook_array['before_save'])) $hook_array['before_save'] = array();

$hook_array['before_save'][] = array(
    10,
    'Opportunities before_save',
    'custom/modules/Opportunities/OppHooks.php',
    'OppHooks',
    'before_save'
);
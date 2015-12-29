<?php

$dependencies['con_Contractors']['evaluation_score_c_readonly'] = array(
    'hooks' => array('edit'),
    'trigger' => 'true',
    'triggerFields' => array('evaluation_score_c'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'evaluation_score_c',
                'value' => 'true',
            ),
        ),
    ),
);
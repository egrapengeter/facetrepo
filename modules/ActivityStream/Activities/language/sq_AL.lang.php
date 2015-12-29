<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
	

$mod_strings = array (
  'TPL_ACTIVITY_ATTACH' => 'Added file <a class="dragoff" target="sugar_attach" href="{{url}}" data-note-id="{{noteId}}">{{filename}}</a>{{{str "TPL_ACTIVITY_ON" "Activities" this}}}',
  'TPL_ACTIVITY_CREATE' => 'Created {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} {{str "LBL_MODULE_NAME_SINGULAR" object.module}}.',
  'TPL_ACTIVITY_DELETE' => 'Deleted {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} {{str "LBL_MODULE_NAME_SINGULAR" object.module}}.',
  'TPL_ACTIVITY_LINK' => 'Linked {{{str "TPL_ACTIVITY_RECORD" "Activities" subject}}} to {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.',
  'TPL_ACTIVITY_ON' => '{{#if object}} on {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.{{/if}}{{#if module}} on {{str "LBL_MODULE_NAME_SINGULAR" module}}.{{else}} {{/if}}',
  'TPL_ACTIVITY_POST' => '{{{value}}}{{{str "TPL_ACTIVITY_ON" "Activities" this}}}',
  'TPL_ACTIVITY_RECORD' => '<a href="#{{buildRoute module=module id=id}}">{{name}}</a>',
  'TPL_ACTIVITY_UNDELETE' => 'Restored {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} {{str "LBL_MODULE_NAME_SINGULAR" object.module}}.',
  'TPL_ACTIVITY_UNLINK' => 'Unlinked {{{str "TPL_ACTIVITY_RECORD" "Activities" subject}}} to {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.',
  'TPL_ACTIVITY_UPDATE' => 'Updated {{#if updateStr}}{{{updateStr}}} on {{/if}}{{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.',
  'TPL_ACTIVITY_UPDATE_FIELD' => '<a rel="tooltip" title="Changed: {{before}} To: {{after}}">{{field_label}}</a>',
  'TPL_COMMENT' => '{{{value}}}',
  'TPL_MORE_COMMENT' => '{{this}} more comment&hellip;',
  'TPL_MORE_COMMENTS' => '{{this}} more comments&hellip;',
  'TPL_SHOW_MORE_MODULE' => 'Më shumë postime',
);


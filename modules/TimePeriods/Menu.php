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
/*********************************************************************************

 * Description:  TODO To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

global $mod_strings;
global $current_user;

$module_menu=Array();
if((is_admin($current_user)|| is_admin_for_module($current_user,'Forecasts')|| is_admin_for_module($current_user,'ForecastSchedule')))
{
$module_menu = Array(
	Array("index.php?module=TimePeriods&action=EditView&return_module=TimePeriods&return_action=DetailView", $mod_strings['LNK_NEW_TIMEPERIOD'],"CreateTimePeriods"),
	Array("index.php?module=TimePeriods&action=ListView&return_module=TimePeriods&return_action=DetailView", $mod_strings['LNK_TIMEPERIOD_LIST'],"TimePeriods"),
	);
}
?>

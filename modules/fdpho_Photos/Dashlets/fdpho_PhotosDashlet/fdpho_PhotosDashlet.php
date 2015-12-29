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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/fdpho_Photos/fdpho_Photos.php');

class fdpho_PhotosDashlet extends DashletGeneric { 
    function fdpho_PhotosDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/fdpho_Photos/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'fdpho_Photos');

        $this->searchFields = $dashletData['fdpho_PhotosDashlet']['searchFields'];
        $this->columns = $dashletData['fdpho_PhotosDashlet']['columns'];

        $this->seedBean = new fdpho_Photos();        
    }
}
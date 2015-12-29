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
require_once('modules/paint_Paints/paint_Paints.php');

class paint_PaintsDashlet extends DashletGeneric { 
    function paint_PaintsDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/paint_Paints/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'paint_Paints');

        $this->searchFields = $dashletData['paint_PaintsDashlet']['searchFields'];
        $this->columns = $dashletData['paint_PaintsDashlet']['columns'];

        $this->seedBean = new paint_Paints();        
    }
}
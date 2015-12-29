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

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

    class SugarFieldEncrypt extends SugarFieldBase {

    /**
     * Decrypt encrypt fields values before inserting them into the emails
     *
     * @param string $inputField
     * @param mixed $vardef
     * @param mixed $displayParams
     * @param int $tabindex
     * @return string
     */
	public function getEmailTemplateValue($inputField, $vardef, $displayParams = array(), $tabindex = 0){
        // Uncrypt the value
        $account = BeanFactory::getBean('Empty');
        return $account->decrypt_after_retrieve($inputField);
    }
}
?>

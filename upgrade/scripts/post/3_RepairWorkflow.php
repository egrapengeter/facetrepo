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

/**
 * repair the workflow sessions
 */
class SugarUpgradeRepairWorkflow extends UpgradeScript
{
    public $order = 3000;
    public $type = self::UPGRADE_DB;

    public function run()
    {
        if (!$this->toFlavor('pro')) return;

        require_once('modules/WorkFlow/WorkFlow.php');
        require_once('modules/WorkFlowTriggerShells/WorkFlowTriggerShell.php');
        require_once('include/workflow/glue.php');

        // Disable time-elapsed workflows that don't have a proper Primary trigger
        $query = "SELECT DISTINCT w.id as workflow_id, w.description as description
                    FROM workflow w, workflow_triggershells wt
                    WHERE w.id = wt.parent_id
                    AND w.deleted = 0
                    AND wt.deleted = 0
                    AND w.type = 'Time'
                    AND wt.frame_type = 'Primary'
                    AND wt.type NOT IN ('compare_any_time', 'compare_specific')
                    AND w.status = 1";
        $brokenWorkflows = $this->db->query($query);
        $descriptionFix = "THIS WORKFLOW WAS DEACTIVATED AUTOMATICALLY BY THE UPGRADE TO SUGAR 7 DUE TO INCOMPATIBILITY. PLEASE DELETE ALL CONDITIONS ON THE WORKFLOW AND RECREATE THEM.";
        while ($row = $this->db->fetchByAssoc($brokenWorkflows)) {
            $workflow = BeanFactory::getBean('WorkFlow', $row['workflow_id']);
            $workflow->status = 0;
            if (strpos($row['description'], $descriptionFix) === false) {
                $workflow->description = "$descriptionFix\n"
                    . $row['description'];
            }
            $workflow->save();
        }

        // Grab all workflows that are time based and have not been deleted
        $query = "SELECT workflow_triggershells.id trigger_id
                    FROM workflow LEFT JOIN workflow_triggershells ON workflow_triggershells.parent_id = workflow.id
                    WHERE workflow.deleted = 0
                    AND workflow_triggershells.deleted = 0
                    AND workflow.type = 'Time'
                    AND workflow_triggershells.type = 'compare_any_time'";
        $data = $this->db->query($query);
        if (empty($data)) {
            return;
        }
        while ($row = $this->db->fetchByAssoc($data)) {
    			$shell = new WorkFlowTriggerShell();
    			$glue_object = new WorkFlowGlue();
    			$shell->retrieve($row['trigger_id']);
    			$shell->eval = $glue_object->glue_normal_compare_any_time($shell);
    			$shell->save();
        }

    	// Call repair workflow
    	$workflow_object = new WorkFlow();
    	$workflow_object->repair_workflow();
    }
}

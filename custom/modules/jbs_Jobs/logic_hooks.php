<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array('1','workflow','include/workflow/WorkFlowHandler.php','WorkFlowHandler','WorkFlowHandler',);
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(99,'After Save (once only when new), generate child Project from Template.','custom/FacetData/JobHookProjectCreateFromTemplate.php','JobHookProjectCreateFromTemplate','job_after_save_create_project_from_template',);



?>

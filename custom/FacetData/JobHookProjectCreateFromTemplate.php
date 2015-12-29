<?php

class JobHookProjectCreateFromTemplate {

public function job_after_save_create_project_from_template(&$bean, $args, $event ) {
    $GLOBALS['log']->error(__METHOD__);

// use direct sql to form the relationship...
  // do we have a relationship already?
  $sql_check = " SELECT count(1) as numprojects FROM jbs_jobs_project_1_c WHERE deleted != 1 and jbs_jobs_project_1jbs_jobs_ida = '{$bean->id}' ";

  $existing = $GLOBALS['db']->query($sql_check);
  $row = $GLOBALS['db']->fetchByAssoc($existing);

  if( $row['numprojects'] == 0) {
    
    unset($existing);
    $newProjectID = $this->createJobProjectFromTemplate($bean,'7d6f8934-d88e-e854-f666-559c56b73e17');
    $rel_date_modified = date('Y-m-d H:i:s');
    $sql_add = " REPLACE INTO jbs_jobs_project_1_c ( date_modified, deleted, id, jbs_jobs_project_1jbs_jobs_ida, jbs_jobs_project_1project_idb ) VALUES ( '" . $rel_date_modified . "',0,'".md5($bean->id . $newProjectID)."','".$newProjectID."','".$bean->id."' ) ";
    $GLOBALS['db']->query($sql_add);
    $GLOBALS['log']->error(__METHOD__.' created Project ID: '. $newProjectID);
    $bean->load_relationship('jbs_jobs_project_1');
    $bean->jbs_jobs_project_1->add($newProjectID);
    return true;
  } else {
    $GLOBALS['log']->error(__METHOD__.' had existing project skipped creation.');
    return true;
  }

return false;
}

public function createJobProjectFromTemplate($jobbean,$projectTemplateID) {
//    $GLOBALS['log']->error(print_r(debug_backtrace(),TRUE));
    $GLOBALS['log']->error(__METHOD__);
global $current_user;
  // projectTemplateBean -- the project template
  // sugarbean           -- the new project being created
  // jobbean             -- the job in question (the parent for relationship)
  $projectTemplateBean = BeanFactory::getBean('Project',$projectTemplateID);
  $sugarbean = BeanFactory::getBean('Project');

  $sugarbean->team_id     = $projectTemplateBean->team_id;
  $sugarbean->team_set_id = $projectTemplateBean->team_set_id;
  // don't set the id... 
  // date entered, date modified, assigned, modified, created by all can be automatic.
  // name can be calculated... to start?
  $sugarbean->name        = 'Project: '. $jobbean->name;
  $sugarbean->description = 'Automatically generated from '.$projectTemplateBean->name.' (id:'.$projectTemplateBean->id.')';
  $sugarbean->deleted     = 0;
  $sugarbean->estimated_start_date = $jobbean->start_date_c;
  $sugarbean->estimated_end_date = ''; // no calculation for this yet.

  //$sugarbean = populateFromPost('', $sugarbean);
  // This basically means we need to fill a bunch of fields from the original project template...

  $projectTasks = array();

  $base_project_id = $projectTemplateBean->id;

  $query = "SELECT id FROM project_task WHERE project_id = '" . $base_project_id . "' AND deleted = 0";
  $result = $sugarbean->db->query($query,true,"Error retrieving project tasks");
  $row = $sugarbean->db->fetchByAssoc($result);

  while ($row != null){
      $projectTaskBean = BeanFactory::getBean('ProjectTask',$row['id']);
      $projectTaskBean->date_entered = '';
      $projectTaskBean->date_modified = '';
      $projectTaskBean->assigned_user_id = $current_user->id;
      array_push($projectTasks, $projectTaskBean);
      $row = $sugarbean->db->fetchByAssoc($result);
  }

  $sugarbean->id = '';
  $sugarbean->assigned_user_id = $current_user->id;

  $sugarbean->is_template = 0;

  if (isset($GLOBALS['check_notify'])) {
      $check_notify = $GLOBALS['check_notify'];
  }
  else {
      $check_notify = FALSE;
  }

  $sugarbean->save($check_notify);
  $return_id = $sugarbean->id;

  for ($i = 0; $i < count($projectTasks); $i++){
      $projectTasks[$i]->id = '';
      $projectTasks[$i]->project_id = $sugarbean->id;

      if ($sugarbean->is_template){
          $projectTasks[$i]->assigned_user_id = '';
      }
      $projectTasks[$i]->team_id = $sugarbean->team_id;
      if(empty( $projectTasks[$i]->duration_unit)) $projectTasks[$i]->duration_unit = " "; //Since duration_unit cannot be null.
      $projectTasks[$i]->save(false);
  }

  $GLOBALS['log']->error(__METHOD__. ' returning newly created project id: '.$return_id);

  return($return_id);

} // end of function createJobProjectFromTemplate


} // end of class JobHookProjectCreateFromTemplate


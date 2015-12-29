<?php

class EstimatesHooksContractorAutoAssign {

    private function is_customer_approved() {
        if($this->bean->status == 'customer_approved') {
            return true;
        } else {
            return false;
        }
    }

    private function has_no_contractor() {
        if(empty($this->bean->con_contractors_fdest_estimates_1con_contractors_ida)) {
            return true;
        } else {
            return false;
        }
    }
    
    private function contractor_rating_score($account_rating,$contractor_rating) {
        if($account_rating == $contractor_rating) {
            return 3;
        } elseif ($account_rating > $contractor_rating) {
            return 1;
        } else {
            return 2;
        }
    }
    
    private function contractor_soonest_score($start_date, $firstworkdate) {
        $days_until_available = round( (strtotime($firstworkdate) - strtotime($start_date)) / 86400 );
        if($days_until_available < 14) {
            return 3;
        } elseif ($days_until_available < 30) {
            return 2;
        } else {
            return 1;
        }
    }

    private function get_best_contractor($rating,$territory, $start_date, $end_date, $current_opportunity_id) {
        // we need to grab this estimate's account's territory and a/b/c rating.
        // we need to first try to grab a contractor in this territory with same ranking or lower
        // first try to match contractor with same exact territory (all three match), then with first two match, then with only one match.
        // get the first territory...
        $territory = BeanFactory::getBean('fdter_Territories',$territory);
        $state = $territory->state;
        $city = $territory->city;
        $subdivision = $territory->subdivision;
        $duration = round( ( strtotime($end_date) - strtotime($start_date) ) / 86400 ); // number of days between end and start.
        
        // need to add the filter to these, which says that the contractor's soonest available date is the Monday of the first week 
        // we need the contractor who... 
        // 
        // id in (select con_contractors_fdest_estimates_1con_contractor_ida from con_contractors_fdest_estimates_1 where con_contractors_fdest_estimates_1fdest_estimates_idb
        //    in (select id from fdest_estimates where status IN ('customer_approved','lime_approved') and id 
        //       in (select opportunities_fdest_estimates_1fdest_estimates_idb from opportunities_fdest_estimates_1 where opportunities_fdest_estimates_1opportunities_ida 
        //          in (select id from opportunities where 
        //          
        // opportunities_fdest_estimates_1
        // minimum monday available, where available means they don't have a start date within 6 days prior or 6 days after (Tue thru Sun). They can have a start date Monday before or Monday after.
        // So if I stacked all their jobs, by start date, I would look for the gaps between each start date.
        // exclude the current opportunity when considering if the contractor is available.
        // available dates should start no earlier than the opportunity.estimated_start_date_c date.
        // first available date is the maximum of either:
        // so, instead we've got start and end dates, 
        //   1. first day after opportunity.estimated_start_date_c in this current opportunity
        //   2. first monday after six days after the maximum opportunity.estimated_start_date_c on which the contractor is the contractor's earliest date.
        // to do this, I need to generate a list of all future weekdays (potential start dates), then subset the contractors by filtering the (not-this-opp) start dates.
        // 
        
        $sql = "select a.id, evaluation_rating_c, territorymatch, opportunities_cstm.expected_job_start_c as opp_start, opportunities_cstm.expected_completion_date_c opp_end from ( ";
        $union_all = '';
        if(!empty($subdivision) && !empty($city) && !empty($state) ) { 
            $sql .= "
                select 
                  con_contractors.id, 
                  con_contractors_cstm.evaluation_rating_c , 
                  3 as territorymatch
                from con_contractors 
                left join fdter_territories_con_contractors_1_c 
                  left join fdter_territories on
                  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1fdter_territories_ida = fdter_territories.id
                on con_contractors.id =  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1con_contractors_idb
                left join con_contractors_cstm on con_contractors.id = con_contractors_cstm.id_c
               
                -- contractor territory match all three
                where fdter_territories.state = '{$state}'
                and fdter_territories.city = '{$city}'
                and fdter_territories.subdivision = '{$subdivision}'
                ";            
                $union_all = "union all";
        }
        
        if(!empty($city) && !empty($state) ) { 
            $sql .= " " . $union_all . "  ";
            $sql .= "                
                select 
                    con_contractors.id, 
                    con_contractors_cstm.evaluation_rating_c , 
                    2 as territorymatch
                from con_contractors left join fdter_territories_con_contractors_1_c 
                  left join fdter_territories on
                  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1fdter_territories_ida = fdter_territories.id
                on con_contractors.id =  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1con_contractors_idb
                left join con_contractors_cstm on con_contractors.id = con_contractors_cstm.id_c
                where fdter_territories.state = '{$state}'
                and fdter_territories.city = '{$city}'
            ";
            $union_all = "union all";
        }

        if( !empty($state) ) { 
            $sql .= " " . $union_all . "  ";
            $sql .= "
                select 
                    con_contractors.id, 
                    con_contractors_cstm.evaluation_rating_c , 
                    1 as territorymatch
                from con_contractors left join fdter_territories_con_contractors_1_c 
                  left join fdter_territories on
                  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1fdter_territories_ida = fdter_territories.id
                on con_contractors.id =  fdter_territories_con_contractors_1_c.fdter_territories_con_contractors_1con_contractors_idb
                left join con_contractors_cstm on con_contractors.id = con_contractors_cstm.id_c
                where fdter_territories.state = '{$state}'
            ";
        }
        
        $sql .= " ) a 
        -- subquery A above contains the list of contractor IDs, the strength of their territory match, and rating.
            left join con_contractors_fdest_estimates_1_c
              left join opportunities_fdest_estimates_1_c
                left join opportunities
                  left join opportunities_cstm
                  on opportunities.id = opportunities_cstm.id_c
                on opportunities_fdest_estimates_1_c.opportunities_fdest_estimates_1opportunities_ida = opportunities.id
              on con_contractors_fdest_estimates_1_c.con_contractors_fdest_estimates_1fdest_estimates_idb = opportunities_fdest_estimates_1_c.opportunities_fdest_estimates_1fdest_estimates_idb
            on a.id = con_contractors_fdest_estimates_1_c.con_contractors_fdest_estimates_1con_contractors_ida
        
        where 
          -- don't include the current opp id in consideration for determining availability
          opportunities.id != '{$current_opportunity_id}'
      
        order by opp_start asc, territorymatch desc, evaluation_rating_c asc ";
        
        // grab the rows, create an array of all the mon-sat days in the future (24 months?), and sub-array of every contractor id (as keys) with value set to 1.
        // loop through the result, and  week(mon-sat)days, with a sub-array of contractors available on that date.
        // for the range of dates in the row, set the contractor's k->v to false.
        // the remainder of the swiss cheese block is the available days.
        // find the first available
        // loop through the sql, 
        // run the sql, grab the resulting id.
        
        // generate working days
        $i = max(time(),strtotime($start_date)); // start no earlier than the date given, otherwise "now".
        
        // loop until about six months out from the start point.
        while($i < ( time() + ( 86400 * 190 ) ) ) {
            // ensure it's not a Sunday, then add it to the stack.
            if(date('w',$i) != 0 ) {
                $workdays[date('Y-m-d',$i)] = 1;
            }
            $i += 86400;
        }

        // Contractors which match 3, 2, 1 parts of territory.
        // Contractors which match A/B/C rating (3 - contractor is same as requested, 2 - contractor is better than requested, 1 - contractor is lesser rating)
        // Contractors which are available soonest (3 - within 2 weeks, 2 - within 4 weeks, 3 - after 4 weeks)
        // total score... 
//        $contractor_scores[$contractor] = array( 'territory' => 3, 'rating' => 3, 'soonest' => 3, 'total' => 9, 'earliest_start_date' => '2015-11-15' );
       
        // generate a matrix now, of every contractor, and the list of workdays.
        
        $result = $GLOBALS['db']->query($sql);
        while($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $GLOBALS['log']->fatal(__METHOD__.' '.print_r($row,TRUE));
            
            if(!isset($availability[$row['id']]) ) {
                // initialize this contractor's set of dates, all set to '1' (available)
                $availability[$row['id']] = $workdays;
            } 
           
            for ( $d = $row['opp_start']; strtotime($d) <= strtotime($row['opp_end']); $d = date('Y-m-d', (strtotime($d) + 86400 ) ) ) {
                // mark them unavailable on the dates listed for this opportunity
                $availability[$row['id']][$d] = 0;
            }
            
            if(!isset($contractor_scores[$row['id']]['rating'])) {
                // the rating is actually a score, (3 - contractor is same as requested, 2 - contractor is better than requested, 1 - contractor is lesser rating)
                $contractor_scores[$row['id']]['rating'] = $this->contractor_rating_score($rating,$row['evaluation_rating_c']);
            }

            if(!isset($contractor_scores[$row['id']]['territory'])) {
                $contractor_scores[$row['id']]['territory'] = $row['territorymatch'];
            }
            
            // need a copy of the ID in the array itself for later.
            if(!isset($contractor_scores[$row['id']]['id'])) {
                $contractor_scores[$row['id']]['id'] = $row['id'];
            }
        }
        $GLOBALS['log']->fatal(__METHOD__.' contractor_scores '.print_r($contractor_scores,TRUE));
        $GLOBALS['log']->fatal(__METHOD__.' availability '.print_r($availability,TRUE));
        $GLOBALS['log']->fatal(__METHOD__.' workdays '.print_r($workdays,TRUE));
        
        // should now have an array of each contractor, and under that, each working day candidate, either 1 (available) or 0 (unavailable).
        // now we should be able to scan that array to accumulate the sequential days available
        
        foreach( $availability as $contractor => $contractorworkdates ) {
            reset($workdays);
            foreach( $workdays as $workdate ) {
                if( $availability[$contractor][$workdate] == 1 ) {
                    if(!isset($firstworkdate)) {
                        // first time, no possibility of a last work date.
                        $running_days = 1;
                        $firstworkdate = $workdate;
                    } else {
                        $running_days += 1;
                        if($running_days >= $duration) {
                            // we have a potential winner, record this as the first date available for this contractor
                            if(!isset($contractor_scores[$contractor]['earliest_start_date'])) {
                                $contractor_scores[$contractor]['earliest_start_date'] = $firstworkdate;
                                $contractor_scores[$contractor]['soonest'] = contractor_soonest_score($start_date, $firstworkdate);
                            }
                           
                        }
                    }
                } else {
                    // not a working day. Record the streak, if any, and reset.
                    $contractor_working_blocks[$contractor][$firstworkdate] = $running_days;
                    unset($running_days);
                    unset($firstworkdate);
                }
            }
        }
        $GLOBALS['log']->fatal(__METHOD__.' availability '.print_r($availability,TRUE));
        $GLOBALS['log']->fatal(__METHOD__.' contractor_scores '.print_r($contractor_scores,TRUE));
        
        // spin up the final rankings array, this is where we can change the weighting, but for now: 1. total score desc, 2. soonest date, ascending, 3. 
        
        foreach ($contractor_scores as $id => $contractor) {
            $contractor_scores[$id]['total'] = $contractor_scores[$id]['rating'];
            $contractor_scores[$id]['total'] += $contractor_scores[$id]['territory'];
            $contractor_scores[$id]['total'] += $contractor_scores[$id]['soonest'];
            if(!isset($best_total) || ($contractor_scores[$id]['total'] > $best_total) ) { 
                $best_total = $contractor_scores[$id]['total'];
            } 
            // first one always wins.
            if(!isset($contractor_by_total[$contractor_scores[$id]['total']])) {
                $contractor_by_total[$contractor_scores[$id]['total']] = $contractor;
            } else {
                // only take updates if the contractor under consideration is a better start date for this ranking. Subsequent ties will be ignored.
                list( $current_earliest_start , $current_contractor_id ) = $contractor_by_total[$contractor_scores[$id]['total']];
                if( strtotime($contractor_scores[$id]['earliest_start_date']) < strtotime($contractor_by_total[$contractor_scores[$id]['total']]['earliest_start_date']) ) {
                    $contractor_by_total[$contractor_scores[$id]['total']] = $contractor;
                }
            }
        }
        $GLOBALS['log']->fatal(__METHOD__.' contractor_by_total '.print_r($contractor_by_total,TRUE));
        $GLOBALS['log']->fatal(__METHOD__.' contractor_scores '.print_r($contractor_scores,TRUE));
        
        // returns the contractor record, which will contain the id, each subtotal, the total, and the start date.
        return($contractor_by_total[$best_total]);
        
    }

    private function territory_is_within_territory($territory_test,$territory_domain) {
        // if the domain territory doesn't exist, assume it will match any test territory.
        // if the domain territory has just a state, and no city or subdivision, 
        // load the territory B.
        // if the territory domain has a subdivision, check territory test (must be exact match)
        // if the territory domain has no state, it's invalid.
        // if the domain has a state, the test must match
        if( empty($territory_domain->subdivision) ) 
            {
            if( empty($territory_domain->city) ) 
                {
                if( empty($territory_domain->state) ) 
                    {
                    // something is wrong if we have a territory with no state, nonetheless, if this is happening, it's a match for sure.
                    $GLOBALS['log']->error(__METHOD__.' There was no State defined on the Territory, assuming the test item is a match.'); 
                    return true;
                    } else {
                        // city and state are empty, state is not.
                        if($territory_domain->state == $territory_test->state ) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                } else {
                    if($territory_domain->city == $territory_test->city) {
                        return true;
                    } else {
                        return false;
                    }
                }
            } else {
                if($territory_domain->subdivision == $territory_test->subdivision) {
                    return true;
                } else {
                    return false;
                }
            }
        }

    public function estimate_before_save_autoassign_contractor(&$bean, $args, $event ) {

        // perform initial setups
        //
        // create a reference to the bean in the object scope
        $this->bean = $bean;

        $this->oppBean = BeanFactory::getBean('Opportunities',$this->bean->opportunities_fdest_estimates_1opportunities_ida);
        $this->accountBean = BeanFactory::getBean('Accounts',$this->oppBean->account_id);

        $account_rating = $this->accountBean->lead_rating_c;
        $account_territory = $this->accountBean->fdter_territories_accounts_1fdter_territories_ida;
        $opp_start_date = $this->oppBean->expected_job_start_c;
        $opp_end_date = $this->oppBean->expected_completion_date_c;
        $opp_id = $this->oppBean->id;

        // Account have a rating? If not, assume C.
        $this->accountRating = !empty($this->accountBean->rating) ? $this->accountBean->rating : 'C';
        $this->accountTerritory = $this->accountBean->fdter_territories_accounts_1fdter_territories_ida;

        // only try to match the contractor if we need to.  If there is one, don't add another.
        if($this->is_customer_approved() && $this->has_no_contractor()) {
            
            if( $contractorResult = $this->get_best_contractor( $account_rating, $account_territory, $opp_start_date, $opp_end_date, $opp_id ) ) {
                // found a contractor.
                $contractorBean = BeanFactory::getBean('con_Contractors',$contractorResult['id']);
		$bean->load_relationship('con_contractors_fdest_estimates_1');
		$bean->con_contractors_fdest_estimates_1->add($contractorBean->id);
                $bean->con_contractors_fdest_estimates_1con_contractors_ida = $contractorBean->id;
                $bean->con_contractors_fdest_estimates_1_name = $contractorBean->name;
                $GLOBALS['log']->info(__METHOD__.' found contractor for Opp '.$opp_id.' and Est '. $bean->id);
                return true;

            } else {
                // no contractor found.
                $GLOBALS['log']->fatal(__METHOD__.' no contractor found.');
                // still, a valid result, so return true.
                return true;
            }
        }
        
        // even if we skipped the main part, it's still valid, return true.

        return true;
    }


    public function createJobProjectFromTemplate($jobbean,$projectTemplateID) {
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

      $base_project_id = $sugarbean->id;

      $query = "SELECT id FROM project_task WHERE project_id = '" . $base_project_id . "' AND deleted = 0";
      $result = $sugarbean->db->query($query,true,"Error retrieving project tasks");
      $row = $sugarbean->db->fetchByAssoc($result);

      while ($row != null){
          $projectTaskBean = BeanFactory::getBean('ProjectTask');
          $projectTaskBean->id = $row['id'];
          $projectTaskBean->retrieve();
          $projectTaskBean->date_entered = '';
          $projectTaskBean->date_modified = '';
          array_push($projectTasks, $projectTaskBean);
          $row = $sugarbean->db->fetchByAssoc($result);
      }

      $sugarbean->id = '';
      $sugarbean->assigned_user_id = $current_user->id;

      $sugarbean->name = $_REQUEST['project_name'];
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

      return($return_id);

    } // end of function createJobProjectFromTemplate


} // end of class JobHookProjectCreateFromTemplate


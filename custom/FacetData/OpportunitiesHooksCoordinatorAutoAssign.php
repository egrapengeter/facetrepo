<?php

class OpportunitiesHooksCoordinatorAutoAssign {

    private function is_customer_approved() {
        $GLOBALS['log']->info(__METHOD__.' start.');
        if($this->bean->sales_stage == 'Closed Won') {
            return true;
        } else {
            return false;
        }
    }

    private function has_no_coordinator() {
        $GLOBALS['log']->info(__METHOD__.' start.');
        if(empty($this->bean->users_opportunities_1users_ida)) {
            return true;
        } else {
            return false;
        }
    }
    
    private function coordinator_rating_score($account_rating,$coordinator_rating) {
        $GLOBALS['log']->info(__METHOD__.' start.');
        if($account_rating == $coordinator_rating) {
            return 3;
        } elseif ($account_rating > $coordinator_rating) {
            return 1;
        } else {
            return 2;
        }
    }
    
    private function coordinator_soonest_score($start_date, $firstworkdate) {
        $GLOBALS['log']->info(__METHOD__.' start.');
        $days_until_available = round( (strtotime($firstworkdate) - strtotime($start_date)) / 86400 );
        if($days_until_available < 14) {
            return 3;
        } elseif ($days_until_available < 30) {
            return 2;
        } else {
            return 1;
        }
    }

    private function get_best_coordinator($rating,$territory, $start_date, $end_date, $current_opportunity_id) {
        $GLOBALS['log']->info(__METHOD__.' start.');
        // we need to grab this estimate's account's territory and a/b/c rating.
        // we need to first try to grab a coordinator in this territory with same ranking or lower
        // first try to match coordinator with same exact territory (all three match), then with first two match, then with only one match.
        // get the first territory...
        $territory = BeanFactory::getBean('fdter_Territories',$territory);
        $state = $territory->state;
        $city = $territory->city;
        $subdivision = $territory->subdivision;
        $duration = round( ( strtotime($end_date) - strtotime($start_date) ) / 86400 ); // number of days between end and start.
        
        // need to add the filter to these, which says that the coordinator's soonest available date is the Monday of the first week 
        // we need the coordinator who... 
        // 
        // minimum monday available, where available means they don't have a start date within 6 days prior or 6 days after (Tue thru Sun). They can have a start date Monday before or Monday after.
        // So if I stacked all their jobs, by start date, I would look for the gaps between each start date.
        // exclude the current opportunity when considering if the coordinator is available.
        // available dates should start no earlier than the opportunity.estimated_start_date_c date.
        // first available date is the maximum of either:
        // so, instead we've got start and end dates, 
        //   1. first day after opportunity.estimated_start_date_c in this current opportunity
        //   2. first monday after six days after the maximum opportunity.estimated_start_date_c on which the coordinator is the coordinator's earliest date.
        // to do this, I need to generate a list of all future weekdays (potential start dates), then subset the coordinators by filtering the (not-this-opp) start dates.
        // 
        
        $sql = "select a.id, evaluation_rating_c, territorymatch, opportunities_cstm.expected_job_start_c as opp_start, opportunities_cstm.expected_completion_date_c opp_end from ( ";
        $union_all = '';
        if(!empty($subdivision) && !empty($city) && !empty($state) ) { 
            $sql .= "
                select 
                  users.id, 
                  users_cstm.evaluation_rating_c , 
                  3 as territorymatch
                from users 
                left join fdter_territories_users_1_c 
                  left join fdter_territories on
                  fdter_territories_users_1_c.fdter_territories_users_1fdter_territories_ida = fdter_territories.id
                on users.id =  fdter_territories_users_1_c.fdter_territories_users_1users_idb
                left join users_cstm on users.id = users_cstm.id_c and users_cstm.is_production_coordinator_c = 1
                -- coordinator territory match all three
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
                  users.id, 
                  users_cstm.evaluation_rating_c , 
                  2 as territorymatch
                from users 
                left join fdter_territories_users_1_c 
                  left join fdter_territories on
                  fdter_territories_users_1_c.fdter_territories_users_1fdter_territories_ida = fdter_territories.id
                on users.id =  fdter_territories_users_1_c.fdter_territories_users_1users_idb
                left join users_cstm on users.id = users_cstm.id_c and users_cstm.is_production_coordinator_c = 1
                where fdter_territories.state = '{$state}'
                and fdter_territories.city = '{$city}'
            ";
            $union_all = "union all";
        }

        if( !empty($state) ) { 
            $sql .= " " . $union_all . "  ";
            $sql .= "
                select 
                  users.id, 
                  users_cstm.evaluation_rating_c , 
                  1 as territorymatch
                from users 
                left join fdter_territories_users_1_c 
                  left join fdter_territories on
                  fdter_territories_users_1_c.fdter_territories_users_1fdter_territories_ida = fdter_territories.id
                on users.id =  fdter_territories_users_1_c.fdter_territories_users_1users_idb
                left join users_cstm on users.id = users_cstm.id_c and users_cstm.is_production_coordinator_c = 1
                where fdter_territories.state = '{$state}'
            ";
        }
        
        $sql .= " ) a 
        -- subquery A above contains the list of coordinator IDs, the strength of their territory match, and rating.
            left join users_opportunities_1_c
                left join opportunities
                  left join opportunities_cstm
                  on opportunities.id = opportunities_cstm.id_c
                on users_opportunities_1_c.users_opportunities_1opportunities_idb = opportunities.id
                and opportunities.id != '{$current_opportunity_id}'
            on a.id = users_opportunities_1_c.users_opportunities_1users_ida
      
        order by opp_start asc, territorymatch desc, evaluation_rating_c asc ";
        
        // grab the rows, create an array of all the mon-sat days in the future (24 months?), and sub-array of every coordinator id (as keys) with value set to 1.
        // loop through the result, and  week(mon-sat)days, with a sub-array of coordinators available on that date.
        // for the range of dates in the row, set the coordinator's k->v to false.
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

        // coordinators which match 3, 2, 1 parts of territory.
        // coordinators which match A/B/C rating (3 - coordinator is same as requested, 2 - coordinator is better than requested, 1 - coordinator is lesser rating)
        // coordinators which are available soonest (3 - within 2 weeks, 2 - within 4 weeks, 3 - after 4 weeks)
        // total score... 
//        $coordinator_scores[$coordinator] = array( 'territory' => 3, 'rating' => 3, 'soonest' => 3, 'total' => 9, 'earliest_start_date' => '2015-11-15' );
       
        // generate a matrix now, of every coordinator, and the list of workdays.
        
        $result = $GLOBALS['db']->query($sql);
        while($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $GLOBALS['log']->fatal(__METHOD__.' '.print_r($row,TRUE));
            
            if(!isset($availability[$row['id']]) ) {
                // initialize this coordinator's set of dates, all set to '1' (available)
                $availability[$row['id']] = $workdays;
            } 
           
            for ( $d = $row['opp_start']; strtotime($d) <= strtotime($row['opp_end']); $d = date('Y-m-d', (strtotime($d) + 86400 ) ) ) {
                // mark them unavailable on the dates listed for this opportunity
                $availability[$row['id']][$d] = 0;
            }
            
            if(!isset($coordinator_scores[$row['id']]['rating'])) {
                // the rating is actually a score, (3 - coordinator is same as requested, 2 - coordinator is better than requested, 1 - coordinator is lesser rating)
                $coordinator_scores[$row['id']]['rating'] = $this->coordinator_rating_score($rating,$row['evaluation_rating_c']);
            }

            if(!isset($coordinator_scores[$row['id']]['territory'])) {
                $coordinator_scores[$row['id']]['territory'] = $row['territorymatch'];
            }
            
            // need a copy of the ID in the array itself for later.
            if(!isset($coordinator_scores[$row['id']]['id'])) {
                $coordinator_scores[$row['id']]['id'] = $row['id'];
            }
        }
        $GLOBALS['log']->fatal(__METHOD__.' coordinator_scores '.print_r($coordinator_scores,TRUE));
        $GLOBALS['log']->fatal(__METHOD__.' availability '.print_r($availability,TRUE));
        $GLOBALS['log']->fatal(__METHOD__.' workdays '.print_r($workdays,TRUE));
        
        // should now have an array of each coordinator, and under that, each working day candidate, either 1 (available) or 0 (unavailable).
        // now we should be able to scan that array to accumulate the sequential days available
        
        foreach( $availability as $coordinator => $coordinatorworkdates ) {
            reset($workdays);
            foreach( $workdays as $workdate ) {
                if( $availability[$coordinator][$workdate] == 1 ) {
                    if(!isset($firstworkdate)) {
                        // first time, no possibility of a last work date.
                        $running_days = 1;
                        $firstworkdate = $workdate;
                    } else {
                        $running_days += 1;
                        if($running_days >= $duration) {
                            // we have a potential winner, record this as the first date available for this coordinator
                            if(!isset($coordinator_scores[$coordinator]['earliest_start_date'])) {
                                $coordinator_scores[$coordinator]['earliest_start_date'] = $firstworkdate;
                                $coordinator_scores[$coordinator]['soonest'] = coordinator_soonest_score($start_date, $firstworkdate);
                            }
                           
                        }
                    }
                } else {
                    // not a working day. Record the streak, if any, and reset.
                    $coordinator_working_blocks[$coordinator][$firstworkdate] = $running_days;
                    unset($running_days);
                    unset($firstworkdate);
                }
            }
        }
        $GLOBALS['log']->fatal(__METHOD__.' availability '.print_r($availability,TRUE));
        $GLOBALS['log']->fatal(__METHOD__.' coordinator_scores '.print_r($coordinator_scores,TRUE));
        
        // spin up the final rankings array, this is where we can change the weighting, but for now: 1. total score desc, 2. soonest date, ascending, 3. 
        
        foreach ($coordinator_scores as $id => $coordinator) {
            $coordinator_scores[$id]['total'] = $coordinator_scores[$id]['rating'];
            $coordinator_scores[$id]['total'] += $coordinator_scores[$id]['territory'];
            $coordinator_scores[$id]['total'] += $coordinator_scores[$id]['soonest'];
            if(!isset($best_total) || ($coordinator_scores[$id]['total'] > $best_total) ) { 
                $best_total = $coordinator_scores[$id]['total'];
            } 
            // first one always wins.
            if(!isset($coordinator_by_total[$coordinator_scores[$id]['total']])) {
                $coordinator_by_total[$coordinator_scores[$id]['total']] = $coordinator;
            } else {
                // only take updates if the coordinator under consideration is a better start date for this ranking. Subsequent ties will be ignored.
                list( $current_earliest_start , $current_coordinator_id ) = $coordinator_by_total[$coordinator_scores[$id]['total']];
                if( strtotime($coordinator_scores[$id]['earliest_start_date']) < strtotime($coordinator_by_total[$coordinator_scores[$id]['total']]['earliest_start_date']) ) {
                    $coordinator_by_total[$coordinator_scores[$id]['total']] = $coordinator;
                }
            }
        }
        $GLOBALS['log']->fatal(__METHOD__.' coordinator_by_total '.print_r($coordinator_by_total,TRUE));
        $GLOBALS['log']->fatal(__METHOD__.' coordinator_scores '.print_r($coordinator_scores,TRUE));
        
        // returns the coordinator record, which will contain the id, each subtotal, the total, and the start date.
        return($coordinator_by_total[$best_total]);
        
    }

    private function territory_is_within_territory($territory_test,$territory_domain) {
        $GLOBALS['log']->info(__METHOD__.' start.');
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

    public function opportunity_before_save_autoassign_coordinator(&$bean, $args, $event ) {
        $GLOBALS['log']->info(__METHOD__.' start.');

        // perform initial setups
        //
        // create a reference to the bean in the object scope
        $this->bean = $bean;

        $this->oppBean = $bean;
        $this->accountBean = BeanFactory::getBean('Accounts',$this->oppBean->account_id);

        $account_rating = $this->accountBean->lead_rating_c;
        $account_territory = $this->accountBean->fdter_territories_accounts_1fdter_territories_ida;
        $opp_start_date = $this->oppBean->expected_job_start_c;
        $opp_end_date = $this->oppBean->expected_completion_date_c;
        $opp_id = $this->oppBean->id;

        // Account have a rating? If not, assume C.
        $this->accountRating = !empty($this->accountBean->rating) ? $this->accountBean->rating : 'C';
        $this->accountTerritory = $this->accountBean->fdter_territories_accounts_1fdter_territories_ida;

        // only try to match the coordinator if we need to.  If there is one, don't add another.
        if($this->is_customer_approved() && $this->has_no_coordinator()) {
            
            if( $coordinatorResult = $this->get_best_coordinator( $account_rating, $account_territory, $opp_start_date, $opp_end_date, $opp_id ) ) {
                // found a coordinator.
                if( $coordinatorBean = BeanFactory::getBean('Users',$coordinatorResult['id']) ) {
                    $GLOBALS['log']->info(__METHOD__.' found coordinator, bean dump '. print_r($coordinatorBean,TRUE) );
                    $bean->load_relationship('users_opportunities_1');
                    $bean->users_opportunities_1->add($coordinatorBean->id);
                    $bean->users_opportunities_1users_ida = $coordinatorBean->id;
                    $bean->users_opportunities_1_name = $coordinatorBean->name;
                    $GLOBALS['log']->info(__METHOD__.' found coordinator for Opp '.$opp_id.' dump of coordinatorResult '. print_r($coordinatorResult,TRUE) );
                    return true;
                } else {
                    $GLOBALS['log']->fatal(__METHOD__.' not able to instantiate coordinatorBean for user id '.$coordinatorResult['id']);
                    return false; 
                }
            } else {
                // no coordinator found.
                $GLOBALS['log']->fatal(__METHOD__.' no coordinator found.');
                // still, a valid result, so return true.
                return true;
            }
        }
        
        // even if we skipped the main part, it's still valid, return true.

        return true;
    }

} // end of class JobHookProjectCreateFromTemplate


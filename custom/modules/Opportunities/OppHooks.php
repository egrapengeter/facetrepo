<?php

class OppHooks
{
    public function before_save($bean, $event, $args)
    {
        if ($bean->sales_stage == 'Closed Won' && $bean->sales_stage != $bean->fetched_row['sales_stage']) {
            // 20150715 peter@facetdata.com Commenting this out since we do this all with the SignatureApi.
	    // $this->create_job($bean);
        }
        
    }//before_save

    private function create_job($bean)
    {
    	$job = new jbs_Jobs();
    	$job->assigned_user_id = $bean->assigned_user_id;
        $job->name = $bean->name;
        $job->start_date_c = $bean->expected_job_start_c;
      
        $job->save();
        //*** load the relationship 
        $bean->load_relationship('opportunities_jbs_jobs_1');
        $bean->opportunities_jbs_jobs_1->add($job->id);
        

        // resave with relationship in place
        $job->save();
    }//create_job

}//OppHooks



<?php
/* File autogenerated by SugarCRM in ActivitesRelationship.php / buildSidecarDashletMeta */

$coreDefs = MetaDataFiles::loadSingleClientMetadata('view','planned-activities');
$coreDefs['dashlets'][0]['filter']['module'] = array('jbs_Jobs');
$coreDefs['tabs'][0]['link'] = 'jbs_jobs_activities_1_meetings';
$coreDefs['tabs'][1]['link'] = 'jbs_jobs_activities_1_calls';
$coreDefs['custom_toolbar']['buttons'][0]['buttons'][0]['params']['link'] = 'jbs_jobs_activities_1_meetings';
$coreDefs['custom_toolbar']['buttons'][0]['buttons'][1]['params']['link'] = 'jbs_jobs_activities_1_calls';
$viewdefs['jbs_Jobs']['base']['view']['planned-activities'] = $coreDefs;
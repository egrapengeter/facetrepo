<?php
/* File autogenerated by SugarCRM in ActivitesRelationship.php / buildSidecarDashletMeta */

$coreDefs = MetaDataFiles::loadSingleClientMetadata('view','planned-activities');
$coreDefs['dashlets'][0]['filter']['module'] = array('con_Contractors');
$coreDefs['tabs'][0]['link'] = 'con_contractors_activities_1_meetings';
$coreDefs['tabs'][1]['link'] = 'con_contractors_activities_1_calls';
$coreDefs['custom_toolbar']['buttons'][0]['buttons'][0]['params']['link'] = 'con_contractors_activities_1_meetings';
$coreDefs['custom_toolbar']['buttons'][0]['buttons'][1]['params']['link'] = 'con_contractors_activities_1_calls';
$viewdefs['con_Contractors']['base']['view']['planned-activities'] = $coreDefs;

<?php
 // created: 2015-03-20 19:51:58
$dictionary['EPI_WO_Line_Items']['fields']['name']['audited']=false;
$dictionary['EPI_WO_Line_Items']['fields']['name']['massupdate']=false;
$dictionary['EPI_WO_Line_Items']['fields']['name']['importable']='false';
$dictionary['EPI_WO_Line_Items']['fields']['name']['duplicate_merge']='disabled';
$dictionary['EPI_WO_Line_Items']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['EPI_WO_Line_Items']['fields']['name']['merge_filter']='disabled';
$dictionary['EPI_WO_Line_Items']['fields']['name']['unified_search']=false;
$dictionary['EPI_WO_Line_Items']['fields']['name']['calculated']='1';
$dictionary['EPI_WO_Line_Items']['fields']['name']['formula']='concat(related($opportunities_epi_wo_line_items_1,"name")," - Item ",$line_item_num_c)';
$dictionary['EPI_WO_Line_Items']['fields']['name']['enforced']=true;

 ?>
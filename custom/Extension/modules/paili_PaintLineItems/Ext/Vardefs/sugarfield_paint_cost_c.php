<?php
 // created: 2015-03-09 20:53:46
$dictionary['paili_PaintLineItems']['fields']['paint_cost_c']['duplicate_merge_dom_value']=0;
$dictionary['paili_PaintLineItems']['fields']['paint_cost_c']['labelValue']='Cost per Gallon';
$dictionary['paili_PaintLineItems']['fields']['paint_cost_c']['calculated']='true';
$dictionary['paili_PaintLineItems']['fields']['paint_cost_c']['formula']='related($paint_paints_paili_paintlineitems_1,"cost_per_gallon_c")';
$dictionary['paili_PaintLineItems']['fields']['paint_cost_c']['enforced']='false';
$dictionary['paili_PaintLineItems']['fields']['paint_cost_c']['dependency']='';
$dictionary['paili_PaintLineItems']['fields']['paint_cost_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>
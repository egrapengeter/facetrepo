<?php
 // created: 2015-07-20 17:36:28
$dictionary['paili_PaintLineItems']['fields']['paint_line_item_total_cost_c']['duplicate_merge_dom_value']=0;
$dictionary['paili_PaintLineItems']['fields']['paint_line_item_total_cost_c']['labelValue']='Total Cost for this Item';
$dictionary['paili_PaintLineItems']['fields']['paint_line_item_total_cost_c']['calculated']='1';
$dictionary['paili_PaintLineItems']['fields']['paint_line_item_total_cost_c']['formula']='currencyMultiply(number($gallons_c),$paint_cost_c,$quantity_c)';
$dictionary['paili_PaintLineItems']['fields']['paint_line_item_total_cost_c']['enforced']='1';
$dictionary['paili_PaintLineItems']['fields']['paint_line_item_total_cost_c']['dependency']='';
$dictionary['paili_PaintLineItems']['fields']['paint_line_item_total_cost_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>
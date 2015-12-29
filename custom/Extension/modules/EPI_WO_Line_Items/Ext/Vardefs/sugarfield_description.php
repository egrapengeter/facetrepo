<?php
 // created: 2015-03-12 19:30:44
$dictionary['EPI_WO_Line_Items']['fields']['description']['audited']=false;
$dictionary['EPI_WO_Line_Items']['fields']['description']['massupdate']=false;
$dictionary['EPI_WO_Line_Items']['fields']['description']['comments']='Full text of the note';
$dictionary['EPI_WO_Line_Items']['fields']['description']['duplicate_merge']='disabled';
$dictionary['EPI_WO_Line_Items']['fields']['description']['duplicate_merge_dom_value']=0;
$dictionary['EPI_WO_Line_Items']['fields']['description']['merge_filter']='disabled';
$dictionary['EPI_WO_Line_Items']['fields']['description']['unified_search']=false;
$dictionary['EPI_WO_Line_Items']['fields']['description']['calculated']='1';
$dictionary['EPI_WO_Line_Items']['fields']['description']['importable']='false';
$dictionary['EPI_WO_Line_Items']['fields']['description']['formula']='ifElse(contains($interior_exterior_c,"Interior"),"- Top of the line Sherwin Williams products used exclusively->Elastomeric Caulk & Peel Bond Primer
- Caulk joints/seams between substrates for a professional finish
- Full use of drop cloths & floor wrap -> Prep & Application
- Focus Prep: Nail pops/Cracks/Caulk lines
- Any Peeling -> Scrape/Feather Sand/Spot Prime
- Upon Daily Completion -> Progress Reports
- Prior to our start, frames/fixtures must be removed from walls and furniture moved 4 feet from the wall
- Once fixtures/furniture are moved, our staff will wrap and protect",
ifElse(contains($interior_exterior_c,"Exterior"),"- Top of the line Sherwin Williams products used exclusively->Elastomeric Caulk & Peel Bond Primer
- Ensure a maximum water seal -> caulk all cracks/joints
- Full use of drop cloths -> Prep & Application
- Focus Prep: Chalking/Water Seal/Peeling
- Any Peeling -> Scrape/Feather Sand/Spot Prime
- Upon Daily Completion -> Progress Reports
- Recommend replacing any boards that compromise product bondage: Water logged and/or a crack longer than 5 inches",
ifElse(contains($interior_exterior_c,"deckpatio"),"- 2700 PSI Power Washer or greater will be used to remove any loose debris from the surface i.e., mildew/algae/etc.
- Floor board tip will be used to eliminate the potential for wood damage
- Once the deck is power washed, we will allow the deck to dry for up to 2-3 days or upon dry
- Full use of drop cloths - Prep & Application
- Any deck screws that are loose will be counter sunk
- Splintering wood will be feather sanded to minimize severity","")))';
$dictionary['EPI_WO_Line_Items']['fields']['description']['enforced']=false;

 ?>
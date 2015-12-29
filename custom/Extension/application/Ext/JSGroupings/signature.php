<?php

// Loop through the groupings to find include/javascript/sugar_grp7.min.js
foreach ($js_groupings as $key => $groupings) {
    foreach ($groupings as $file => $target) {
        if ($target == 'include/javascript/sugar_grp7.min.js') {

            // append jSignature.js library
            $js_groupings[$key]['custom/epicom/js/jSignature.min.js'] = 'include/javascript/sugar_grp7.min.js';
            $js_groupings[$key]['custom/epicom/js/hb-helpers.js'] = 'include/javascript/sugar_grp7.min.js';
        }

        break;
    }
}

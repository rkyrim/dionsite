<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(
    'frontend.default.js' => array(
        '//assets/themes/default/js/vendor/jquery.js',
        '//assets/themes/default/js/vendor/foundation.min.js',
        '//assets/themes/default/js/vendor/init.foundation.js',
        '//assets/themes/default/js/app.js'
    ),

    'dashboard.widget.js' => array(
        '//assets/themes/dashboard/js/vendor/jquery.js',
        '//assets/themes/dashboard/js/vendor/foundation.min.js',
        '//assets/themes/dashboard/js/vendor/init.foundation.js',
        '//assets/themes/dashboard/js/dashboard.js',
        '//assets/themes/dashboard/js/common.js'
    ),

    'fileuploads.js' => array(
    ),

    //CSS Files
    'frontend.default.css' => array(
    	'//assets/themes/default/css/foundation.min.css',
        '//assets/themes/default/css/foundation-icons.css',
    	'//assets/themes/default/css/common.css'
    ),
);
<?php

defined('SYSPATH') or die('No direct script access.');

return array(
    // Application defaults
    'default' => array(
        // source: "query_string" or "route"
        'current_page'      => array('source' => 'route', 'key'    => 'page'),
        'total_items'       => 0,
        'items_per_page'    => 100,
        'view'              => 'pagination/limited_bootstrap',
        'auto_hide'         => TRUE,
        'first_page_in_url' => FALSE,
        //if use limited template
        'max_left_pages'    => 20,
        'max_right_pages'   => 20,
    ),
);

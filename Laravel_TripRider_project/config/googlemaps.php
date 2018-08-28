<?php
return [
    /* =====================================================================
    |                                                                       |
    |                  Global Settings For Google Map                       |
    |                                                                       |
    ===================================================================== */



    /* =====================================================================
    General
    ===================================================================== */
    'key' => 'AIzaSyA6PfzusjGCzRcG1S1zd34WUZZ3y-Dg6lk&libraries', //Get API key: https://code.google.com/apis/console
    'adsense_publisher_id' => '', //Google AdSense publisher ID

    'geocode' => [
        'cache' => false, //Geocode caching into database
        'table_name' => 'gmaps_geocache', //Geocode caching database table name
    ],

    'css_class' => '', //Your custom css class

    'http_proxy' => env('HTTP_PROXY', null), // Proxy host and port
];
//AIzaSyAXWf5kIl7mF3QMTatzK8Y7m-sO16lvr9A
//AIzaSyA6PfzusjGCzRcG1S1zd34WUZZ3y-Dg6lk&libraries
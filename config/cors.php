<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    */

    'paths' => ['*'],

    // Allowed HTTP methods (GET, POST, PUT, DELETE, OPTIONS, etc)
    'allowed_methods' => ['*'],

    // Allowed origins to make requests from
    'allowed_origins' => [
        'http://127.0.0.1:5500',
        'http://localhost:5173',
        'https://travel-planner-ruddy.vercel.app',
    ],

    // Allowed origins with wildcard (e.g. *.mydomain.com)
    'allowed_origins_patterns' => [],

    // Allowed headers on requests
    'allowed_headers' => ['*'],

    // Exposed headers in responses
    'exposed_headers' => [],

    // Max time (in seconds) that browsers can cache preflight requests
    'max_age' => 0,

    // Whether or not cookies and auth headers are allowed in cross-origin requests
    'supports_credentials' => false,

];

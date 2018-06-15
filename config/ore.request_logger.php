<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Table
    |--------------------------------------------------------------------------
    |
    | This is the table used to save logs to the database
    |
    */
    'table' => 'ore_request_logs',

    /*
    |--------------------------------------------------------------------------
    | Blacklist params sent with request (Regex)
    |--------------------------------------------------------------------------
    */
    'blacklist' => '/password/',

    'router' => [
        'prefix'      => '/admin/http-logs',
        'middlewares' => [
            'auth:api',
        ],
    ],

];

<?php

return [
    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views.
    |
    */
    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where compiled Blade templates will be stored.
    | The default uses storage/framework/views, but can be overridden.
    |
    */
    'compiled' => env('VIEW_COMPILED_PATH', realpath(storage_path('framework/views'))),

    /*
    |--------------------------------------------------------------------------
    | Blade View Cache
    |--------------------------------------------------------------------------
    */
    'cache' => env('VIEW_CACHE', true),

    /*
    |--------------------------------------------------------------------------
    | Compiled Extension
    |--------------------------------------------------------------------------
    */
    'compiled_extension' => env('VIEW_COMPILED_EXTENSION', 'php'),

    /*
    |--------------------------------------------------------------------------
    | Cache Timestamp Checking
    |--------------------------------------------------------------------------
    */
    'check_cache_timestamps' => env('VIEW_CHECK_CACHE_TIMESTAMPS', true),

    /*
    |--------------------------------------------------------------------------
    | Relative Hashing
    |--------------------------------------------------------------------------
    */
    'relative_hash' => env('VIEW_RELATIVE_HASH', false),
];

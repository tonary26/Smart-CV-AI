<?php

return [
    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course the
    | usual Laravel view path has already been registered for you.
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
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. Make sure this directory is writable.
    |
    */

    'compiled' => env('VIEW_COMPILED_PATH', storage_path('framework/views')),

    /*
    |--------------------------------------------------------------------------
    | Blade View Cache
    |--------------------------------------------------------------------------
    */

    'cache' => env('VIEW_CACHE', true),

    /*
    |--------------------------------------------------------------------------
    | Other View Settings
    |--------------------------------------------------------------------------
    */

    'compiled_extension' => env('VIEW_COMPILED_EXTENSION', 'php'),
    'relative_hash' => env('VIEW_RELATIVE_HASH', false),
    'check_cache_timestamps' => env('VIEW_CHECK_CACHE_TIMESTAMPS', true),
];


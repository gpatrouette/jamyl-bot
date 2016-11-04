<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Config options for eve APIs etc
    |--------------------------------------------------------------------------
    |
    |
    |
    */

    'avatar_sizes'  => [32, 64, 128, 256, 512, 1024],
    'avatar_url'  => 'https://image.eveonline.com/Character/',
    'pheal_cache' => env('PHEAL_CACHE', 'redis'),

];

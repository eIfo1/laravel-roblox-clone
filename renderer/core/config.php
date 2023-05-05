<?php
 
return [
    // Renderer
    'DB_HOST'         => 'localhost',
    'DB_NAME'         => 'roblox',
    'DB_USER'         => 'root',
    'DB_PASS'         => 'FUCK',
    'SERIOUS_KEY'     => 'key',
    'ALLOWED_TYPES'   => ['item', 'user', 'preview'],
    'FOCUS_ITEMS'     => false,
    'FACES_PNG'       => false,

    // Site
    'SITE_NAME' => 'Roblox Clone',

    // Directories
    'DIRECTORIES' => [
        'ROOT'       => '/home/eifo1/Code/laravel-roblox-clone/',
        'UPLOADS'    => '/home/eifo1/Code/laravel-roblox-clone/uploads',
        'THUMBNAILS' => '/home/eifo1/Code/laravel-roblox-clone/thumbnails'
    ],

    // Colors
    'ITEM_BODY_COLOR' => '#d3d3d3',

    // Avatar
    'AVATARS' => [
        'DEFAULT' => '/home/eifo1/Code/laravel-roblox-clone/renderer/blend/nobevels_avatar.blend',
        'GADGET'  => '/home/eifo1/Code/laravel-roblox-clone/renderer/blend/nobevels_avatar_gadget.blend',
    ],

    // Headshot Camera
    'HEADSHOT_CAMERA' => [
        'LOCATION' => [
            'X' => '-0.633156',
            'Y' => '-1.86332',
            'Z' => '2.68582'
        ],

        'ROTATION' => [
            'X' => '79.56214',
            'Y' => '-0.3928324',
            'Z' => '-18.81374'
        ]
    ],

    // Image Sizes
    'IMAGE_SIZES' => [
        'USER_AVATAR'   => 512,
        'USER_HEADSHOT' => 256,
        'ITEM'          => 375
    ]
];

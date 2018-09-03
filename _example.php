<?php

return [
    'debug'    => true,

    'cache'    => [
        'driver'    => 'file',
        'lifetime'  => 3600,
        'file'      => [
            'dir' => ROOT.'/storage/framework/cache/',
        ],
        'memcached' => [
            [
                'host'   => '127.0.0.1',
                'port'   => '11211',
                'weight' => '100',
            ],
        ],
        'redis' => [
            'index' => 'app',
            'host' => '127.0.0.1',
            'port' => 6379,
            'persistent' => false
        ]
    ],

    'database' => [
        'mysql' => [
            'host'     => '127.0.0.1',
            'username' => 'root',
            'password' => '',
            'dbname'   => 'lightning',
        ],
    ],
];
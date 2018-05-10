<?php
return [
    'database' => [
        'host' => '127.0.0.1',
        'database' => 'biny',
        'user' => 'root',
        'password' => 'root',
        'encode' => 'utf8',
        'port' => 3306,
        'keep-alive' => true,
    ],
    'slaveDb' => [
        'host' => '127.0.0.1',
        'database' => 'Biny',
        'user' => 'root',
        'password' => 'root',
        'encode' => 'utf8',
        'port' => 3306,
    ],
    'memcache' => [
        'host' => '127.0.0.1',
        'port' => 12121,
        'keep-alive' => true,
    ],
    'memcache2' => [
        'host' => '127.0.0.1',
        'port' => 21212,
        'keep-alive' => true,
    ],
    'redis' => [
        'host' => '111.230.135.74',
        'password' => 'root',
        'port' => 6379,
        'keep-alive' => true,
    ],
];
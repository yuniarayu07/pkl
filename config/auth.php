<?php

return [

    

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    'admin' => [
        'driver' => 'session',
        'provider' => 'admin',
      ],

      'admin-api' => [
          'driver' => 'token',
          'provider' => 'admin',
      ],
      
      'user' => [
        'driver' => 'session',
        'provider' => 'user',
      ],

      'user-api' => [
          'driver' => 'token',
          'provider' => 'user',
      ],  

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];

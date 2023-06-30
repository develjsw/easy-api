<?php

$domain = [
    'in-api' => env('IN_API_DOMAIN'),
];

return [
    'easy-api' => [
        'AuthType' => 'BearerToken',
        'AuthKey' => env('TOKEN_AUTH_KEY'),
        'Headers' => [
            'Version' => '1.0.0'
        ],

        'test' => [
            'getUserList' => [
                'Method' => 'get',
                'Uri' => $domain['in-api'] . '/test/users'
            ],
            'getUserOne' => [
                'Method' => 'get',
                'Uri' => $domain['in-api'] . '/test/users/{id}'
            ],
            'createUser' => [
                'Method' => 'post',
                'Uri' => $domain['in-api'] . '/test/users'
            ],
            'updateUser' => [
                'Method' => 'patch',
                'Uri' => $domain['in-api'] . '/test/users/{id}'
            ]
        ]
    ]
];

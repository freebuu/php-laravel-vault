<?php

return [
    'vars' => [
        //пути, по которым драйвер отдает переменные
        'patches' => [
            '/secret/{app}/{env}',
            '/secret/{app}/common',
        ],
        //в пути можно подставлять переменны
        // /secret/{app}/{env}
        // /secret/{app}/common
        'patch_variables' => [
            'env' => config('app.env'),
            'app' => config('app.name')
        ],
    ],
    'default_connection' => env('VAULT_DEFAULT_CONNECTION', 'vault'),
    'connections' => [
        'vault' => [
            'driver'    => 'hashicorp_vault_kv_v1',
            'host'      => ENV('VAULT_HOST', '127.0.0.1'),
            'port'      => ENV('VAULT_PORT', 8200),
            'role_id'   => ENV('VAULT_ROLE_ID', 'role_id'),
            'secret_id' => ENV('VAULT_SECRET_ID', 'secret_id'),
            'role_name' => ENV('VAULT_ROLE_NAME', 'approle'),
        ]
    ],
];
<?php

return [
    // API Credentials
    'api_credentials' => [
        'api_key' => 'YOUR_API_KEY_HERE',
        'api_secret' => 'YOUR_API_SECRET_HERE',
    ],

    // Game Settings
    'game_settings' => [
        'default_game' => 'example_game',
        'supported_games' => [
            'game_one',
            'game_two',
            'game_three',
        ],
    ],

    // Product Definitions
    'product_definitions' => [
        'products' => [
            'product_one' => [
                'name' => 'Product One',
                'price' => 100,
                'currency' => 'USD',
            ],
            'product_two' => [
                'name' => 'Product Two',
                'price' => 200,
                'currency' => 'USD',
            ],
        ],
    ],

    // Webhook Settings
    'webhook' => [
        'enabled' => true,
        'url' => 'https://yourdomain.com/webhook',
        'secret' => 'YOUR_WEBHOOK_SECRET',
    ],

    // Retry Logic
    'retry_logic' => [
        'max_retries' => 3,
        'retry_interval' => 5,
    ],

    // Timeout Configurations
    'timeout' => [
        'request_timeout' => 30,
        'webhook_timeout' => 15,
    ],
];

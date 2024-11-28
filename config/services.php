<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
    'facebook' => [
    'client_id' => '1447898893265043', 
    'client_secret' => 'ab2505b2ee067d3575d1912ae9f96861',
    'redirect' => 'http://localhost:8000/login/facebook/callback',
],

'google' => [
    'client_id' => '224755254123-hk5ehklllir0c8l2e8rs1m7997ndemri.apps.googleusercontent.com', 
    'client_secret' => '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',
    'redirect' => 'http://localhost:8000/login/google/callback',
],


    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    'facebook' => [
    'app_id' => env('FACEBOOK_APP_ID'),
    'app_secret' => env('FACEBOOK_APP_SECRET'),
    'default_graph_version' => 'v14.0',
],
    ],

];

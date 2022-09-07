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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '5286272478',
        'client_secret' => 'e58dcf65d86e7346b8ae',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],
    'google' => [
        'client_id' => '127880160-fd71uelvvhj85j93lt31upjn9o.apps.googleusercontent.com',
        'client_secret' => 'GCSPX-Kb1xTGT2tUorOHSykz4Kny9',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],
    'github' => [
        'client_id' => '5d19bf67d4c7eb06',
        'client_secret' => '657fae0716333e222c18841246a26a',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

];

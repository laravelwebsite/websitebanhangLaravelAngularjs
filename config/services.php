<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
    'domain' => env('MAILGUN_DOMAIN'),
    'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
    'key' => env('SES_KEY'),
    'secret' => env('SES_SECRET'),
    'region' => 'us-east-1',
    ],

    'sparkpost' => [
    'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
    'model' => App\User::class,
    'key' => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
    'client_id' => '294173594409345',
    'client_secret' => 'ed48c8de9cbc4b27cf48df51438ffc87',
    'redirect' => 'http://cv.dev/facebook/callback',
    ],
    'google' => [
    'client_id' => '592503281613-g9k9qc1qbb958aqgfldu89j1sdm0oapd.apps.googleusercontent.com',
    'client_secret' => 'c0pBojPAcMmcRnsHpToWqubE',
    'redirect' => 'http://cv.dev/google/callback',
    ]
];

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
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    // Réseaux sociaux
    'facebook' => [
        'client_id' => env ('FB_ID'),
        'client_secret' => env ('FB_SECRET'),
        'redirect' => env ('FB_URL'),
    ],

    'twitter' => [
        'client_id' => env ('TWITTER_ID'),
        'client_secret' => env ('TWITTER_SECRET'),
        'redirect' => env ('TWITTER_URL'),
    ],
    'github' => [
        'client_id' => env ('GITHUB_ID'),
        'client_secret' => env ('GITHUB_SECRET'),
        'redirect' => env ('GITHUB_URL'),
    ],
    'linkedin' => [
        'client_id' => env ('LKI_ID'),
        'client_secret' => env ('LKI_SECRET'),
        'redirect' => env ('LKI_URL'),
    ],

    'google' => [
        'client_id' => env ('GOOGLE_ID'),
        'client_secret' => env ('GOOGLE_SECRET'),
        'redirect' => env ('GOOGLE_URL'),
    ],

];

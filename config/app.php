<?php

/**
 * Scara uses configuration scripts to configure your installation
 * This config script is the main application configuration
 * and sets default values as well as register Scara's service providers and facades.
 */

return [
    // Basic app configuration
    'debug'             => true,

    'bot_version'       => '1.0',

    // this sets the default timezone for Scara
    'timezone'          => 'America/New_York',

    // The application's translation language
    'lang'              => 'en_US', // Current set language
    'langpath'          => app_path().'/lang/', // Translation location

    // The table that will be used for user authentication
    // Don't include prefix! This will be automatically detected
    'auth_table'        => env('DB_AUTH', 'users'),

    // App Information
    'appname'           => env('APP_NAME', 'scara'),
    'basepath'          => env('APP_BASEPATH', '/scara'),

    // Where are your routes defined?
    'routes'            => app_path().'/routes.php',
    'errors'            => app_path().'/errors.php',

    // This framework uses the Blade templating engine
    // Where are your views and where will you cache your
    // views?
    'views'             => app_path().'/views/',
    'cache'             => storage_path().'/cache/',

    // What driver should the session run?
    // Session, Cookie, or File
    'session'           => env('SESSION_DRIVER', 'file'),

    // If you chose file sessions, where are they stored?
    'session_location'  => storage_path().'/sessions/',

    // Session decrypt token
    // Must be 16, 24, or 32 characters
    'token'             => env('APP_TOKEN', ''),

    // Facades (Aliases) require being registered by
    // The services provider. Any facade's service provider
    // is registered here
    'services'          => [
        Scara\Config\ConfigServiceProvider::class,
        Scara\Foundation\EnvironmentServiceProvider::class,
        Scara\Hashing\HashServiceProvider::class,
        Scara\Html\HtmlServiceProvider::class,
        Scara\Input\InputServiceProvider::class,
        Scara\Validation\ValidatorServiceProvider::class,
        Scara\Session\SessionServiceProvider::class,
        Scara\Auth\AuthenticationServiceProvider::class,
        Scara\Utils\BenchmarkServiceProvider::class,
        Scara\Mail\MailerServiceProvider::class,

        // Place any custom service providers below
        App\Classes\Markdown\MarkdownServiceProvider::class,
    ],

    // Application aliases (Facades)
    // These are used for working with classes in
    // Blade or simple importing of classes in code
    'aliases'           => [
        // Core aliases
        'Config'        => Scara\Support\Facades\Config::class,
        'Environment'   => Scara\Support\Facades\Environment::class,
        'Session'       => Scara\Support\Facades\Session::class,
        'Html'          => Scara\Support\Facades\Html::class,
        'Form'          => Scara\Support\Facades\Form::class,
        'Hash'          => Scara\Support\Facades\Hash::class,
        'Input'         => Scara\Support\Facades\Input::class,
        'Validator'     => Scara\Support\Facades\Validator::class,
        'Auth'          => Scara\Support\Facades\Auth::class,
        'Benchmark'     => Scara\Support\Facades\Benchmark::class,
        'Mail'          => Scara\Support\Facades\Mail::class,

        // Place any custom aliases below
        'Markdown'      => App\Classes\Markdown\MarkdownFacade::class,
    ],

    // Custom validation template array
    'validation'      => [],
];

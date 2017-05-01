<?php

/**
 * Scara has a built in mail class. All config for Scara's mailer
 * is done in here.
 */

return [
    // the only supported driver right now is phpmailer
    'driver'    => 'phpmailer',

    // set to true if you use SMTP, otherwise, set false
    'smtp'      => env('MAIL_SMTP', true),

    // SMTP uses authentication
    // set below values to your SMTP settings
    'smtp_auth' => env('MAIL_SMTP', true),
    'host'      => env('MAIL_HOST', 'mail.domail.com'),
    'port'      => env('MAIL_PORT', 587),
    'use_tls'   => env('MAIL_TLS', false),
    'user'      => env('MAIL_USER', 'user@domail.com'),
    'pass'      => env('MAIL_PASS', 'smtppassword'),
];

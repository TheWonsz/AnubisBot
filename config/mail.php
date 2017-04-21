<?php

/**
 * Scara has a built in mail class. All config for Scara's mailer
 * is done in here.
 */

return [
    // the only supported driver right now is phpmailer
    'driver'    => 'phpmailer',

    // set to true if you use SMTP, otherwise, set false
    'smtp'      => true,

    // SMTP uses authentication
    // set below values to your SMTP settings
    'smtp_auth' => true,
    'host'      => 'mail.domail.com',
    'port'      => 587,
    'use_tls'   => false,
    'user'      => 'test@example.com',
    'pass'      => 'smtppassword',
];

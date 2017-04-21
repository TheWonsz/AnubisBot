<?php

define('SCARA_START', microtime(true));

error_reporting(E_ALL);

require_once __DIR__.'/bootstrap/app.php'; // Load application bootstrap

$app->exec(); // Execute application

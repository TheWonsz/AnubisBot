<?php

date_default_timezone_set('America/New_York');

ini_set('memory_limit', '250M');

$GLOBALS['START_TIME'] = time(); // Uptime tacking start

require_once __DIR__.'/vendor/autoload.php';

$app = new Core\Application();

// Set game presence
$app->setPresence('God of the Underworld');

// Handle whether to display changelog or not
if (!isset($bool) || is_null($bool)) {
    if (env('DEBUG', false) !== true) {
        $bool = true;
    } else {
        $bool = false;
    }
}

$app->logger()->info('Making sure bot tells the world it\'s online');
if (!file_exists(__DIR__.'/bot_online') && !env('DEBUG', false)) {
    $file = fopen(__DIR__.'/bot_online', 'w');
    fwrite($file, 'online');
    fclose($file);
}

$app->start($bool);
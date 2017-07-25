<?php

require_once __DIR__.'/vendor/autoload.php';

use Curl\Curl;

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Content-type: image/svg+xml');

$success = '#25ae19';
$danger = '#ff391f';
$baseurl = 'https://discordbots.org/bot/327322469197283328';

$curl = new Curl();
$curl->get($baseurl);

$status = 'OFFLINE';

preg_replace_callback('/(ONLINE|OFFLINE)/i', function ($m) use (&$status) {
    $status = $m[1];
}, $curl->response);

$info['status'] = $status;

switch (strtolower($status)) {
    case 'online':
        $info['color'] = $success;
        break;
    case 'offline':
        $info['color'] = $danger;
        break;
}

require __DIR__.'/svg.php';

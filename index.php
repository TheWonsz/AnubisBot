<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-type: image/svg+xml');

$success = '#25ae19';
$danger = '#ff391f';

if (file_exists(getcwd().'/../../anubisbot/storage/bot_online')) {
    $info = [
        'color' => $success,
        'status' => 'online',
    ];
} else {
    $info = [
        'color' => $danger,
        'status' => 'offline',
    ];
}

require __DIR__.'/svg.php';

// the following is used to convert int colors to hex
// $col = 16726303;
// $hex = dechex($col);

// while (count(str_split($hex)) < 6) {
//     $temp = $hex;
//     $hex = '0'.$temp;
// }

// echo $hex;

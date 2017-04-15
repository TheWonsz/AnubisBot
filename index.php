<?php

require_once __DIR__.'/vendor/autoload.php';

$success = '#25ae19';
$danger = '#ff391f';

use Curl\Curl;
use Ratchet\Client as DC;

$guildid = env('GUILD_ID', '');

$curl = new Curl();
$curl->setHeader('Authorization', 'Bot '.env('TOKEN', ''));
$curl->setHeader('User-Agent', 'AnubisBot Back End');
$curl->setHeader('Content-type', 'application/json');
$curl->get('https://discordapp.com/api/v6/gateway/bot');

$wss = $curl->response->url;

$op = [
    'op' => 8,
    'd' => null,
    's' => 0,
    't' => 'GUILD_CREATE',
];

$ws = DC\connect($wss, $op)->then(function ($c) {
    dd($c);
});

dd($ws);

// use RestCord\DiscordClient;

// $discord = new DiscordClient(['token' => env('TOKEN', '')]);

// // dd($discord);

// // $gid = (int)env('GUILD_ID', '');
// // var_dump($gid);
// // // dd($gid);
// dd($discord->guild->getGuildRoles(['guild.id' => $guildid]));

// $info = [
//     'color' => $success,
//     'status' => 'Online',
// ];

// require __DIR__.'/svg.php';

// the following is used to convert int colors to hex
// $col = 16726303;
// $hex = dechex($col);

// while (count(str_split($hex)) < 6) {
//     $temp = $hex;
//     $hex = '0'.$temp;
// }

// echo $hex;

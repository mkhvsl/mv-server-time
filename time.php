<?php

require __DIR__ . '/vendor/autoload.php';

use Mkhvsl\MvServerTime\ServerTime;

$time = (new ServerTime())->now(); // Based on server IP
// or
//$time = (new ServerTime())->now('8.8.8.8'); // Based on provided IP

echo $time->format('Y-m-d H:i:s');

var_dump($time);
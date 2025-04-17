<?php

require __DIR__ . '/vendor/autoload.php';

use Mkhvsl\MvServerTime\ServerTime;

var_dump((new ServerTime())->now());
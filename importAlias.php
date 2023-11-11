<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use data\satu\conflict as conflict1;
use data\dua\Conflict as conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new conflict1();
$conflict2 = new conflict2();

help();

echo APP . PHP_EOL;
<?php

// buat namespace
// import data dari conflict
require "conflict.php";
// buat obeject dari namespace yang di buat
$conflict1 = new data\one\conflict();
$conflict2 = new data\two\conflict();
// import data helper
require "helper.php";
// tampilkan helper menggunakan echo
echo Helper\APPLICATION .PHP_EOL;
// masukan Helper\helpMe();
Helper\helpMe();

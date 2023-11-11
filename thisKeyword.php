<?php

// import data/person.php
require "data/person.php";
// buat object dari kelas person
$person1 = new person();
// tambahkan value nama di object
$person1->nama = "Muhammad Rifky Ramadani";
// panggil function sayHelloNull dengan parameter
$person1->sayHelloNull("Dwi Saputro");
// buat object dari kelas person
$person2 = new person();
// tambahkan value nama di object
$person2->nama = "Muhammad Salman Alfarizi";
// panggil function sayHelloNull dengan parameter null
$person2->sayHelloNull(null);

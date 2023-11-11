<?php

// import data/person.php
require "data/manager.php";
// buat object new manager dan tambahakan value nama kemudian panggil function
$manager1 = new manager();
$manager1->nama = "Rifky";
$manager1->sayHello("Ramadani");
// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident1 = new vicePresident();
$vicePresident1->nama = "Dwi";
$vicePresident1->alamat = "Bengkulu";
$vicePresident1->sayHello("Saputor");

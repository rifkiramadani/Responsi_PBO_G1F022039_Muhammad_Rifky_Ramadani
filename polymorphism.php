<?php

require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("Muhammad Rifky Ramadani");
var_dump($company);

$company->programmer = new BackendProgrammer("Muhammad Rifky Ramadani");
var_dump($company);

$company->programmer = new FrontendProgrammer("Muhammad Rifky Ramadani");
var_dump($company);

sayHelloProgrammer(new Programmer("Muhammad Rifky Ramadani"));
sayHelloProgrammer(new BackendProgrammer("Muhammad Rifky Ramadani"));
sayHelloProgrammer(new FrontendProgrammer("Muhammad Rifky Ramadani"));
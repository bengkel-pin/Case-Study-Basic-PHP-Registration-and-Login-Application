<?php

require_once __DIR__ . "/../Model/Users.php";
require_once __DIR__ . "/../BussinessLogic/RegisterUser.php";

registerUser("Kelvin", "1234");
registerUser("Kelvin", "1234");
registerUser("Joko", "pass3");

var_dump($users);
<?php

require_once __DIR__ . "/../Model/Users.php";
require_once __DIR__ . "/../BussinessLogic/Login.php";

$users[1] = ["username" => "Kelvin", "password" => "1234"];

login("Kelvin", "1234");
login("Klvn", "1234");
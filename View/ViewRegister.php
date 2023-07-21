<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BussinessLogic/RegisterUser.php";
require_once __DIR__ . "/viewMenu.php";

function viewRegister()
{

    $isNotDone = true;
    while ($isNotDone) {
        echo "REGISTER" . PHP_EOL;
        $username = input("Create a new username");
        $password = input("Create a strong password");

        if (registerUser($username, $password)) {
            $isNotDone = false;
            viewMenu();
        }
    }
}

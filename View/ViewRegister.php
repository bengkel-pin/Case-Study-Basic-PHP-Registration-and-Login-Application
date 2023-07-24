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

        echo "Password must contain: " . PHP_EOL;
        echo "1. At least 8 characters" . PHP_EOL;
        echo "2. At least one lowercase letter (a-z)" . PHP_EOL;
        echo "3. At least one uppercase letter (A-Z)" . PHP_EOL;
        echo "4. At least one number (0-9)" . PHP_EOL;
        echo "5. At least one special character" . PHP_EOL;
        $password = input("Create a strong password");

        if (registerUser($username, $password)) {
            $isNotDone = false;
            viewMenu();
        }
    }
}

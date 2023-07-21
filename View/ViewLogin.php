<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BussinessLogic/Login.php";

function viewLogin()
{
    $isTryagain = true;
    while ($isTryagain) {
        echo "LOGIN" . PHP_EOL;
        $username = input("Username");
        $password = input("Password");

        if (login($username, $password)) {
            $isTryagain = false;
            echo "Login Success" . PHP_EOL;
        } else {
            echo "Username or password is wrong" . PHP_EOL;
            $isTryagain = strtolower(input("Try Again (Y) or Back to Menu (N)"));
            if ($isTryagain == 'n') {
                viewMenu();
                $isTryagain = false;
            }
        }
    }
}

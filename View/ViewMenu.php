<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/ViewLogin.php";
require_once __DIR__ . "/ViewRegister.php";

function viewMenu()
{
    echo "MENU" . PHP_EOL;
    echo "1. LOG IN" . PHP_EOL;
    echo "2. REGISTER" . PHP_EOL;

    $pickedOption = true;
    while ($pickedOption !== "1" || $pickedOption !== "2") {
        $pickedOption = input("Choose an option");

        if ($pickedOption == "1") {
            viewLogin();
            break;
        } else if ($pickedOption == "2") {
            viewRegister();
            break;
        } else {
            echo "Option is not understood" . PHP_EOL;
        }
    }
}

<?php

require_once __DIR__ . "/../Helper/validatePassword.php";

/**
 * Add new user to the array
 */
function registerUser(string $username, string $password)
{

     global $users;

     // Check if the username exist
     if (array_search($username, array_column($users, 'username')) !== false) {
          echo "Username is not available" . PHP_EOL;
          return false;
     }

     //Validate the password
     if (!validatePassword($password)){
          echo "Password is not valid" . PHP_EOL;
          return false;
     }

     $lastQueue = sizeof($users);

     $users[$lastQueue] = ["username" => $username, "password" => $password];

     echo "User Created" . PHP_EOL;
     return true;
}

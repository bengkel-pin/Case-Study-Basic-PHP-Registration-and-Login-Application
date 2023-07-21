<?php

/**
 * Add new user to the array
 */
function registerUser(string $username, string $password){

     global $users;
    
     $lastQueue = sizeof($users);

     // Check if the username exist
     if (array_search($username, array_column($users, 'username')) !== false) {
          echo "Username is not available" . PHP_EOL;
          return false;
     }

     $users[$lastQueue] = ["username" => $username, "password" => $password];

     echo "User Created" . PHP_EOL;
     return true;
}
<?php

/**
 * Check if the user exist
 */
function login(string $username, string $password){
    global $users;

    // Find the account
    $key = array_search($username, array_column($users, 'username'));
    if ($key === false){
        return false;
    }

    // Account found, check the password
    if($password !== $users[$key]["password"]){
        return false;
    }

    return true;
}
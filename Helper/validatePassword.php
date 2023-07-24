<?php

function validatePassword($password){
    // Check if the password contains at least 8 characters
    if (strlen($password) < 8) {
        return false;
   }

   // Check if the password contains at least one lowercase letter
   if (!preg_match('/[a-z]/', $password)) {
        return false;
   }

   // Check if the password contains at least one uppercase letter
   if (!preg_match('/[A-Z]/', $password)) {
        return false;
   }

   // Check if the password contains at least one number
   if (!preg_match('/[0-9]/', $password)) {
        return false;
   }

   // Check if the password contains at least one special character
   if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
        return false;
   }

   return true;
}
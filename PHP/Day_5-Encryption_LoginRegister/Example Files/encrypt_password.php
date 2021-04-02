<?php

/*  
    It is necessary to hash passwords before storing in the DB.

*/

// Original password
$password = '1234';

// DO NOT USE THOSE FUNCTIONS : 
// Weak/Old algorithm for generation a hash
/*
$salt = 'ajzeiofhaiozeh';
$hash = md5($password);
$hash = sha1($password);
*/

// Password hash will encrypt your password using the bcrypt() algorithm

// PASSWORD_DEFAULT : means bcrypt()
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Generates a 60char long password
echo $hashedPassword;

echo '<hr>';

if (password_verify('1234', $hashedPassword)) {
    echo 'Passwords match !';
} else {
    echo 'Passwords DOEST NOT match !';
}

<?php

// FIRST : start session

/*
    If its the first time, you start a session
    It will create a new one for you.

    If you already opened a session before.
    You can resume the previous session.

*/

session_id('759e38mgm526v644fh85jpv0q2');
session_start();

// Session values can be access using a super global variable $_SESSION

// Create a session element :
//$_SESSION['cart'] = 'tshirt';
// setcookie('PHPSESSID', '759e38mgm526v644fh85jpv0q2');

var_dump($_SESSION);

echo '<br>';

var_dump($_COOKIE);

// Remove a specific key/value in the session 
unset($_SESSION['nickname']);

// Delete the whole session : 
session_destroy();

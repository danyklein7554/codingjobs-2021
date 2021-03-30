<?php

/*
    Functions :

    Functions are block of code that you can reuse.
    Functions can either return values, or simply perform an action.

*/

// Declare a function
function hello_world()
{
    echo 'Hello, world<br>';
}

// Call a function
hello_world();

// Function with return
function hello_world2()
{
    // return stop the function before returning the value
    return 'Hello, world2';

    // this will never be executed :
    echo 'yoyoyo';
}

// Call the function
$message = hello_world2();
echo $message . '<br>';




// Function with arguments :
function greetings($msg)
{
    echo 'Hello, this is your message : ' . $msg . '<br>';
}

// Call the function
greetings('stupid message');
greetings('smart message');

$message = 'average message';
greetings($message);

// Scope : visibility of variables



$myNumber = 5;
echo 'BEFORE -- Number outside function : ' . $myNumber . '<br>';

echo displayMessage($myNumber);

echo 'AFTER -- Number outside function : ' . $myNumber . '<br>';


// $x to access by value OR &$x to access by reference
// $x to create copy OR &$x to access the original
function displayMessage(&$x)
{
    $x += 10;
    return 'INSIDE THE FUNCTION : ' . $x;
}

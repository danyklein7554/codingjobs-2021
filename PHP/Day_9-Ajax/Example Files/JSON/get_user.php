<?php

// Get the content of the file
$file_content = file_get_contents('users.json');

var_dump($file_content);

// Decode it into a usable object/array in PHP
$json_converted = json_decode($file_content);

echo '<pre>';
var_dump($json_converted);
echo '</pre>';

// Loop through users array
foreach ($json_converted->users as $user) {
    echo '<hr>';
    // Each user is an object, so use '$obj->property' syntax
    echo $user->firstname . '<br>';
    echo $user->lastname . '<br>';
}

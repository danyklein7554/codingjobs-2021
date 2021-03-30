<?php

// Usefull functions to use on Strings
$string = 'Here, take a beer';

// Make the whole string lowercase :
echo strtolower($string) . '<br>';

// Make the wholte string uppercase :
echo strtoupper($string) . '<br>';

// First letter uppecase
echo ucfirst($string) . '<br>';

// First letter of each word uppercase :
echo ucwords($string) . '<br>';

// Find the position of a substring in a string
echo strpos($string, ',') . '<br>';
echo strpos($string, 'beer') . '<br>';

// Retrieve only one part of a string 
echo substr($string, 5) . '<br>';
echo substr($string, 6, 4) . '<br>';

// Replace all occurences of a word in a string
echo str_replace('beer', 'coca-cola', $string);

// Get the length of a string
echo strlen($string) . '<br>';

// Convert a string into an array :
$string = 'Hello I Hope You Are Ok';
$myArray = explode(' ', $string);

echo '<pre>';
var_dump($myArray);
echo '</pre>';

// Convert an array into a string :
$newString = implode('*', $myArray);
echo $newString;

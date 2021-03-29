<?php

// Set the timezone
date_default_timezone_set('Europe/Luxembourg');

// Date() function 

// Return the day's number
echo date('d') . '<br>';

// Return the month's number
echo date('m') . '<br>';
echo date('M') . '<br>';

// Return the year
echo date('Y') . '<br>';

// Return day and month :
echo date('d m') . '<br>';

// Retun today's date :
echo date('Y/m/d H:i:s') . '<br>';


// Mktime : Convert a date into a timestamp
// 22/04/2019 - 19h00m30s
$timeStamp = mktime(19, 00, 30, 04, 22, 2019);

echo 'Timestamp : ' . $timeStamp;

echo date('Y/m/d H:i:s', $timeStamp) . '<br>';

/*
 strototime : 
 Will convert a date, or a strinb
 into a timestamp.
*/

echo strtotime('now') . '<br>';
echo strtotime('19 October 2001') . '<br>';
echo strtotime('next Thursday') . '<br>';
echo strtotime('+2 days') . '<br>';

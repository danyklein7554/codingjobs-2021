<?php

/*
	1. Display the type of each variable at the end of the script (using only one function)
	2. Display the type AND the value of each variable (using only one function)
*/

$x = 5;
$y = "1";
$z = true;
$n = 2.5;
$z = $x + $y;
$k = $n * $y;

echo '$x is of type : ' . gettype($x) . '<br>';
echo '$y is of type : ' . gettype($y) . '<br>';
echo '$z is of type : ' . gettype($z) . '<br>';
echo '$n is of type : ' . gettype($n) . '<br>';
echo '$k is of type : ' . gettype($k) . '<br>';

$var = (int) $_POST['toto'];

/*
	Show the date (in a nice format) for :
		- Today
		- Tomorrow
		- The same date than today one month later
*/

/*
	Create an array with the numbers from 1 to 100 : Create it dynamically using a loop.
	Once it has been created, display it in a HTML list (ul/li)
*/

/*
	Using the moviedb :
	1. Connect to the database and choose the moviedb
	2. Run a query to get all movies by George Lucas
	3. Display the movies in a HTML <table>
		You should display title, views, the poster and the name of the director.
*/
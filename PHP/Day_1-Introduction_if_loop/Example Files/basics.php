<?php

// This is PHP comment on a single Line

/*
    We can write some comments
    on many linessss
*/

// 1. Simple Variables
$firstName = 'Simon';
$luxPopulation = 5000;
$height = 4.5;
$are_you_great = true;

/*
    Rules :
    - Always start with letter
    - Can contain numbers
    - No symbols, except underscore 

*/

// Display variable :
echo $firstName . '<br>' . $luxPopulation;

echo '<h1>' . $firstName . '</h1>';

// Display type of variable :
echo gettype($firstName);

// Display content & type (debug)
var_dump($firstName);

//2. Arithmetic Operators
$a = 5 + 2;
$a = 5 - 2;
$a = 5 / 2;
$a = 5 * 2;
$a = 10 % 2;


// Short way 
//$a = $a + 2;
$a += 2;

// $b = $b -5;
$b -= 5;

$c *= 3;
$d /= 10;

// Increment :
$b += 1;
$b++;

// Decrement
$b -= 1;
$b--;


//3. Concatenation
$name = 'simon';
echo 'Hello, how are you ' . $name . ' ?';

//4. quotes
// Single or double quotes :
$string1 = 'Just a regular sentence.';
$string2 = "wouhouuuu";


$color = 'red';

// Using single quotes (display as text)
echo 'It happens that my face goes $color <br>';

// Using double quotes : display content of variable
echo "It happens that my face goes $color <br>";

//5. Escape character
$str = 'This is a beautiful day. It\'s wonderful';

//6. Numerical Arrays

// Initialize empty array
$myArray = array();

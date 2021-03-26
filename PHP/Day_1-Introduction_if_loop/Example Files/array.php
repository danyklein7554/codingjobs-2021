<?php

// Initialize empty array
$myArray = array();
$myArray = [];

// echo doesnt work to display the full array
var_dump($myArray);

$movies = array(
    'NightCrawler',
    'Star Wars',
    'Inception'
);

$movies = [
    0 => 'NightCrawler',
    1 => 'Star Wars',
    2 => 'Inception'
];


echo '<pre>';
var_dump($movies);
echo '</pre>';

// Access an element of the array
echo 'My first movie is ' . $movies[0] . '<br>';

// Replace element :
$movies[1] = 'Jurassic Park';

// Add a new element to the array :
$movies[3] = 'The Hobbit';

// Add to the end of the array :
$movies[] = 'Batman: The Dark Knight';

// Access an element
echo $movies[1] . '<br>';

$i = 1;
echo $movies[$i];

// Remove an element
unset($movies[0]);

echo '<pre>';
var_dump($movies);
echo '</pre>';

// Reorder array : sort/order
$movies = array_values($movies);

echo '<pre>';
var_dump($movies);
echo '</pre>';

// Count number of elements :
$numberOfElements = count($movies);

// You can sort an array :
sort($movies);

echo '<pre>';
var_dump($movies);
echo '</pre>';

// 7. Associative arrays
$person1 = [
    'firstname' => 'simon',
    'age' => 30,
    'mail' => 'simon@simon.fr'
];

// Display element
echo $person1['firstname'];
// Add a new element :
$person1['phone'] = '+3325457784';

echo '<pre>';
var_dump($person1);
echo '</pre>';


$movies = [
    0 => [
        'title' => 'NightCrawler',
        'director' => 'Dan Gilroy',
        'release_date' => 2014
    ],
    1 => [
        'title' => 'Star wars',
        'director' => 'George Lucas',
        'release_date' => 1985
    ],
    2 => [
        'title' => 'Inception',
        'director' => 'Chritopher Nolan',
        'release_date' => 2010
    ]
];

echo $movies[0]['director'];

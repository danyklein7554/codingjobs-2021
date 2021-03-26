<?php

// 1. For Loop
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

echo '<hr>';

// 2. While
$a = 11;

while ($a <= 10) {
    echo $a . '<br>';
    $a++;
}

// 3. Do...While
do {
    echo $a . '<br>';
    $a++;
} while ($a <= 10);

// 4. For Each loop : iterate through an array

$movies = [
    'jurassic park',
    'star wars'
];

foreach ($movies as $key => $movie) {
    echo $movie . '<br>';
}

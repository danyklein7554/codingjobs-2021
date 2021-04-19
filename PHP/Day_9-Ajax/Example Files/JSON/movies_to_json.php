<?php

// SAME EXAMPLE : But remove <body> <html> ...

$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Prepare my query
$query = 'SELECT * FROM movies';

// Send the query to the DB
$results = mysqli_query($conn, $query);

// Fetch as associative array
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

echo '<pre>';
var_dump($movies);
echo '</pre>';

// Convert my movies array into a json format
$json_movies = json_encode($movies, JSON_PRETTY_PRINT);

var_dump($json_movies);

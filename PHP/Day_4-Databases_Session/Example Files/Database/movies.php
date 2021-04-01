<?php

// WORKING WITH DATABASES

// Connect to my DB Server (return false OR informations)
include_once 'database.php';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

// Did I connect successfully ?
if ($conn) {

    // Prepare my query
    $query = 'SELECT * FROM movies';

    // Send the query to the DB
    $results = mysqli_query($conn, $query);

    /*
        I retrieved results
        BUT I need to fetch to use them
    */

    // Fetch as associative array
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

    echo '<pre>';
    var_dump($movies);
    echo '</pre>';

    // Close the connection to the DB
    mysqli_close($conn);
} else {
    echo 'Problem connecting to the DB';
}

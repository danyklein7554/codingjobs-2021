<?php

// WORKING WITH DATABASES

// Connect to my DB Server (return false OR informations)
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Did I connect successfully ?
if ($conn) {

    // Prepare my query
    $query = "INSERT INTO movies(title, date_of_release, poster, director_id)
    VALUES('Indiana Jones', '1987-05-20', '', 1)";

    // Send the query to the DB
    $results = mysqli_query($conn, $query);

    // INSERT/UPDATE/DELETE returns true OR false.
    if ($results == true)
        echo 'Inserted successfully';
    else
        echo 'Problem inserting';

    // Close the connection to the DB
    mysqli_close($conn);
} else {
    echo 'Problem connecting to the DB';
}

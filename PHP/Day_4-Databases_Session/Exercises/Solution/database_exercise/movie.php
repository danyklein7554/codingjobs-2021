<?php

// Grab my ID from my url
// I'm using GET method to pass data (id) to this page
$id = $_GET['id'];

require_once 'database.php';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

// Did I connect successfully ?
if ($conn) {
    // Prepare my query
    $query = 'SELECT * 
    FROM movies m
    INNER JOIN directors d ON m.director_id = d.id
    WHERE m.id = ' . $id;

    /* 
        I need to specify m.id because there are two 'id' (from movie and director).
        
        I need to specify which id
    */

    // Send the query to the DB
    $results = mysqli_query($conn, $query);

    // Fetch as associative array
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<p>
    <img src="<?= $movies[0]['poster']; ?>" width="100px">
    <br>

    <strong>Title :</strong>
    <?= $movies[0]['title']; ?>
    <br>

    <strong>Date : </strong>
    <?= $movies[0]['date_of_release']; ?>

    <hr>
</p>
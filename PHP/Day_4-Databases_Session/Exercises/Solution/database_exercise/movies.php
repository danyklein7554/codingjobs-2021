<?php

require_once 'database.php';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

// Did I connect successfully ?
if ($conn) {

    // Prepare my query
    $query = 'SELECT * FROM movies';

    // Send the query to the DB
    $results = mysqli_query($conn, $query);

    // Fetch as associative array
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <?php require_once 'nav.html'; ?>

    <h3>Movies List</h3>

    <?php foreach ($movies as $movie) : ?>
        <p>
            <img src="<?= $movie['poster']; ?>" width="100px">
            <br>

            <strong>Title :</strong>
            <?= $movie['title']; ?>
            <br>

            <strong>Date : </strong>
            <?= $movie['date_of_release']; ?>

            <!-- When you create the link
                you must give the parameter id.
                This will send the current movie id to the detail page.
            -->
            <a href="movie.php?id=<?= $movie['id']; ?>">Read more</a>
            <hr>
        </p>
    <?php endforeach; ?>


</body>

</html>
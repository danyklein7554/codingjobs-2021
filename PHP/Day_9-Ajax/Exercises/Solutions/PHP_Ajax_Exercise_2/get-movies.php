<?php

// SAME EXAMPLE : But remove <body> <html> ...

$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Prepare my query
$query = 'SELECT * FROM movies';

// Send the query to the DB
$results = mysqli_query($conn, $query);

// Fetch as associative array
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>

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
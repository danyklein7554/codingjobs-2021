<?php

// Grab my ID from my url
// I'm using GET method to pass data (id) to this page
$id = $_GET['id'];

require_once 'database.php';

$query = 'SELECT * 
FROM movies m
INNER JOIN directors d ON m.director_id = d.id
WHERE m.id = ?';

$prep = $pdo->prepare($query);

// Associate value to placeholders
$prep->bindValue(1, $id);

$prep->execute();

// Fetch as associative array
$movie = $prep->fetchAll(PDO::FETCH_ASSOC);
?>
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
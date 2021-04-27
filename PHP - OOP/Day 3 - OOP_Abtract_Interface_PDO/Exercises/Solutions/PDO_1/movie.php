<?php require_once 'nav.html'; ?>

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
$movie = $prep->fetch(PDO::FETCH_ASSOC);

?>

<p>
    <img src="<?= $movie['poster']; ?>" width="100px">
    <br>

    <strong>Title :</strong>
    <?= $movie['title']; ?>
    <br>

    <strong>Date : </strong>
    <?= $movie['date_of_release']; ?>

    <hr>
</p>
<?php

/*

P.D.O - PHP Data Object

PDO is an abstraction layer to query databases.
PDO take care of more than 12 different type of DB.

We don't use an array or arguments to connect to the DB. Instead we use a DSN (Data Source Name).

The DSN summarise the configuration values to connect.

*/

// Connect to the DB
$dsn = 'mysql:host=localhost;port=3306;dbname=movie_db';

$pdo = new PDO($dsn, 'root', '');

// Prepare & Execute query
$deleteQuery = 'DELETE FROM movies WHERE id=2';
$result = $pdo->exec($deleteQuery);
// exec() only return the number of lines affected by the query
echo '<pre>';
var_dump($result);
echo '</pre>';

// query() will return a rowset (results set)
$result = $pdo->query('SELECT * FROM movies');

echo '<pre>';
var_dump($result);
echo '</pre>';

echo '<hr>';

/* For now, results have been retrieved, but we need to fetch() 

fetch() will get the first element returned by mysql and move cursor to the next.

*/
/*while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . '<br>';
}*/

// fetchAll() retrieve all results at once
$movies = $result->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($movies);
echo '</pre>';

/*
    Prepared Statements
*/

// Imagine we have a form with mail/password
$mail = $_POST['mail'];
$password = $_POST['password'];

// Without prepared :
$query = 'SELECT *
FROM users
WHERE mail = "' . $mail . '" 
AND password = "' . $password . '"';

// Prepared :
$preparedQuery = 'SELECT *
FROM users
WHERE mail=? AND password=?';

$prep = $pdo->prepare($preparedQuery);

// Associate value to placeholders
$prep->bindValue(1, $mail);
$prep->bindValue(2, $password);

// Execute the query (return row set)
$results = $prep->execute();

// Imagine we want to insert many movies :
$prep = $pdo->prepare('INSERT INTO movies(title) 
VALUES(?)');

$title = '';
$prep->bindParam(1, $title);

// Insert a movie
$title = 'Her';
$prep->execute();

// Insert another movie
$title = 'Jurassic park';
$prep->execute();

// Insert another movie.....
$title = 'Movie3';
$prep->execute();

/*
foreach ($moviearray as $key => $movie) {
    $title = $movie['title'];
    $prep->execute();
}*/
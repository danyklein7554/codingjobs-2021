<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require_once 'nav.html'; ?>


    <h3>Welcome to my movie website</h3>

    <?php

    require_once 'database.php';

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    // Did I connect successfully ?
    if ($conn) {

        // Prepare my query
        $query = 'SELECT * FROM movies ORDER BY date_of_release DESC LIMIT 3';

        // Send the query to the DB
        $results = mysqli_query($conn, $query);

        /*
        I retrieved results
        BUT I need to fetch to use them
        */

        // Fetch as associative array
        $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);


        foreach ($movies as $movie) {

            echo '<img src="' . $movie['poster'] . '" width="100px"><br>';


            echo 'Title : ' . $movie['title'] . '<br>';
            echo 'Date : ' . $movie['date_of_release'] . '<br>';

            echo '<hr>';
        }

        // Close the connection to the DB
        mysqli_close($conn);
    } else {
        echo 'Problem connecting to the DB';
    }

    ?>

</body>

</html>
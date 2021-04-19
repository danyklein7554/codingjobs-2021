<?php

// Make sure inputs are not empty
if (empty($_POST['title']))
    echo '<p style="color:red">Title is mandatory</p>';
elseif (empty($_POST['date_of_release']))
    echo '<p style="color:red">Date is mandatory</p>';
elseif (!isset($_POST['directors']))
    echo '<p style="color:red">Choose a director!</p>';
else {
    // If all inputs are ok

    // Cleaning
    $title = htmlspecialchars(trim($_POST['title']));
    $date_of_release = htmlspecialchars(trim($_POST['date_of_release']));
    $poster = htmlspecialchars(trim($_POST['poster']));
    $director_id = htmlspecialchars(trim($_POST['directors']));

    // Connect DB
    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    $query = "INSERT INTO movies(title, date_of_release, poster, director_id)
    VALUES('$title', '$date_of_release', '$poster', $director_id);";

    $result = mysqli_query($conn, $query);

    if ($result)
        echo '<p style="color:green">Inserted successfully!</p>';
    else
        echo '<p style="color:red">Problem with query</p>';
}

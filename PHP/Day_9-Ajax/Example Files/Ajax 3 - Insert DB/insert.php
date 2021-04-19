<?php

// Validations
if (empty($_POST['firstname']) || empty($_POST['lastname'])) {
    echo 'Firstname and Lastname are mandatory !';
} else {
    $conn = mysqli_connect('localhost', 'root', 'root', 'user_db');
    // Cleaning data
    $firstName = htmlspecialchars(trim($_POST['firstname']));
    $lastName = htmlspecialchars(trim($_POST['lastname']));

    $query = "INSERT INTO users(firstname, lastname)
    VALUES('$firstname', '$lastname');";

    $result = mysqli_query($conn, $query);

    if ($result)
        echo 'User added!';
    else
        echo 'Something went wrong.';
}

<?php
// If form was submitted
if (isset($_POST['login'])) {

    // Clean data from the form
    $mail = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Connect
    $conn = mysqli_connect('localhost', 'root', '', 'user_db');

    // Prepare query
    $query = "SELECT * 
    FROM users
    WHERE email = '$mail'";

    // Execute query
    $results = mysqli_query($conn, $query);

    // How many records did I get ?
    $nb_records = mysqli_num_rows($results);

    // Does the user exists in my db ?
    if ($nb_records > 0) {

        $user = mysqli_fetch_assoc($results);

        // Check if passwords matches
        if (password_verify($password, $user['password'])) {
            session_start();
            // Save the mail (from my form) into the session
            $_SESSION['mail'] = $_POST['email'];
            echo '<a href="account.php">Go to account page</a>';
        } else {
            echo 'Password doesnt match';
        }
    } else {
        echo "Wrong credentials.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email"><br>

        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit" name="login" value="Log In">
    </form>
</body>

</html>
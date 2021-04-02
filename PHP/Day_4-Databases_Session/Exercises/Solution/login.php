<?php
// If form was submitted
if (isset($_POST['login'])) {
    session_start();
    // Save the mail (from my form) into the session
    $_SESSION['mail'] = $_POST['email'];
    echo '<a href="account.php">Go to account page</a>';
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
<?php

session_start();

// Do I need to reset ?
if (isset($_POST['reset'])) {
    unset($_SESSION['count']);
}

// First time or not ?
if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
    echo 'Number of times : ' . $_SESSION['count'];
} else {
    $_SESSION['count'] = 1;
    $_SESSION['date'] = date('Y/m/d');

    echo 'First Time';
}


echo 'Date of first connection : ' . $_SESSION['date'];

?>

<form action="" method="POST">
    <input type="submit" name="reset" value="RESET">
</form>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4>Exercise 1</h4>

    <form action="" method="POST">
        <input type="text" name="email" placeholder="Email"><br>

        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit" name="sub1" value="Connect">
    </form>

    <?php
    // Check if form was submitted
    if (isset($_POST['sub1'])) {
        // Check for @ symbol
        if (strpos($_POST['email'], '@'))
            echo '<p style="color:green">Valid email</p>';
        else
            echo '<p style="color:red">Not valid email</p>';
    }
    ?>

    <hr>

    <h4>Exercise 2</h4>

    <form action="" method="POST">
        <input type="number" name="myNumber">
        <input type="submit" name="sub2" value="Multiply">
    </form>

    <?php
    // Check if form was submitted
    if (isset($_POST['sub2'])) {
        $x = $_POST['myNumber'];

        echo 'Multiplication table of : ' . $x;

        echo '<table border=1>';

        for ($i = 0; $i <= 10; $i++) {
            echo '<td>' . $i * $x . '</td>';
        }

        echo '</table>';
    }
    ?>
</body>

</html>
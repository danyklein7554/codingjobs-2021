<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="myInput"><br>

        <input type="submit" name="submitBtn" value="Send">
    </form>

    <?php

    if (isset($_GET['submitBtn'])) {
        // Display original :
        echo $_GET['myInput'] . '<br>';

        /* 
            htmlspecialchars() function
            Convert the HTML tags to entities
            & convert to '&amp;'
            < convert to '&lt;'

        */

        echo htmlspecialchars($_GET['myInput']) . '<br>';

        /*
            Striptags remove all special tags

        */
        echo strip_tags($_GET['myInput']) . '<br>';
    }
    ?>

</body>

</html>
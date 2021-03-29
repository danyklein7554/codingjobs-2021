<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /*
        When the server receives data from a form,
        he save those data into a superglobale variable.

        Those variables are available on any PHP script :
            $_GET
            $_POST
        
        $_GET: it will send directly data to server
        using URL
        Example: page.php?firstName=simon

        $_POST : will send data without editing the URL
        Use post when informations are sensitive.
    
    */

    //var_dump($_GET);

    // Make sure I clicked the button
    if (!empty($_GET)) {
        echo 'Welcome, ' . $_GET['firstName'] . ' ' . $_GET['lastName'];
    }

    ?>

    <form action="" method="GET">
        <input type="text" name="firstName" placeholder="Give your first name">
        <br>

        <input type="text" name="lastName" placeholder="Give your last name">
        <br>

        <input type="submit" value="SEND">
    </form>
</body>

</html>
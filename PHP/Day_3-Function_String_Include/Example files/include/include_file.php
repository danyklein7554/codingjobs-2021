<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            background-color: red;
        }
    </style>
</head>

<body>
    <?php
    // Include a file -> warning if error
    //include 'nav.html';
    include_once 'nav3.html';
    ?>

    <h2>Include a file</h2>

    <?php
    // Include a file -> STOP script if error
    require_once 'footer.html';
    ?>

</body>

</html>
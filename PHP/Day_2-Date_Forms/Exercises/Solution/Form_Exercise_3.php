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
    $users = array("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");

    //Make sure the form was submitted
    if (isset($_POST['submitBtn'])) {
        // Save firstname & lastname, remove white spaces
        $firstName = trim($_POST['firstName']);
        $lastName = trim($_POST['lastName']);
        $fullName = $firstName . ' ' . $lastName;

        // Assuming, by default, the user is not allow
        $match = false;

        // Loop throught the users
        foreach ($users as $value) {
            // Check if the user is a match
            if ($fullName == $value) {
                // We found a match !
                $match = true;
                break;
            }
        }

        if ($match)
            echo 'Welcome, ' . $fullName;
        else
            echo 'You\'re not on the list !';
    }
    ?>


    <form action="" method="POST">
        <input type="text" name="firstName" placeholder="First Name"><br>

        <input type="text" name="lastName" placeholder="Last Name"><br>

        <input type="submit" name="submitBtn" value="Connect">
    </form>
</body>

</html>
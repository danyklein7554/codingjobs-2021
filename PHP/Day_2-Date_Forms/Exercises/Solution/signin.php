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
    // Check if my form was submitted
    if (!empty($_POST)) {

        // Validations
        if (empty($_POST['firstName']) or empty($_POST['lastName']))
            echo 'Firstname and lastname are mandatory';
        elseif (!(strlen($_POST['email']) > 8
            && strlen($_POST['email']) < 50))
            echo 'Your email should be between 8 and 50 characters';
        elseif (!(strpos($_POST['email'], '@')))
            echo 'Your email doesnt contain @ symbol';
        elseif (strlen($_POST['password']) != 8)
            echo 'Your password must be 8 character long';
        elseif ($_POST['password'] != $_POST['cPassword'])
            echo 'Your password are not identical';
        else {
            // If everything is ok
            echo 'Welcome, ' . $_POST['firstName'] . ' !';

            if (isset($_POST['myCheckbox']))
                echo 'You clicked the checkbox !';
            else
                echo 'You didnt clicked the checkbox';
        }



        if(empty($lastName)) {
            // code...
        } elseif(empty($firstName)) {
            //code...
        }


        if(empty($lastName)) {
            // code...
        } 
        
        if(empty($firstName)) {
            //code...
        }
    }
    ?>

    <form action="" method="post">
        <input type="text" name="lastName" placeholder="Last Name"><br>

        <input type="text" name="firstName" placeholder="First Name"><br>

        <input type="text" name="email" placeholder="Email"><br>

        <input type="password" name="password" placeholder="Password"><br>

        <input type="password" name="cPassword" placeholder="Confirm Password"><br>

        <label for="myCheckbox">Subscribe to newsletter</label>
        <input type="checkbox" name="myCheckbox" id="myCheckbox"><br>

        <input type="submit" name="submitBtn" value="Register">
    </form>
</body>

</html>
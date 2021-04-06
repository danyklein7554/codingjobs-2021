<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>

<body>

    <?php

    // Initialize array to handle errors
    $errors = array();

    // Check if form was submitted
    if (isset($_POST['regBtn'])) {
        // Validations on the inputs
        $userName = trim($_POST['username']);
        $email = trim($_POST['email']);
        $sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = trim($_POST['password']);

        if (empty($userName)) {
            $errors['username'] = 'Username is mandatory.<br>';
        }

        if (empty($password)) {
            $errors['password'] = 'Password is mandatory.<br>';
        }

        if (!filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email has to be a valid one.<br>';
        }

        // I need to check if there are some errors
        if (count($errors) == 0) {
            // No errors, I can Insert

            // Connect to DB
            include_once 'database.php';
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

            // First, check if username is already taken
            $query = "SELECT * FROM users WHERE username = '$userName'";

            $resultName = mysqli_query($conn, $query);

            // Then, check if mail is already taken
            $query = "SELECT * FROM users WHERE email = '$sanitizeEmail'";

            $resultMail = mysqli_query($conn, $query);

            if (mysqli_num_rows($resultName) > 0) {
                $errors['username'] = 'Username already taken';
            } elseif (mysqli_num_rows($resultMail) > 0) {
                $errors['email'] = 'Email already taken';
            } else {
                // Hash the password
                $hashPassword = password_hash($password, PASSWORD_DEFAULT);

                // Prepare query
                $query = "INSERT INTO users(username, email, password)
                VALUES('$userName', '$sanitizeEmail', '$hashPassword')";

                // Execute the query
                $result = mysqli_query($conn, $query);

                if ($result)
                    echo 'Insert successfull.';
                else
                    echo 'Something went wrong inserting.';
            }
        }
    }

    ?>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <?php if (isset($errors['username'])) echo $errors['username'] ?>

        <input type="email" name="email" placeholder="Email"><br>
        <?php if (isset($errors['email'])) echo $errors['email'] ?>

        <input type="password" name="password" placeholder="Password"><br>
        <?php if (isset($errors['password'])) echo $errors['password'] ?>

        <input type="submit" name="regBtn" value="Register">
    </form>
</body>

</html>
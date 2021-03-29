<?php

// Make sure I received data from the form
if (!empty($_POST)) {
    echo 'You clicked the form';

    // Save the email and remove the white spaces (before/after)
    $email = trim($_POST['email']);

    // Convert special characters to HTML entities
    // $email = htmlspecialchars($email);

    // Clean/Sanitize the email
    $sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Make sure its a valid email adress
    if (filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL)) {
        echo 'Mail valid! Youhou';
    } else {
        echo 'Email is not valid!';
    }
} else {
    echo 'You should not be there';
}

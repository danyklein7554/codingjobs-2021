<form enctype="multipart/form-data" action="" method="post">

    <input type="hidden" name="MAX_FILE_SIZE" value="30000">

    Select the file :
    <input type="file" name="myFile"><br>

    <input type="submit" name="submitBtn" value="Send the file">
</form>


<?php

/*

    Once the form is submitted, you can find informations about the file in the $_FILES array.

    For example, you can access those informations :

    */

if (isset($_POST['submitBtn'])) {


    $_FILES['myFile']['name']; // name of the file
    $_FILES['myFile']['type']; // type of the file
    $_FILES['myFile']['size']; // size of the file
    $_FILES['myFile']['error']; // Potential error

    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';

    /*
        Downloaded files are placed in a temporary folder on the server.
        
        These files must then be moved to the desired location/folder.

        This is done using move_uploaded_file() function
    */

    $destinationDir = 'uploads/';
    $destinationPath = $destinationDir . $_FILES['myFile']['name'];

    // Is there some errors ?
    if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
        echo 'Error during upload';
        // die() : stop and exit the script
        die();
    }

    // Try to save the file permanently
    if (move_uploaded_file($_FILES['myFile']['tmp_name'], $destinationPath)) {
        echo 'File was uploaded successfully';
    } else {
        echo 'Problem saving the file';
    }
}

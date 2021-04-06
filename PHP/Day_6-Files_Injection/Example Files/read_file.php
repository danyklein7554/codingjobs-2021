<?php

// Read a file (but no format/ no control)
/*$file_content = readfile('books.txt');

echo $file_content;

// Count number of lines in a file (convert file to array)
$fileToArray = file('books.txt');
echo count($fileToArray);
*/

// Check if the file exists before doing anything
if (file_exists('books.txt')) {

    /* 
        Open the file
        'r' : read mode
    */
    // fopen : save the location of the file
    $file_handle = fopen('books.txt', 'r');

    // Loop until you reach the end of the file(eof)
    while (!feof($file_handle)) {
        // Retrive the current line
        $current_line = fgets($file_handle);
        echo $current_line . '<br>';
    }

    // Close the file
    fclose($file_handle);
} else {
    echo 'File doesnt exists !';
}

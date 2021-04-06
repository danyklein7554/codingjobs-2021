<?php


/* 
    Open the file
    'r' : read mode
    'w' : write mode
    'a' : append mode
*/
// fopen : save the location of the file
$file_handle = fopen('movies.txt', 'w');

// write into a file
fwrite($file_handle, "Indiana Jones.\n");
fwrite($file_handle, 'Star Wars.');

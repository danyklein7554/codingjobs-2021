<?php

/*

    Recursive functions : 
    - Used when you need stronger loop
    - Used when dealing with strong algorithm / problems to solve
    - Recursive function is a function that calls itself.
    - Function will stop when all calls(function) are done

    */

// Recursive function that display all number from $x to 50

// for ($i = 10; $i < 50; $i++) {
//     echo $i . '<br>';
// }

function recursive($number)
{

    // Print the number
    echo $number . '<br>';

    // If the number is lower than 50
    if ($number < 50) {
        recursive($number + 1);
    }
}

recursive(48);
    // start at 48
    echo 48 . '<br>';
    recursive(49);
        // 49
        echo 49 . '<br>';
        recursive(50);
            // 50
            echo 50 . '<br>';

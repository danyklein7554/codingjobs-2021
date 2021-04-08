<?php

/*
    Exercise :

    Write a recursive function that display all numbers from $x to 0

    $x can be any value.
    If $x is already 0 or lower, you still have to display the number once.

*/

function recursive2($x)
{
    echo $x . '<br>';

    if ($x > 0) {
        recursive2($x - 1);
    }
}


// Call the function
recursive2(20);

/*

    Bonus (only if you have time) :

    Write a recursive function that return the sum of all number from $number to 50
    


*/
echo '<hr>';

function multiply($a, $b)
{

    if ($b > 0) {
        return $a + multiply($a, $b - 1);
    }
}

echo 'Result : ' . multiply(3, 4);

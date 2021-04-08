<?php
// faefazef
/*

    Exercise 1 :

    We have an array of integers, positive, between 1 and $nbElements
    $nbElements is the number of elements.

    Write a function called 'FizzBuzz'.
    For each number 'n' of the list, we want the following operations :
        * If the number is divisible by 3 : display 'Fizz'
        * If the number is divisible by 5 : display 'Buzz'
        * If the number is divisible by 3 AND 5 : display 'FizzBuzz'
        * Else : display the number 'n'


    $array = [20, 5, 74, 32, 50];

*/

$myArray = [5, 15, 6, 7];
FizzBuzz($myArray);


function FizzBuzz($array)
{
    foreach ($array as $number) {
        if (($number % 3 == 0) && ($number % 5 == 0))
            echo 'FizzBuzz<br>';
        elseif ($number % 3 == 0)
            echo 'Fizz<br>';
        elseif ($number % 5 == 0)
            echo 'Buzz<br>';
        else
            echo $number . '<br>';
    }
}

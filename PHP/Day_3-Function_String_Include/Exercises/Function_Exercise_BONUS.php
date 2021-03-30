<?php 

echo '<hr>';
echo '<p style="font-weight: 900"> FIZZBUZZ EXERCISE </p>';

/*
-- Exercise 3 : 

We have an array of integers, positive, between 1 and $nbElements (nbElements is the number of elements. You can use this variable).

Examples :

	Write a function call 'FizzBuzz'.
	For each number 'n' of the list, we want the following operations:
		. if the number is divisible by 3 : display 'Fizz'
		. if the number is divisible by 5 : display 'Buzz'
		. if the number is divisible by 3 AND by 5 : display 'FizzBuzz'
		. else : display the number 'n'
		*/


	$myArray = [5, 15, 6, 7];
	FizzBuzz($myArray);


	function FizzBuzz($array) {
		foreach ($array as $number) {
			if(($number % 3 == 0) && ($number % 5 == 0))
				echo 'FizzBuzz<br>';
			elseif($number % 3 == 0)
				echo 'Fizz<br>';
			elseif($number % 5 == 0)
				echo 'Buzz<br>';
			else
				echo $number . '<br>';
		}
	}
?>
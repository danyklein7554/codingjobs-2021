<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

?>

<form action="" method="POST">
	<input type="number" name="num1">
	<input type="number" name="num2">
	<input type="submit" name="ex1" value="Send">
</form>

<?php
/*
-- Exercise 1 :
	
	1.1
	Write a PHP script which multiply two numbers
	Example : 2*4 = 8

	1.2
	Write a function which :
	    - Take 2 numbers in parameters
	    - Returns the result of the multiplication of the two numbers
	    
	1.3
	Create a form that:
	- Allows to enter 2 numbers
	- Get the result of the multiplication of these 2 numbers
		(use the function created in 1.2)
	- Warning, it is necessary to manage the case where the user does not enter the two numbers.
*/

function multiply($num1, $num2)
{
	return $num1 * $num2;
}

if (isset($_POST['ex1'])) {
	echo multiply($_POST['num1'], $_POST['num2']);
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
- Exercise 2

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    The first number is larger (if the first number is larger than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses.
	    - Calculates the sum of John's expenses over the year

	3.2
	Write a function that will:
	- Take an expense array as argument
	- Calculate the sum of the expenses of the table
	- return this sum

*/

$myArray = array("Salad" => "1.03", "Tomato" => "2.3", "Oignon" => "1.85", "Red cabbage" => "0.85");

echo calcul_expenses($myArray);



function calcul_expenses($array)
{
	$total = 0;
	foreach ($array as $value) {
		$total += $value;
	}

	return $total;
}



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/

$myWord = "kayak";
echo palindrome($myWord);

function palindrome($word)
{
	$length = strlen($word);

	for ($i = 0; $i < $length / 2; $i++) {
		// Check if letters (on both side) matches
		if ($word[$i] != $word[$length - 1 - $i]) {
			return 'Its NOT a palindrome';
		}
	}

	return 'Its a palindrome';
}


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

function prime($number)
{

	for ($i = 2; $i < $number; $i++) {
		if ($number % $i == 0)
			return 'Its NOT a prime number';
	}

	return 'Its a prime number';
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*

-- Exercice 6
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';

/*
-- Exercice 8 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/


function reverse($myArray)
{
	$length = count($myArray);

	for ($i = 0; $i < count($myArray) / 2; $i++) {
		$temp = $myArray[$i];
		$myArray[$i] = $myArray[$length - 1 - $i];
		$myArray[$length - 1 - $i] = $temp;
	}

	return $myArray;
}


$randomArray = [1, 2, 3, 4, 5, 6, 7];
// Expected resul : [7, 6, 5, 4, 3, 2, 1]
$reversedArray = reverse($randomArray);
var_dump($reversedArray);


// Switch the two values ! (use what you want)

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9</p>';

/*	
-- Exercise 9
Ecrire une fonction countWords($text) qui :
    - prend une chaine de caractère en argument ($text)
    - calcule le nombre de mots dans la chaine de caractère $text
    - retourne le résultat
Indice : il faut utiliser une fonction qui permet de découper une phrase en mots (déjà vu en cours)

Write a function 'countWords($text)' that:
    - takes a string of characters in argument ($text)
    - calculate the number of words in the $text string
    - return the result
Hint: use a function that allows you to split a sentence into words (already seen in class)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

/*
-- Exercice 10 :
Repeat the previous exercise and write a countEachWords($test) function that:
    - takes a string of characters in argument ($text)
    - for each word present in $text, calculate how many times this word appears
    - return the result as an associative array

For example : "this is a random sentence, it is totally random".
Expected result :
    array( "this" -> 1, 
            "is" -> 2,
            "a" -> 1,
            "random" -> 2
            ....... );
*/
?>
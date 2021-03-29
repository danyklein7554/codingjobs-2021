<?php

/*
	- Exercise 1 :
		
		Based on the character exercise, 
		display all his caracteristics using a loop.

	*/

echo '<h3>Exercise 1</h3>';

$charName = 'Banana Guy';
$charImg = '<img src="banana.png" width="100px">';
$characteristics = [
	'atk' => 10,
	'def' => 5,
	'health' => 10
];

echo '<h4>' . $charName . '</h4>';
echo $charImg;

foreach ($characteristics as $charKey => $charValue) {
	echo $charKey . ' : ' . $charValue . '<br>';
}

/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

*/

echo '<hr>';
echo '<h3>Exercise 2</h3>';

$array = array("Salad" => "1.03", "Tomato" => "2.3", "Oignon" => "1.85", "Red cabbage" => "0.85");

//1. Sort by value
asort($array);

//2. key descending
krsort($array);

$total = 0;
foreach ($array as $value) {
	$total += $value;
}

echo 'Total : ' . $total;



/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 
		to 20.
		The element 0 will therefore contain 0, 
		the element 1 will contain 1 etc.

		Do it by using a for AND a while loop
*/

echo '<hr>';
echo '<h3>Exercise 3</h3>';

$myArray = array();
for ($i = 0; $i < 21; $i++) {
	$myArray[$i] = $i;
}

echo '<pre>';
var_dump($myArray);
echo '</pre>';

$myArray = array();
$i = 0;
while ($i < 21) {
	$myArray[$i] = $i;
	$i++;
}


/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

echo '<hr>';
echo '<h3>Exercise 4</h3>';

$myArray = array();
for ($i = 1; $i < 21; $i++) {
	$myArray[$i] = $i * 2;
}

echo '<pre>';
var_dump($myArray);
echo '</pre>';

/*
	-Exercise 5 :
		Create an array of random numbers
		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
	
		2. Find the position of the max/min also.
		You can only use 2 variables (your $array and $i doesn't count).
*/


echo '<hr>';
echo '<h3>Exercise 5</h3>';

$numbers = [20, -50, 3, 168, 255, 10];

$posMin = 0;
$posMax = 0;

for ($i = 0; $i < count($numbers); $i++) {
	// Check for the maximum
	if ($numbers[$i] > $numbers[$posMax]) {
		$posMax = $i;
	}

	// Check for the minimum
	if ($numbers[$i] < $numbers[$posMin]) {
		$posMin = $i;
	}
}

echo 'Maximum is at position : ' . $posMax . ', value : ' . $numbers[$posMax] . '<br>';

echo 'Minimum is at position : ' . $posMin . ', value : ' . $numbers[$posMin] . '<br>';

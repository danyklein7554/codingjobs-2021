<?php

/* - Exercise 1 :

-- Create your first fruit array containing: "Apple, Strawberry, Pineapple, Lemon".
-- Display the value of the 2nd element.

*/

$fruits = array(
    'Apple',
    'Strawberry',
    'Pineapple',
    'Lemon'
);

echo $fruits[1] . '<br>';


/*
- Exercise 2
-- Create an associative array that contains the number in stock for each item: 20 T-Shirts, 10 Caps and 5 Shoes.
-- Display the stock of caps.
*/

$stock = [
    'TShirt' => 20,
    'Caps' => 10,
    'Shoes' => 5
];

echo $stock['Caps'] . '<br>';

$stock['Caps'] = $stock['Caps'] + 5;
//$stock['Caps'] += 5;
/*
- Exercise 3

The clothing store has just received a new stock of shoes and caps.
-- Add 5 caps.
-- Add 20 shoes.
-- Display the shoe stock.
*/

/*
- Exercise 4
You have a list of contacts.
Each contact has a name, an email and a phone number.
Here is the list of these contacts:
> Name: Ricardo, Tel: 0677777777, Email: ricardo@gmail.com
> Name: Michael, Tel: 0606060606, Email: mj@gmail.com
> Name: Emmanuel, Tel: 0610101010, Email: manu@gmail.com

-- The goal of the exercise is to create an array that will contain all the information for ALL my contacts. I need to be able to access a contact's information easily and quickly.
*/

$contacts = array();

$contacts['Ricardo'] = [
    'phone' => '0364578559',
    'email' => 'ricardo@gmail.com'
];

$contacts['Michael'] = [
    'phone' => '+33254785652',
    'email' => 'mj@gmail.com'
];

$contacts['Emmanuel'] = [
    'phone' => '+789797464',
    'email' => 'manu@gmail.com'
];

echo $contacts['Ricardo']['phone'];


/*

- Exercise 5
You need to create a web page with basics HTML tags.
In this page, you'll display all the characteristics of an imaginary character,
    from a role-play game.

    The character information will be saved in variables.
There is four (4) informations :
-- An avatar image
-- The last name
-- The first name
-- An array of characteristics (like attak point, defense point... put everything you want)
Use an associative array.

*/

$charName = 'Banana Guy';
$charImg = '<img src="banana.png" width="100px">';
$characteristics = [
    'atk' => 10,
    'def' => 5,
    'health' => 10
];

echo '<h2>' . $charName . '</h2>';
echo $charImg;
echo 'Atk points : ' . $characteristics['atk'];
echo 'Def points : ' . $characteristics['def'];

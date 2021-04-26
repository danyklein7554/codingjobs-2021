<?php

/*

Static

A static property/method is not related to a specific object but to the class itself.

Example : 

*/

class Sheep
{
    private $name;
    private $hairColor;
    private $count;
    public static $countCloned;

    public function __construct()
    {
        $this->count += 1;
        self::$countCloned++;
    }
}

// Create objects :
$sheep1 = new Sheep();

echo '<pre>';
var_dump($sheep1);
echo '</pre>';

echo Sheep::$countCloned . '<br>';

$sheep2 = new Sheep();

echo '<pre>';
var_dump($sheep2);
echo '</pre>';

echo Sheep::$countCloned . '<br>';

/* 
    'self' keyword refers to the class itself.
    As opposed to 'self', 'this' keyword refers to the instance of the class (the object).
 
    It allows to access static properties of a class.

    Use 'self' when you are INSIDE the class.
    Use class name when you are OUTSIDE the classe
*/
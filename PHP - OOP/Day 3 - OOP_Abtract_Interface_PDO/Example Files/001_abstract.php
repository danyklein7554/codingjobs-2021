<?php

/*
    Abstraction !

    An abstract class cannot be instantiate.
    This class is meant to be extended by a 'concrete'/'real' class.

    The structure of the class is the same as a regular one, just add the keyword 'abstract'

*/

abstract class Shape
{
}

// Because its abstract, this will give you an error : 
$shape = new Shape();

/*
    Circle will extends Shape class
    (share property/methods common for all shapes)
*/
class Circle extends Shape
{
}


/*
    We can define some abstract methods.
    It's now mandatory to implements those methods in the children.
*/
abstract class Shape
{
    // Function's signature
    abstract public function calculateSurface();

    public function regularMethod()
    {
        echo 'youhou';
    }
}

class Circle extends Shape
{
    // I HAVE TO IMPLEMENT THIS METHOD : MANDATORY
    public function calculateSurface()
    {
        return ($x * $y);
    }
}

/*

1. An abstract class can contain methods with a body (not abstract)

2. A class can be abstract without containing any abstract methods.

3. If a class has one or more abstract methods, it must be 'tag' as an abstract class


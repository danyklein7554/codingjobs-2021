<?php

/* 

INHERITANCE

Representing a relationship between classes.
It takes the form of a parent/child relationship.

Children can use methods or properties defined in the parent.
The parent cannot access the children properties or method.

Many childrencan inherit from the same parent.
A class can't inherit from many classes (only one).

The main purpose of inheritance is reusability.

*/

class Vehicles
{
    // Properties (only children can access)
    protected $nbWheel;
    protected $brand;
    // private : children can't access it
    private $model;

    public function __construct($brand, $modelName)
    {
        $this->brand = $brand;
        $this->model = $modelName;
        $this->nbWheel = 4;
    }

    public function makeSound()
    {
        echo 'Vroooooom Vrooooooom<br>';
    }
}

class Car extends Vehicles
{
    public function makeSound()
    {
        echo 'different sound<br>';
    }

    public function speed()
    {
        echo 'speeding up!';
    }
}

class Truck extends Vehicles
{
    // property
    private $maxWeight;

    public function __construct($brand, $modelName)
    {
        parent::__construct($brand, $modelName);
        $this->nbWheel = 8;
    }
}


$vehicle = new Vehicles('bmw', 'm3');

echo '<pre>';
var_dump($vehicle);
echo '</pre>';

$vehicle->makeSound();

$car = new Car('bmw', 'm1');

echo '<pre>';
var_dump($car);
echo '</pre>';

$car->makeSound();

$truck = new Truck('TruckMaster', 'TMax21');
echo '<pre>';
var_dump($truck);
echo '</pre>';

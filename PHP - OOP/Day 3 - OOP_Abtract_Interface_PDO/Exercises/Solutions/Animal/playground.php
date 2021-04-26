<?php

require_once 'IWorker.php';
require_once 'Creature.php';
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Human.php';
require_once 'Robot.php';

// Some animals :
$garfield = new Cat('Ginger', 'Male', 'Garfield', 4);
$snoopy = new Dog('Black&White', 'Male', 'Snoopy', 4);
$rantanplan = new Dog('Brown', 'Male', 'Rantanplan', 4);

// Humans :
$simon = new Human('Simon', 'Brown', 'Male');
$david = new Human('David', 'Brown', 'Male');
$yousra = new Human('Yousra', 'Brown', 'Female');

// Robot
$r1 = new Robot('r1', 'Silver');
$r2 = new Robot('r2', 'Gold');

// Creature array
$creatures = array($garfield, $snoopy, $rantanplan, $simon, $yousra);

// Worker array
$workers = array($david, $simon, $yousra, $r1, $r2);


for ($i = 0; $i < 10; $i++) {
    $key = array_rand($creatures);
    $creatures[$key]->makeSound();
}

echo '<hr>';

for ($i = 0; $i < 10; $i++) {
    $key = array_rand($workers);
    $workers[$key]->work();
}

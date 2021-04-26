<?php

// If classes are not inside same folder, use custom function :
function projectAutoload($class)
{
    require_once 'classes/' . $class . '.php';
}

// Automatically load classes into your script
// ONLY WORKS IF CLASS NAME = FILE NAME
spl_autoload_register('projectAutoload');

$garfield = new Cat();
$ratanplan = new Dog();

var_dump($garfield);

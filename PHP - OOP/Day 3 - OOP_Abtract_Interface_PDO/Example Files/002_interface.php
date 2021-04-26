<?php

/*

INTERFACE 

An interface looks like a class but has only abstract methods and static properties.

PHP uses interfaces to implement multiple inheritances.

Interfaces are used to implements/share roles.

An interface allow to specify that one part of your code must be implemented by a class 

*/

interface IExample
{
    // abstract methods
}

// To implements an interface :
class Example implements IExample
{
}

/*
Take the example of our classes Animal/Dog/Cat/Birds/Lezard...

Some of them can sit().
PS: Even a human can sit.

*/

interface IDomestic
{
    // By default, functions are abstract, you dont need to specify it
    public function sit();
}


// First extends, then implements
class Dog extends Animal implements IDomestic
{
    // I HAVE TO IMPLEMENT THE SIT METHOD
    public function sit()
    {
        echo 'Dog sit.';
    }
}

class Cat extends Animal implements IDomestic, IExample
{
    public function sit()
    {
        echo 'Dog sit.';
    }
}


/*

Abstract Class :
    1. When a model/template/rule must be set for a group of subclasses (children), use an abstract class.
    2. An abstract class can contain real methods
    3. Abstract classes provide default actions for subclasses
    4. Used to provide a template for potential future inherited classes.

Interface :
1. Use an interface when a role must be defined for other classes as well, regardless the inheritance.
2. You can't instantiate an interface and create an object.
3. Interface cannot containt concrete methods.
4. A class can implement many interfaces.
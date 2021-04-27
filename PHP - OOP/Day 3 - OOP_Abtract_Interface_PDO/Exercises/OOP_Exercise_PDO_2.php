<?php
/*

Overview : 
	Create a page to view some flowers.
	We will have, in database, the tables Flowers

	In the Flowers table, we will record: The name of the flowers and their prices

	In this exercise, you have to use PDO.


Steps : Display flowers

	- We will not take into account the creation of the flowers, they will be created manually in the database.	
	
	- Create the page view-flowers.php

	- Create classes FlowerManager.
	Method FlowerManager::findAll() will retrieve all the flowers and return the result

	Display all the flowers on the page.

Step 2 : 

	- Create the class Flower.
	This class will represent a flower (name, price).

	- Create getter and setter

	- Edit FlowerManager::findAll() method.
	This method should now return a set(array) of Flower objects.

 ?>



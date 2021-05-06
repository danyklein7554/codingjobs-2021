<?php 

/*
	
	Get back to our online flowers website.

	You should improve your project using Eloquent model

	- Step 1 :
		
		Run the command : 'php artisan make:model Flower'

		A flower Model has been created. You can find it in 'app/Models/Flower.php'.
		
	- Step 2 :

		Let's edit our flower controller !
		The controller should ask the eloquent model for datas that he needs.

		1. Edit the index() method.
		Remove the SELECT query and replace it by this : $flowers = App\Flower::all();

		Program should still works at this point.

	- Step 3 : 
		You'll find all informations here : https://laravel.com/docs/8.x/eloquent
		
		Change every method of your controller that uses Raw SQL Queries.
		Now you should use Eloquent model to :
			- Get all the flowers
			- Get a specific flower
			- Create a new flower
			- Edit an existing flower
			- Delete a flower	

*/

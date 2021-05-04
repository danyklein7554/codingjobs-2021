<?php 

/*

	We have an online flower website.

	- Step 1 : 

		Create a new database with the table flowers.
		This table should contain : id (int), name (varchar), price (double)
	
	- Step 2 :
		
		Create a new Laravel project or use an old one.
		You have to create a navigation menu that will be display on every pages.

	- Step 3 :

		In Laravel, you have to create the route to show all the flowers.
		Route should looks like this : '/flowers'.

		/!\ You have to use a controller with the --resource flag.
		/!\ You can use the FlowerController in example files. 

		Don't forget to put the navigation menu on this page!

	- Step 4 :

		Insert a new flower.
		First, create a route using get method '/create/flower' that display a form with all the mandatory fields.
		
		The form have to use post method.
		
		Create a second route using post method '/create/flower'.
		This route should be call when submitting the form.

	- Step 5 :
		
		Edit the route that shows all the flowers.
		Now, for each flower, there is a link to 'edit' the flower.

		You have to create a route to edit a flower, it should looks like this '/flower/update/4'.
		
		On this page you have a form with all the fields (the fields should be filled with data from the flower).

		When form submitted it will use post method.


	- Step 6 :
	
		Edit the route that shows all the flowers.
		Now, for each flower, there is a link to 'delete' the flower.
		You delete the flower receiving an id. The route should look like this '/delete/3'

 ?>


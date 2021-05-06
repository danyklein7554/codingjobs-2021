<?php 

/*
	
	Get back to our online flowers website.
	For this exercise, you should have created migrations/tables for Flowers and Comments !
	
	Reminder : here is the structure of the DB : 

		flowers :
			id
			name
			price
			poster
		
		comments :
			id
			subject 
			message
			flower_id

	- Step 1 :

		On the flower detail page, display all the comments related to that specific flower.
		For this you have to use relationship : https://laravel.com/docs/8.x/eloquent-relationships

	- Step 2 :
		On the flower detail page, create a form below the details.
		This form will allow us to add a new comment related to that specific flower.

		You have to use relationship to bind the comment on the specific post, and save it.
		
		

*/

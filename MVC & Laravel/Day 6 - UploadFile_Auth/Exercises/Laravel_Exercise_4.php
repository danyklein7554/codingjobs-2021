<?php


/*

    Based on the flower exercise.
	
	Each user have a specific role.
	A role can be two different things : admin or regular user (1 or 0).

	Step 1 : 

	    Create a route '/users', a UserController and a view 'users-list.blade.php'
	    This route will display all the users.

	    It should display first_name, last_name, mail and if it's an admin (or not).

	Step 2 :

		For each regular user on this list, create a button 'admin'

	Step 3 :

		When you click on this button it should turn the role of the current user into admin.

	Step 4 :

		Create a route '/users/{id}/account'
		This route will display the account/summary page of the current user.

	Step 5 :

		Edit the 'users-list' view.
		For each user, display a link 'account' that redirects to the matching account page.


	Step 6 :

		Only the admins have access to thoses routes '/users' and '/users/{id}/account'
		
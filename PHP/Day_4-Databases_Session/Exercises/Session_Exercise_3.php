<?php
/*
	Let's assume you have an online shopping website.

	Step 1 :
		Import the 'users.sql' file into PHPMYADMIN.
		You have to choose a DB (create a new one or use movie_db).

    Step 2: 
	    Create a page 'login.php'.
	    Inside this page, create a form to signin into your beautiful website.

	    It will ask for : email, password.

    Step 3: 
		Once the user logged in, you have to open a session.
		In this session you'll have to save the email adress.

	Step 4:
		Create a page 'account.php'.

		If a user is trying to access that page :
			- Check if the user logged in before 
			- If he's not log-in you need to redirect to the login page.
			- If he logged-in, display 'Hello, username'

    Step 4 (bonus): 
		
		Add a 'logout' button.
		When the user click, the user should be redirected to the login page and should now be log out.


 */
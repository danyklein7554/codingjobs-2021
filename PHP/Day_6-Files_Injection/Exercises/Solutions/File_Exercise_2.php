<?php

/*
		1. Read the file : 'users.txt'

		2. Retrieve, in PHP, all the users as an array.
		For Each element of the array (meaning each users), you should save username and email.

		3. Display the array with a var_dump()
	 
		expected output :

		[
			'username' => 'toto', 
			'mail' => 'toto@gmail.com'
		]
		
		*/

if (file_exists('users.txt')) {
	// Initialize users array
	$users = array();

	// Open the file
	$file_handle = fopen('users.txt', 'r');

	// Loop through each line
	while (!feof($file_handle)) {
		// Get the current line (string)
		$currentLine = fgets($file_handle);

		// Explode the array to grab username (position 0) and email(position 1)
		$currentUser = explode(';', $currentLine);

		echo '<pre>';
		var_dump($currentUser);
		echo '</pre>';
	}
	echo '<pre>';
	var_dump($users);
	echo '</pre>';
}

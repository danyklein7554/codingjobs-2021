<?php

/*
    Exercise :

    This exercise is based on the 'Session_Exercise_3'.

    - Step 1 :
        If you didn't, import the user.sql file in your database.
        (You can create a new database or use the movie_db)

    - Step 2 :
        We want to change the login process a bit.
        Now, when the user loggued in, before saving email into the session, you have to check if the user exists in the DB.

        If the user doesnt exists, display a warning message.
        If the user exists, you can save the mail into the session (as before).


        Detailed steps :

        ** Step 2.1 : Connect to the DB
        ** Step 2.2 : Query the DB to search for a specific user (WHERE email =....)
        ** Step 2.3 : If you get a result, it means the user exists in the DB

        You can use mysqli_num_rows function to know how many records you got.





*/
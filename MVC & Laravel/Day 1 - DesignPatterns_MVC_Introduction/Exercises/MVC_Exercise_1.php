<?php

/*

******* Exercise : Flower Website ********

In the Flowers table, we will record: The id, the name of the flower, the price.

In this exercise, you have to :
    - Create a home page that displays a welcome message and links to the different pages.
    - Create an error page. This page will be a nice template for all errors you might display.
    For example : if someone try to access the page 'books', you have to display an error message saying that the page doesnt exists (and maybe with a link redirecting to the home page).
    - Create a page where you display the list of flowers (display Name and price). With a link 'read more'.
    This link will bring you to the detail page of the flower.
    - Create a page where you display the detail of a specific flower.
    - Create a view with a form. This form will be use to insert a new flower inside the DB.


You must use MVC and OOP !!

You have to create a FlowerController that ask the FlowerModel to return the flowers !
You probably have to create the Flower class also.
Everything will be display in the Views.

Tips : 
To access the different pages, it should looks like this :
    homepage : localhost/flower_exercise/
    flowers page : localhost/flower_exercise/?page=flowers
    flower detail page : localhost/flower_exercise/?page=flowers&id=1
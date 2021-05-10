<?php


/*

    Based on the flower exercise.
    
    Step 1 :
        Change your FlowerController methods.
        They should take care of the new field : type.

        You have to edit FlowerController and views.
    
    Step 2 :
        Create :
            - a route '/flower/{id}'
            - edit the 'show' method of your controller
            - create a view 'flower-details.blade.php'

        This should display the details of a specific flower.

    Step 3 :

        Edit your Flower model.
        - Create a accessor for the price attribute. When you retrieve the price, it should display it with € sign.
            Example : 3€

        - Create a accessor for the date attribute.
        It should display the date in this format : 13 Mai 2021
    
    Step 4 :

        Now, the page 'flower-details' should also display comments !

        To do this, you have to :
            1. Create the Comment model
            2. Edit your Flower and Comment models and implements relationship !
            3. Now, when you get flowers->all(), it also should grab the associated comments.

        Check the documentation here : https://laravel.com/docs/8.x/eloquent-relationships#one-to-many




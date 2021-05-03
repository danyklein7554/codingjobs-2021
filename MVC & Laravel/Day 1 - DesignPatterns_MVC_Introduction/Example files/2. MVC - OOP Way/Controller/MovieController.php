<?php

function handleMovies()
{
    //1. Ask the model the movies list
    require_once 'Model/MovieModel.php';
    $movies = getMovies();

    //2. Check/Do the validations
    if (count($movies) == 0) {
        echo 'No movies found.';
    } else {
        //3. Pass movies list to the view
        require_once 'View/MovieView.php';
    }
}

function handleMovie($id)
{
    //1. Ask the model
    require_once 'Model/MovieModel.php';
    $movie = getMovie($id);

    //2 Check / Do the validations
    if (!$movie) {
        echo 'No movie found with this id.';
    } else {
        require_once 'View/MovieDetailView.php';
    }
}

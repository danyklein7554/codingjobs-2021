<?php

// MovieController is part of App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /* 
    
    CRUD Operations 
    Create Read Update Delete
    */

    public function all()
    {
        return 'Get all movies from my controller';
    }
}

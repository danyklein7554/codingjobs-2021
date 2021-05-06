<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*

    O.R.M Eloquent

    The Eloquent Model will automatically link your model to the DB.

    To do this, Eloquent assume your table have the same name as your model but using 'snake case'.
    'Snake case' : plural name + lower case of the class.

    Example : Flower model ->>> flowers table

*/



class Flower extends Model
{
    use HasFactory;

    //If you want to use another table name, add this property : 
    //protected $table = 'my_table';

    /*
        By default, Eloquent assume that the primary key is an auto-incrementing integer called 'id'.

        If your primary key is different, add this property : 
    */
    //protected $primaryKey = 'flowerId';

    /*
        If you don't use timestamp 'option' (created_at/updated_at), add this property :
    */
    //public $timestamps = false;
}

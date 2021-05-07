<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
    Create a route every time you need :
        - to access a page/view
        - to perform an action (saving in DB; looking for flowers)

*/

Route::get('/flowers', [FlowerController::class, 'index']);

// Add a flower :
Route::get('/create/flowers', [FlowerController::class, 'create']);
Route::post('/create/flowers', [FlowerController::class, 'store']);

// Update a flower :
Route::get('/update/flowers/{id}', [FlowerController::class, 'edit']);
Route::put('/update/flowers/{id}', [FlowerController::class, 'update']);

// Delete
Route::delete('/delete/flowers/{id}',  [FlowerController::class, 'destroy']);



/**** API ****/
Route::get('/api/magic', [ApiController::class, 'getApi']);

// All flowers :
Route::get('/api/flowers', [ApiController::class, 'getFlowers']);

// One specific flower : 
Route::get('/api/flower/{id}', [ApiController::class, 'getFlower']);



// All flowers from a type : 
// CANT DO THIS :
//Route::get('/api/flower/{type}', [ApiController::class, 'getType']);
// Have to do this :
Route::get('/api/flower/type/{type}', [ApiController::class, 'getType']);

// Specific amount of results :
Route::get('/api/flower/limit/{num}', [ApiController::class, 'getLimit']);


/**** MOVIES *****/
Route::get('/movies', [MovieController::class, 'index']);

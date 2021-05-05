<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;

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
Route::post('/update/flowers/{id}', [FlowerController::class, 'update']);

// Delete
Route::get('/delete/flowers/{id}',  [FlowerController::class, 'destroy']);

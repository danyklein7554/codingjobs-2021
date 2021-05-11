<?php

use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;

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


/*** Upload a file ***/
Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');

Route::post('file-upload', [FileUploadController::class, 'fileUploadSubmit'])->name('file.upload.submit');


Route::get('/', function () {
    return view('welcome');
});

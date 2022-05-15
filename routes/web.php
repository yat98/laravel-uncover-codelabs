<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('first', [CollectionController::class , 'firstCollection']);
Route::get('second', [CollectionController::class , 'secondCollection']);
Route::get('third', [CollectionController::class , 'thirdCollection']);
Route::get('fourth', [CollectionController::class , 'fourthCollection']);
Route::get('fifth', [CollectionController::class , 'fifthCollection']);
Route::get('sixth', [CollectionController::class , 'sixthCollection']);
Route::get('exercise', [CollectionController::class , 'exercise']);
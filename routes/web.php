<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class,'index']);
Route::get('insert-sql', [StudentController::class,'insertSql']);
Route::get('insert-timestamp', [StudentController::class,'insertTimestamp']);
Route::get('insert-prepared', [StudentController::class,'insertPrepared']);
Route::get('insert-named-binding', [StudentController::class,'insertNamedBinding']);
Route::get('update', [StudentController::class,'update']);

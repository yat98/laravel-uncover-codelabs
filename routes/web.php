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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('student/register', [StudentController::class,'register'])->middleware('test');
Route::get('student/register', [StudentController::class,'register']);
Route::get('student/all', [StudentController::class,'all']);
// Route::get('student/blog', [StudentController::class,'blog'])->middleware('test');
Route::get('student/blog', [StudentController::class,'blog']);

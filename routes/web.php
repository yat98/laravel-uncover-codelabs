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

Route::get('login', [StudentController::class, 'login']);
Route::post('login', [StudentController::class, 'getLogin']);

Route::get('logout', [StudentController::class, 'logout']);
Route::redirect('/', [StudentController::class, 'login']);

Route::middleware('login')->group(function () {
    Route::get('register', [StudentController::class, 'register']);
    Route::get('student', [StudentController::class, 'index']);
    Route::get('student-blog', [StudentController::class, 'blog']);
});
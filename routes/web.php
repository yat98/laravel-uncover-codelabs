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

Route::get('register-form/en', [StudentController::class, 'registerFormEn']);
Route::get('register-form/id', [StudentController::class, 'registerFormId']);
Route::post('process-form', [StudentController::class, 'processForm']);
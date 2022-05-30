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

Route::get('insert', [StudentController::class, 'insert']);
Route::get('insert-many', [StudentController::class, 'insertMany']);
Route::get('update', [StudentController::class, 'update']);
Route::get('update-where', [StudentController::class, 'updateWhere']);
Route::get('update-or-insert', [StudentController::class, 'updateOrInsert']);
Route::get('delete', [StudentController::class, 'delete']);
Route::get('get', [StudentController::class, 'get']);
Route::get('get-show', [StudentController::class, 'getShow']);
Route::get('get-view', [StudentController::class, 'getView']);
Route::get('get-where', [StudentController::class, 'getWhere']);
Route::get('get-select', [StudentController::class, 'getSelect']);
Route::get('get-take', [StudentController::class, 'getTake']);
Route::get('get-first', [StudentController::class, 'getFirst']);
Route::get('get-find', [StudentController::class, 'getFind']);
Route::get('get-select-raw', [StudentController::class, 'getSelectRaw']);

Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::get('student/{nim}', [StudentController::class, 'show'])->name('student.show');

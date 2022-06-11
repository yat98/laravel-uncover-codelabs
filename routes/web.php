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

Route::get('check-object', [StudentController::class, 'checkObject']);
Route::get('insert', [StudentController::class, 'insert']);
Route::get('mass-assignment', [StudentController::class, 'massAssignment']);
Route::get('mass-assignment-two', [StudentController::class, 'massAssignmentTwo']);
Route::get('update', [StudentController::class, 'update']);
Route::get('update-where', [StudentController::class, 'updateWhere']);
Route::get('mass-update', [StudentController::class, 'massUpdate']);
Route::get('delete', [StudentController::class, 'delete']);
Route::get('mass-delete', [StudentController::class, 'massDelete']);
Route::get('all', [StudentController::class, 'all']);
Route::get('all-view', [StudentController::class, 'allView']);
Route::get('get-where', [StudentController::class, 'getWhere']);
Route::get('first', [StudentController::class, 'first']);
Route::get('find', [StudentController::class, 'find']);
Route::get('latest', [StudentController::class, 'latest']);
Route::get('skip-take', [StudentController::class, 'skipTake']);
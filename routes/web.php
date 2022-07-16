<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
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

Route::get('/', [MajorController::class,'index'])->middleware('auth');
Route::resource('majors', MajorController::class)->middleware('auth');
Route::get('majors/{major}', [MajorController::class,'show'])
    ->middleware(['auth','can:view,major'])
    ->name('majors.show');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/all', [StudentController::class, 'all'])->name('student.all');
Route::get('/student/blog', [StudentController::class, 'blog'])->name('student.blog');

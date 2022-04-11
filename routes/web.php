<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('student', function () {
    $students = ['Risa Lestari', 'Rudi Hermawan', 'Bambang Kusumo', 'Lisa Permata'];
    return view('student', compact('students'));
})->name('student');

Route::get('lecture', function () {
    $lectures = ['Maya Fitrianti, M.M.', 'Prof. Silvia Nst, M.Farm.', 'Dr. Umar Agustinus', 'Dr. Syahrial, M.Kom.'];
    return view('lecture', compact('lectures'));
})->name('lecture');

Route::view('gallery','gallery')->name('image');
Route::view('admin','admin')->name('admin');

Route::get('information/{faculty}/{department}', function ($faculty, $department) {
    $data = [$faculty, $department];
    return view('information', compact('data'));
})->name('information');
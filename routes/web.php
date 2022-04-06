<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
    $students = [
        'Risa Lestari',
        'Rudi Hermawan',
        'Bambang Kusumo',
        'Lisa Permata',
    ];
    // return view('university.student', ['students' => $students]);
    // return view('university.student')->with('students', $students);
    // return view('university.student')->withStudents($students);
    // return view('university.student', compact('students'));
    return view('university.student')->with(compact('students'));
});

Route::get('student/{name}/{age}/{city}', function ($name, $age, $city) {
    return view('university.detail-student', compact('name', 'age', 'city'));
});

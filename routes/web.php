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

Route::get('hello', function () {
    return 'Hello World';
});

Route::get('study', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Learning Laravel</p>';
});

Route::get('student/stem/john', function () {
    echo '<h2 style="text-align:center"><u>Welcome John</u></h2>';
});


Route::get('student/{name}', function ($name) {
    return "Show student data {$name}";
});

Route::get('stock/{type}/{merk}', function ($t, $m) {
    return "Check remaining stock {$m} {$t}";
});
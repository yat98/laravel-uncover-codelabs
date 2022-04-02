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

Route::get('stock/{type?}/{merk?}', function ($t = 'samsung', $m = 'smartphone') {
    return "Check remaining stock {$m} {$t}";
});

Route::get('user/{id}', function ($id) {
    return "Show user data {$id}";
})->where('id','[A-Z]{2}[0-9]+');

Route::get('contact-us',function () {
    return '<h1>Contact Us</h1>';
});

Route::redirect('contact','contact-us');

Route::prefix('admin')->group(function ($route) {
    $route->get('student', function () {
        echo '<h1>Student List</h1>';
    });
    $route->get('teacher', function () {
        echo '<h1>Teacher List</h1>';
    });
    $route->get('employee', function () {
        echo '<h1>Employee List</h1>';
    });
});

Route::fallback(function () {
    return 'Sorry, page not found';
});
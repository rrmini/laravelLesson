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

Route::get('/hello/{name}', function (string $name) {
    return "<h3> Hello, {$name}</h3>";
});

Route::get('/news/', function () {
    return "<h3> Latest news !!!</h3>";
});

Route::get('/phpinfo', function () {
    return phpinfo();
});


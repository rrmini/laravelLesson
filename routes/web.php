<?php

use Illuminate\Support\Facades\Route;

//controllers
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

use App\Http\Controllers\CategoryController as CategoryController;
use App\Http\Controllers\NewsController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('home');
})->name('root');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});


Route::group(['prefix' => 'news'], function () {
    Route::get('/', [NewsController::class, 'index'])->name('news');
    Route::get('/show/{id}.html', [NewsController::class, 'show'])
        ->where('id','\d+')->name('news.show');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category');
    Route::get('/show/{id}', [CategoryController::class, 'show'])
        ->where('id', '\d+')
        ->name('category.show');
});

Route::get('/test', function (){
    return 'ответ Тест';
});


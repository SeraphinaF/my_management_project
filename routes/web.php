<?php

use \App\Http\Controllers\ProjectController;
use \App\Http\Controllers\CategoryController;
//use \App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('projects', ProjectController::class);
//productController::class
//Route::resource('categories', CategoryController::class)

Route::get('wizard', function () {
    return view('default');
});

Auth::routes();

//niet nodig
//Route::get('/index', 'App\Http\Controllers\ProjectController@index');
//
//Auth::routes();
//
////niet nodig?
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

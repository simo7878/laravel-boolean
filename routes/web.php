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

//Route::get('/', function () {
//    return view('welcome');
//});

//static page
Route::get('/', 'StaticPageController@home')->name('static_page.home');


//students
Route::get('/students', 'StudentPageController@home')->name('students');
Route::get('/students/show/{id}', 'StudentPageController@show')->name('students');

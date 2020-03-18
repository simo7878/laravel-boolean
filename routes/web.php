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

// static pages
Route::get('/', 'StaticPageController@index')->name('static_page.home');
Route::get('/faq', 'StaticPageController@faq')->name('static_page.faq');
Route::get('/privacy', 'StaticPageController@privacy')->name('static_page.privacy');

// students
Route::get('/carriere', 'StudentController@index')->name('student.index');



Route::get('/carriere/studente/{slug}', 'StudentController@show')->name('student.show');

Route::get('/carriere/studente/id/{id}', 'StudentController@getById')->name('student.showId');

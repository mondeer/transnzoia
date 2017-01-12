<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
  return view('home');
});

Route::get('/dashboard', function(){
  return view('admin.adminhome');
});

Route::get('/students/create', 'StudentController@Create');

Route::post('/students/create', 'StudentController@postCreate');

Route::get('/students/view', 'StudentController@view');

Route::get('/students/login', 'StudentController@login');

Route::post('/students/login', 'StudentController@postLogin');

Route::post('/students/logout', 'StudentController@logout');

Route::get('/pages/students/profile', 'StudentController@index');

Route::get('/students/charts', 'StudentController@charts');

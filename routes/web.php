<?php

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

Route::get('/home', 'Task1StaticController@home')->name('.home');
Route::get('/profile', 'Task1StaticController@profile')->name('.profile');
Route::get('/contact', 'Task1StaticController@contact')->name('.contact');
Route::post('/contact', 'Task1StaticController@contact')->name('.contactpost');

Route::get('/', ['as' => 'root', 'uses' => function () {
    return view('home');
}]);
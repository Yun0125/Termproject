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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pitpet',function(){
    return view('index');
});

Route::get('hotel',function(){
    return view('hotelservice');
});

Route::get('petsitter',function(){
    return view('petsitterservice');
});

Route::get('login',function(){
    return view('login_form');
});

Route::get('member',function(){
    return view('member_form');
});


Route::get('/', 'loginController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('boards','BoardsController');

Route::get('myArticles', 'BoardsController@myArticles');
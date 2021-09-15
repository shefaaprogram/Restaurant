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
})->name('home');


Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/profile','HomeController@profile');
Route::get('/control','HomeController@control');

Route::post('/update-role/{user}','HomeController@updateRole');

Route::get('/menu','foodController@show');

Route::get('menu/{food}/delete','foodController@delete');

Route::get('/menu/{food_user}/deleteFromOrder','foodController@deleteFromOrder');

Route::get('menu/{user}/{food}/AddOrder','foodController@AddOrder');
Route::get('menu/{user}/ShowReservation','foodController@showReservation');

Route::post('addTomenu','foodController@addTomenu');

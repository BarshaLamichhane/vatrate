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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vatcreate',[
    'middleware'=>'auth',
    'uses'=>'VatoperationController@create'
]);
//Route::get('/vatcreate','VatoperationController@create');
Route::post('/vatsave','VatoperationController@store');
Route::get('/vatdata','VatoperationController@index');
Route::get('/vattoken','VatoperationController@vattoken');


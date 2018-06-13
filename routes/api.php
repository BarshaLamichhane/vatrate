<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
   //return $request->user();
//});
//Route::get('/vatui',function(){
   // return view('adminuser/vatui');
//});
//Route::auth();
//Route::get('vatapidata','VatapiController@index');
Route::resources(['vatoperation'=>'VatapiController']);


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
Route::post('user/login', 'UserController@login');
Route::post('user/register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('user','UserController@index');
    
    Route::group(['prefix'=>'ads'], function(){
    	Route::get('/','AdsController@index');
    	Route::post('/create','AdsController@create');
    	Route::post('/update/{id}','AdsController@update');
    	Route::get('/{id}','AdsController@show');
    	Route::post('/search','AdsController@search');
	});
});

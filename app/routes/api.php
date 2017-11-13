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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */



Route::group(['prefix' => 'v1'], function(){



    // Posts Routes
    Route::get('post','PostController@index');
    Route::get('post/{id}','PostController@show');
    Route::post('post','PostController@store');
    Route::patch('post/{id}','PostController@update');
    Route::delete('post/{id}','PostController@delete');

    // Auth Routes
    Route::group([
        'middleware' => 'api',
        'prefix' => 'auth'
    
    ], function ($router) {
    
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
        Route::get('login', function(){
            return "hello";
        });
    
    });

    // Category Routes
    Route::get('category','CategoryController@index');
    Route::get('category/{id}','CategoryController@show');
    Route::post('category','CategoryController@store');
    Route::patch('category/{id}','CategoryController@update');
    Route::delete('category/{id}','CategoryController@delete');


    Route::post('facebook','FacebookController@post');
});
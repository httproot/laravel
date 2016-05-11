<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Entrust::routeNeedsPermission( 'test', 'manage_posts' );
Route::get('/', 'IndexController@index');
Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
    Route::get('/','IndexController@index');
    Route::get('glmenu','IndexController@glmenu');
    Route::get('menu','IndexController@menu');
    Route::get('xgmenu/{menuid}','IndexController@xgmenu');
    Route::post('xgmenu/{sdads?}','IndexController@xgmenupost');
    Route::get('rmmenu/{rm}','IndexController@rmmenu');
    Route::get('addmenu','IndexController@addmenue');
    Route::post('addmenu','IndexController@addmenu');

});
Route::group(['prefix'=>'auth','namespace'=>'auth'],function(){
    Route::get('register','UseAuthController@getRegister');
    Route::post('register','UseAuthController@postRegister');
    Route::get('login','UseAuthController@getLogin');
    Route::post('login','UseAuthController@postLogin');
    Route::get('logout','UseAuthController@getLogout');

});

Route::get('test','QxController@test');

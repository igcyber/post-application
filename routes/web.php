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
//HomePage
Route::get('/', 'HomePageController@index' );

//PostPage
Route::get('/post', 'PostPageController@index');


Route::group(['prefix'=>'back'], function(){
        Route::get('/', 'DashboardController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

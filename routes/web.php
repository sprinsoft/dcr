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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(array('prefix' => 'order', 'middleware' => ['auth']), function (){
    Route::get('/', array('as' => 'place-order', 'uses' => 'OrderController@placeOrder'));
    //Route::post('/store', array('as' => 'homepagelinks-store', 'uses' => 'HomePageLinksController@store'));
});
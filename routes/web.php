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

Route::get('/test/{id}',function($id){
    return $id;
})->name('a');
Route::get('/test1/{id?}',function(){
    return "hello";
});
Route::namespace('admin')->group(function(){
    Route::get('users','FirstController@first');
});
Route::group(['prefix'=>'users'],function(){
    Route::get('/hello',function(){
        return "hello";
    })->middleware('auth');
});

Route::get('check',function(){
   return "auth";
})->middleware('auth');
Route::group(['namespace'=>'admin'],function (){
    Route::get('/con','SecondController@second');
});

Route::get('bros','admin\FirstController@first');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

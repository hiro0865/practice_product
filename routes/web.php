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

Route::get('/about',function(){
    return view('about');
});

Route::get('/search',function(){
    return view('search');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage','UsersController@mypage');
Route::get('/mypage/edit','UsersController@edit');
Route::post('/mypage/edit','UsersController@update');



Route::get('/user','UsersController@index');
Route::get('/user/add','UsersController@add');
Route::get('/user/add','UsersController@create');


Route::get('/instrument','InstrumentsController@index');
Route::get('/instrument/add','InstrumentsController@add');
Route::post('/instrument/add','InstrumentsController@create');

Route::get('/genre','GenresController@index')
    ->middleware('auth');

Route::get('/genre/add','GenresController@add');
Route::post('/genre/add','GenresController@create');
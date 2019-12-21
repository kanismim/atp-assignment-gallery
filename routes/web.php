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
use Illuminate\Support\Facades\Route;



Route::get('/login', function () {
    return view('login')->with('title','Login');
});
Route::post('/login','LoginController@verify');
Route::get('/welcome','ImageController@welcome');
Route::get('/welcome/home','ImageController@index');



Route::get('/image', 'ImageController@image'); 
Route::post('/image','ImageController@insert')->name('insert');

Route::get('/edit/{id}', 'ImageController@edit')->name('image.edit');
Route::get('/delete/{id}', 'ImageController@delete')->name('image.delete');
Route::post('/edit/{id}', 'ImageController@update')->name('update');
Route::get('/logout', 'LogoutController@index'); 
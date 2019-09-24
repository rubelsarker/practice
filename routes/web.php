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
Route::get('topic', function () {
    return view('topic');
})->name('topic');
Route::get('image','ImageController@create')->name('image.create');
Route::post('image','ImageController@store')->name('image.store');
Route::get('show-image','ImageController@index')->name('image.index');
Route::resource('tag','TagController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/change-password', 'Auth\ChangePasswordController@create')->name('change.password');
Route::post('/change-password', 'Auth\ChangePasswordController@update')->name('change.update');

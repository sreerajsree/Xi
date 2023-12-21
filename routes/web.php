<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/user/checkorder', 'OrderController@index')->name('order');
Route::post('/order/store', 'OrderController@store')->name('store');

Route::get('/profile', function() {
    return view('profile');
})->name('profile');

Route::get('/changepass', function() {
    return view('profilePass');
})->name('profilePass');

Route::get('/resetpass', function () {
    return view('auth.passwords.reset');
})->name('resetPass');

Route::delete('/order/delete/{id}','OrderController@destroy')->name('delete');
Route::patch('/order/update/{id}','OrderController@upd')->name('update');

Route::patch('/user/profile/{id}', 'UserController@update')->name('profileUpdate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
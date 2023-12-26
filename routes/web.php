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


Route::get('/user/checkorder', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::post('/order/store', [App\Http\Controllers\OrderController::class, 'store'])->name('store');

Route::get('/profile', function() {
    return view('profile');
})->name('profile');

Route::get('/changepass', function() {
    return view('profilePass');
})->name('profilePass');

Route::get('/resetpass', function () {
    return view('auth.passwords.reset');
})->name('resetPass');

Route::delete('/order/delete/{id}',[App\Http\Controllers\OrderController::class, 'destroy'])->name('delete');
Route::patch('/order/update/{id}',[App\Http\Controllers\OrderController::class, 'upd'])->name('update');

Route::patch('/user/profile/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('profileUpdate');
Route::post('/user/profile/image/{id}',[App\Http\Controllers\UserController::class, 'imageUpdate'])->name('imageUpdate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
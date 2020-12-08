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
    return view('auth/login');
});

//Route::get('/', 'UserController@index')->name('users.index');
Route::get('users/{id}', 'UserController@show')->name('users.show');
Route::get('auth/form', function () {
    return view('auth/register');
})->name('register');
Route::delete('users/{id}', 'UserController@delete')->name('users.delete');

Route::post('auth/login', 'AuthController@login')->name('auth.login');
Route::post('auth/register', 'AuthController@register')->name('auth.register');
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

Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::prefix('profile')->group(function () {
    Route::get('/', 'AccountController@index')->name('profile');
    Route::put('/update', 'AccountController@update')->name('profile.update');
    Route::put('/change-password', 'AccountController@change_password')->name('profile.change.password');
});
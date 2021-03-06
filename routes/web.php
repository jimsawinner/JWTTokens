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

Route::get('/decoder', function() {
    return view('decoder');
});

Route::get('user/verify/{verification_code}', 'AuthController@verifyUser');
Route::get('password/reset', 'Auth\ForgotPasswordController@showResetForm');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');

Route::post('password/reset', 'Auth\ForgotPasswordController@showResetForm');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

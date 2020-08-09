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

Auth::routes();

Route::get('/', function(){
    if (Auth::guest()) {
        return view('auth.login');
    } else {
        return view('home');
    } 
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('password/reset', function () {
    return view('auth.passwords.reset');
});


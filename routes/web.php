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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Admin Route - all route begin by :   /admin


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::group(['namespace' => 'Dashboard'], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });

    // User Route  -    all route begin by :   /admin/user
    Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.'], function () {
        Route::get('/', 'UsersController@list')->name('list');
        Route::get('/create', 'UsersController@create')->name('create');
        Route::post('/create', 'UsersController@store')->name('store');
        Route::get('/delete/{id}', 'UsersController@delete')->name('delete');


    });


});


// End Admin Route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


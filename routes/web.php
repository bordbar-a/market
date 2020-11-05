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
        Route::get('/', 'UsersController@all')->name('list');
        Route::get('/create', 'UsersController@create')->name('create');
        Route::post('/create', 'UsersController@store')->name('store');
        Route::get('/delete/{id}', 'UsersController@delete')->name('delete');
        Route::get('/edit/{id}', 'UsersController@edit')->name('edit');
        Route::post('/update/{id}', 'UsersController@update')->name('update');


    });

    // Category Route  -    all route begin by :   /admin/category
    Route::group(['prefix' => 'category', 'namespace' => 'Category', 'as' => 'category.'], function () {
        Route::get('/', 'CategoriesController@all')->name('list');
        Route::get('/create', 'CategoriesController@create')->name('create');
        Route::post('/create', 'CategoriesController@store')->name('store');
        Route::get('/delete/{id}', 'CategoriesController@delete')->name('delete');
        Route::get('/edit/{id}', 'CategoriesController@edit')->name('edit');
        Route::post('/update/{id}', 'CategoriesController@update')->name('update');



    });


});


// End Admin Route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


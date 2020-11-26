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

//Route::get('/', function () {
//    return view('front.index');
//});


//Start Admin Route - all route begin by :   /admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['auth' , 'admin']], function () {

    Route::group(['namespace' => 'Dashboard'], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });


    // Start User Route  -    all route begin by :   /admin/user
    Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.'], function () {
        Route::get('/', 'UsersController@all')->name('list');
        Route::get('/create', 'UsersController@create')->name('create');
        Route::post('/create', 'UsersController@store')->name('store');
        Route::get('/delete/{id}', 'UsersController@delete')->name('delete');
        Route::get('/edit/{id}', 'UsersController@edit')->name('edit');
        Route::post('/update/{id}', 'UsersController@update')->name('update');
    });
    // End User Route


    // Start Category Route  -    all route begin by :   /admin/category
    Route::group(['prefix' => 'category', 'namespace' => 'Category', 'as' => 'category.'], function () {
        Route::get('/', 'CategoriesController@all')->name('list');
        Route::get('/create', 'CategoriesController@create')->name('create');
        Route::post('/create', 'CategoriesController@store')->name('store');
        Route::get('/delete/{id}', 'CategoriesController@delete')->name('delete');
        Route::get('/edit/{id}', 'CategoriesController@edit')->name('edit');
        Route::post('/update/{id}', 'CategoriesController@update')->name('update');
    });
    // End Category Route


    // Start Product Route  -    all route begin by :   /admin/product
    Route::group(['prefix' => 'product', 'namespace' => 'Product', 'as' => 'product.'], function () {
        Route::get('/', 'ProductsController@all')->name('list');
        Route::get('/create', 'ProductsController@create')->name('create');
        Route::post('/create', 'ProductsController@store')->name('store');
        Route::get('/delete/{id}', 'ProductsController@delete')->name('delete');
        Route::get('/edit/{id}', 'ProductsController@edit')->name('edit');
        Route::post('/update/{id}', 'ProductsController@update')->name('update');
    });
    // End Product Route


});
// End Admin Route




//Start Front Route - all route begin by :   /
Route::group(['namespace' => 'Front', 'as' => 'front.'], function () {

    Route::group(['namespace' => 'Home'], function () {
        Route::get('/', 'HomeController@index')->name('home');
//        Route::get('/', function (){
//            var_dump(\App\Services\Basket\Basket::reset());
//
//        });
    });


    // Start Basket Route  -    all route begin by :   /front/basket
    Route::group(['prefix' => 'basket', 'namespace' => 'Basket', 'as' => 'basket.'], function () {
        Route::get('/add/{product_id}', 'BasketController@add')->name('add');
        Route::post('/add', 'BasketController@addByCount')->name('addByCount');
        Route::get('/reset', 'BasketController@reset')->name('reset');
        Route::get('/', 'BasketController@index')->name('index');
        Route::post('/', 'BasketController@updateBasket')->name('index');
        Route::get('/remove/{product_id}', 'BasketController@remove')->name('remove');


    });
    // End Basket Route


    // Start Product Route  -    all route begin by :   /front/product
    Route::group(['prefix' => 'product', 'namespace' => 'Product', 'as' => 'product.'], function () {
        Route::get('/item/{product_id}', 'ProductsController@item')->name('item');

    });
    // End Product Route


});
// End Front Route


//Start Profile Route - all route begin by :   /profile
Route::group(['prefix' => 'profile', 'namespace' => 'Profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {

    Route::group(['namespace' => 'Dashboard'], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });




     //Start Personal data Route  -    all route begin by :   /profile/personal
    Route::group(['prefix' => 'personal', 'namespace' => 'Personal', 'as' => 'personal.'], function () {
        Route::get('/', 'PersonalController@index')->name('index');
        Route::post('/update', 'PersonalController@update')->name('update');
        Route::get('/userImage/{user_id}', 'PersonalController@userImage')->name('userImage');
        Route::get('/deleteProfileImage/{user_id}', 'PersonalController@deleteProfileImage')->name('deleteProfileImage');
        Route::get('/changePassword/{user_id}', 'PersonalController@changePassword')->name('changePassword');
        Route::post('/changePassword/{user_id}', 'PersonalController@doChangePassword')->name('changePassword');

    });
    // End Personal Route

    //Start Order Route  -    all route begin by :   /profile/order
    Route::group(['prefix' => 'order', 'namespace' => 'Order', 'as' => 'order.'], function () {
        Route::get('/', 'OrdersController@register')->name('register');


    });
    // End Order Route





});
    // End Profile Route






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


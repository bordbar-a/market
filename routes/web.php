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

use App\Models\Permission ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('front.index');
//});


//Start Admin Route - all route begin by :   /admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['auth' ,'admin']], function () {

    Route::group(['namespace' => 'Dashboard'], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });


    // Start User Route  -    all route begin by :   /admin/user
    Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.'], function () {
        Route::get('/', 'UsersController@all')->middleware('can:' . Permission::READ_USERS)->name('list');
        Route::get('/create', 'UsersController@create')->middleware('can:' . Permission::CREATE_USERS)->name('create');
        Route::post('/create', 'UsersController@store')->middleware('can:' . Permission::CREATE_USERS)->name('store');
        Route::get('/delete/{user}', 'UsersController@delete')->middleware('can:' . Permission::DELETE_USERS)->name('delete');
        Route::get('/edit/{user}', 'UsersController@edit')->middleware('can:' . Permission::UPDATE_USERS)->name('edit');
        Route::post('/update/{user}', 'UsersController@update')->middleware('can:' . Permission::UPDATE_USERS)->name('update');
    });
    // End User Route


    // Start Category Route  -    all route begin by :   /admin/category
    Route::group(['prefix' => 'category', 'namespace' => 'Category', 'as' => 'category.' ,'middleware'=>['can:'. Permission::CATEGORIES]], function () {
        Route::get('/', 'CategoriesController@all')->name('list');
        Route::get('/create', 'CategoriesController@create')->name('create');
        Route::post('/create', 'CategoriesController@store')->name('store');
        Route::get('/delete/{category}', 'CategoriesController@delete')->name('delete');
        Route::get('/edit/{category}', 'CategoriesController@edit')->name('edit');
        Route::post('/update/{category}', 'CategoriesController@update')->name('update');
        Route::get('/update/category', 'CategoriesController@category_update')->name('category.update');
    });
    // End Category Route


    // Start Product Route  -    all route begin by :   /admin/product
    Route::group(['prefix' => 'product', 'namespace' => 'Product', 'as' => 'product.'], function () {
        Route::get('/', 'ProductsController@all')->middleware('can:' . Permission::READ_PRODUCTS)->name('list');
        Route::get('/create', 'ProductsController@create')->middleware('can:' . Permission::CREATE_PRODUCTS)->name('create');
        Route::post('/create', 'ProductsController@store')->middleware('can:' . Permission::CREATE_PRODUCTS)->name('store');
        Route::get('/delete/{product}', 'ProductsController@delete')->middleware('can:' . Permission::DELETE_PRODUCTS)->name('delete');
        Route::get('/edit/{product}', 'ProductsController@edit')->middleware('can:' . Permission::UPDATE_PRODUCTS)->name('edit');
        Route::post('/update/{product}', 'ProductsController@update')->middleware('can:' . Permission::UPDATE_PRODUCTS)->name('update');
        Route::post('/images/{product}', 'ProductsController@editImages')->middleware('can:' . Permission::UPDATE_PRODUCTS)->name('editImages');
        Route::get('/images/{product}/{image}/delete', 'ProductsController@deleteImage')->middleware('can:' . Permission::UPDATE_PRODUCTS)->name('deleteImage');
    });
    // End Product Route

    // Start Order Route  -    all route begin by :   /admin/order
    Route::group(['prefix' => 'order', 'namespace' => 'Order', 'as' => 'order.' , 'middleware'=>['can:'.Permission::ORDERS]], function () {
        Route::get('/', 'OrdersController@all')->name('list');
        Route::get('/details/{order}', 'OrdersController@details')->name('details');
    });
    // End Order Route


    // Start Setting Route  -    all route begin by :   /admin/setting
    Route::group(['prefix' => 'setting', 'namespace' => 'Setting', 'as' => 'setting.' , 'middleware'=>['can:'.Permission::SETTINGS]], function () {
        Route::get('/', 'SettingsController@all')->name('list');
        Route::post('/save', 'SettingsController@save')->name('save');
    });
    // End Setting Route


    // Start Menu Route  -    all route begin by :   /admin/menu
    Route::group(['prefix' => 'menu', 'namespace' => 'Menu', 'as' => 'menu.' , 'middleware'=>['can:'.Permission::MENU]], function () {
        Route::get('/', 'MenusController@index')->name('list');
        Route::get('/create', 'MenusController@create')->name('create');
        Route::post('/store', 'MenusController@store')->name('store');
        Route::get('/{menu}/sub', 'MenusController@submenu')->name('sub');
        Route::post('/{menu}/sub/store', 'MenusController@subStore')->name('subStore');
        Route::get('/{menu}/sub/update', 'MenusController@subUpdate')->name('subUpdate');
        Route::get('/{menuItem}/edit', 'MenusController@menuItemEdit')->name('menuItemEdit');
        Route::post('/{menuItem}/update', 'MenusController@menuItemUpdate')->name('menuItemUpdate');
        Route::get('/{menuItem}/delete', 'MenusController@menuItemDelete')->name('menuItemDelete');
    });
    // End Menu Route

    // Start Comment Route  -    all route begin by :   /admin/comment
    Route::group(['prefix' => 'comment', 'namespace' => 'Comment', 'as' => 'comment.','middleware'=>['can:'.Permission::COMMENTS]], function () {
        Route::get('/', 'CommentsController@all')->name('list');
        Route::get('/{comment}/depending', 'CommentsController@setDepending')->name('set.depending');
        Route::get('/{comment}/approved', 'CommentsController@setApproved')->name('set.approved');
        Route::get('/{comment}/unapproved', 'CommentsController@setUnapproved')->name('set.unapproved');

    });
    // End Comment Route


    // Start Slider Route  -    all route begin by :   /admin/slider
    Route::group(['prefix' => 'slider', 'namespace' => 'Slider', 'as' => 'slider.','middleware'=>['can:'.Permission::SLIDERS]], function () {
        Route::get('/', 'SlidersController@index')->name('list');
        Route::get('/create', 'SlidersController@create')->name('create');
        Route::post('/store', 'SlidersController@store')->name('store');
        Route::get('/{slider}/sub', 'SlidersController@subSlider')->name('sub');
        Route::post('/{slider}/sub/store', 'SlidersController@subStore')->name('subStore');
        Route::get('/{slider}/sub/update', 'SlidersController@subUpdate')->name('subUpdate');
        Route::get('/{sliderItem}/download', 'SlidersController@sliderItemDownload')->name('sliderItemDownload');
        Route::post('/{sliderItem}/update', 'SlidersController@sliderItemUpdate')->name('sliderItemUpdate');
        Route::get('/{sliderItem}/delete', 'SlidersController@sliderItemDelete')->name('sliderItemDelete');
    });
    // End Slider Route



    // Start Permission Route  -    all route begin by :   /admin/permission
    Route::group(['prefix' => 'permission', 'namespace' => 'Permission', 'as' => 'permission.' ,'middleware'=>['can:'.Permission::PERMISSIONS]], function () {
        Route::get('/' ,'PermissionsController@index')->name('list');
    });
    // End Slider Route


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
        Route::get('/item/{product}', 'ProductsController@item')->name('item');
        Route::get('/item/{product}/image/{imageName}', 'ProductsController@imageUrl')->name('imageUrl');

    });
    // End Product Route



    // Start Comment Route  -    all route begin by :   /front/comment
    Route::group(['prefix' => 'comment', 'namespace' => 'Comment', 'as' => 'comment.'], function () {
        Route::post('/{product}/product', 'CommentsController@productCreate')->name('product.add');

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
        Route::get('/changePassword/{user}', 'PersonalController@changePassword')->name('changePassword');
        Route::post('/changePassword/{user}', 'PersonalController@doChangePassword')->name('changePassword');

    });
    // End Personal Route

    //Start Order Route  -    all route begin by :   /profile/order
    Route::group(['prefix' => 'order', 'namespace' => 'Order', 'as' => 'order.'], function () {
        Route::get('/', 'OrdersController@list')->name('list');
        Route::get('/register', 'OrdersController@register')->name('register');
        Route::get('/products/{order_id}', 'OrdersController@products')->name('products');
        Route::get('/edit/{order_id}', 'OrdersController@edit')->name('edit');
        Route::get('/delete/{order}', 'OrdersController@delete')->name('delete');
    });
    // End Order Route





});
// End Profile Route



//Start Share Route - all route begin by :   /share
Route::group(['prefix' => 'share', 'namespace' => 'Share', 'as' => 'share.'], function () {

    // Start User Route  -    all route begin by :   /share/user
    Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.'], function () {
        Route::get('/userImage/{user}', 'UsersController@userImage')->name('userImage');
        Route::get('/deleteProfileImage/{user}', 'UsersController@deleteProfileImage')->name('deleteProfileImage');
    });
    // End User Route

});
// End Share Route




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


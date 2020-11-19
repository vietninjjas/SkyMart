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

Route::group(
    ['middleware' => 'locale'], function () {
        Route::get('change-language/{language}', 'changeLanguageController@changeLanguage')
        ->name('user.change-language');
    }
);
Route::get('/', 'HomeController@index')->name('home');


Auth::routes(
    [
        'verify' => false,
    ]
);

Route::name('admin.')->prefix('admin')->middleware(['auth', 'can:accessAdmin'])->group(
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('index');
        Route::resource('category', 'CategoryController');
        Route::resource('banner', 'BannerController');
        Route::resource('product', 'ProductController');
        Route::resource('deal', 'DealController');
        Route::resource('user', 'Auth\UserController');
    }
);
route::get('product/show/{id}', 'ProductController@show')->name('product.show');
route::get('category/show/{id}', 'CategoryController@show')->name('category.show');
Route::resource('account', 'Auth\AccountController');
Route::get('account/{id}/changePass', 'Auth\AccountController@changePass')->name('account.changePass');
Route::post('account/{id}/updatePass', 'Auth\AccountController@updatePass')->name('account.updatePass');
Route::post('add-cart', 'CartController@save_cart')->name('addCart');
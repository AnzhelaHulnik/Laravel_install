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
    return view('welcome');      //главная страница по умолчанию
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::get('/shops', 'ShopController@index');
Route::resource('/admin/shops', 'ShopController');
Route::resource('/shop','ShopController');


/*Route::get('/', 'ShopController@index');   //будет главной страніцей*/

/*function () {
    /*return 'Страцица для отображения магазинов';
});*/


/*Route::get('shop/{id}','ShopController@show')->name('shopShow');*/

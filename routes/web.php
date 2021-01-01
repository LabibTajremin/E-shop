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
Route::get('/contact', function () {
    return view('contact');
});
Route::name('home')->get('/','HomeController@index');
Route::name('Desktop')->get('cataloglist','CatalogController@catalogshowdesktop');
Route::name('Laptop')->get('cataloglistlp','CatalogController@catalogshowlaptopall');
Route::name('product')->get('product','CatalogController@productshow');
Route::name('cataloglaptop')->get('cataloglaptop','CatalogController@catalogshowlaptop');
Route::name('loginreg')->get('loginreg','LoginController@pageshow');
Route::name('cart')->get('cart','CartController@pageshow');
Route::name('add_to_cart')->get('add_to_cart','CartController@addToCart');
Route::name('login')->post('login','LoginController@login');
Route::name('logout')->get('logout','LoginController@logout');
Route::name('register')->post('register','LoginController@register');
Route::name('userdetail')->get('userdetail','LoginController@userDetail');

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

Route::livewire('/', 'home')->name('home');
Route::livewire('/profile', 'profile')->name('profile');
Route::livewire('/products', 'product-index')->name('products');
Route::livewire('/products/outdoor/{outdoorId}', 'product-outdoor')->name('products.outdoor');
Route::livewire('/products/{id}', 'product-detail')->name('products.detail');
Route::livewire('/keranjang', 'keranjang')->name('keranjang');
Route::livewire('/checkout', 'checkout')->name('checkout');
Route::livewire('/history', 'history')->name('history');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

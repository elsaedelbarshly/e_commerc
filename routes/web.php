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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//product

Route::get('/products','ProductController@index')->name('products.index');
Route::get('/product/create','ProductController@create')->name('product.create');

Route::post('/product/store','ProductController@store')->name('product.store');

Route::get('/product/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('/product/update/{id}','ProductController@update')->name('product.update');
Route::get('/product/delete/{id}','ProductController@destroy')->name('product.delete');


//comment


Route::get('/comments','CommentController@index')->name('comments');
Route::get('/comment/create','CommentController@create')->name('comment.create');

Route::post('/comment/store','CommentController@store')->name('comment.store');

Route::get('/comment/edit/{id}','CommentController@edit')->name('comment.edit');
Route::post('/comment/update/{id}','CommentController@update')->name('comment.update');
Route::get('/comment/delete/{id}','CommentController@destroy')->name('comment.delete');


//payment

Route::get('/payments','PaymentController@index')->name('payments');
Route::get('/payment/create','PaymentControlle@create')->name('payment.create');

Route::post('/payment/store','PaymentControlle@store')->name('payment.store');

Route::get('/payment/edit/{id}','PaymentControlle@edit')->name('payment.edit');
Route::post('/payment/update/{id}','PaymentControlle@update')->name('payment.update');
Route::get('/payment/delete/{id}','PaymentControlle@destroy')->name('payment.delete');
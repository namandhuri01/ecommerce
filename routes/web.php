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

Route::get('/', 'MainPageController@index')->name('home');

// Shop Controller Route
Route::get('/products', 'ShopController@index')->name('shop.index'); 
Route::get('/product/{product}/', 'ShopController@show')->name('shop.show'); 

// Cart Controller Route

Route::get('/cart', 'CartController@index')->name('cart.index'); 
Route::post('/cart', 'CartController@store')->name('cart.store'); 
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.save'); 

// Save For Later cart Page
Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy'); 
Route::post('/saveForLater/switchToSaveForLater/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart'); 

//Coupon Code
Route::post('/coupon', 'CouponController@store')->name('coupon.store'); 
Route::get('/coupon', 'CouponController@index')->name('coupon.index'); 
Route::delete('/coupon', 'CouponController@destroy')->name('coupon.destroy'); 


// Checkout Page

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index'); 
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store'); 

//Product Category wise

Route::get('/category','ProductCategoryWiseController@index')->name('category.index');
Route::get('/category/{id}','ProductCategoryWiseController@show')->name('category.show');

Route::get('empty', function(){

    Cart::destroy();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/placed', function(){
    return view('email.orders.placed');
});

// Search route
Route::get('/search', 'ShopController@search')->name('search');
Route::get('/query', function(){
    return view('jquery');
});
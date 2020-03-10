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

Route::get('/', 'frontController@getFrontIndex')->name('getFrontIndex');
Route::get('/index2', 'frontController@getFrontIndex2')->name('getFrontIndex2');
Route::get('/index3', 'frontController@getFrontIndex3')->name('getFrontIndex3');
Route::get('/index4', 'frontController@getFrontIndex4')->name('getFrontIndex4');
Route::get('/index5', 'frontController@getFrontIndex5')->name('getFrontIndex5');
Route::get('/index6', 'frontController@getFrontIndex6')->name('getFrontIndex6');
Route::get('/category', 'frontController@getCategoryPage')->name('getCategoryPage');

Route::get('/newpage', 'frontController@getNewPage')->name('getNew');

Route::get('/register_now', 'frontController@getRegisterPage')->name('getRegisterPage');

Route::group(['middleware' => ['auth']], function () {
  Route::get('/profile', 'frontController@getUserProfile')->name('getUserProfile');
});



Route::prefix('item')->group(function () {
  Route::get('{id}', 'itemController@getItemDetail')->name('getItemDetail');
});

Route::prefix('cart')->group(function () {
  Route::get('/', 'itemController@getCartIndex')->name('getCartIndex');
});

Route::prefix('checkout')->group(function () {
  Route::get('/', 'itemController@getCheckoutIndex')->name('getCheckoutIndex');
  Route::get('/success', 'itemController@getCheckoutSuccessIndex')->name('getCheckoutSuccessIndex');
});

Route::prefix('/admin')->group(function(){
  Route::get('/', 'adminController@getIndex')->name('getIndex');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

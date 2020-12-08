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
    return view('page.notFound');
});
//*************************ROUTES ADMIN*****************************//
Route::get('indexAdmin',[
    'as'=>'trangchuAdmin',
    'uses'=>'AdminController@getIndexAdmin'
]);
Route::get('OrderManagement',[
    'as'=>'orderManagement',
    'uses'=>'AdminController@getOrder'
]);
Route::get('DailyChart',[
    'as'=>'dailyChart',
    'uses'=>'AdminController@getDailyChart'
]);
Route::post('DailyChart',[
    'as'=>'dailyChart',
    'uses'=>'AdminController@postDailyChart'
]);
Route::get('MonthlyChart',[
    'as'=>'monthlyChart',
    'uses'=>'AdminController@getMonthlyChart'
]);
Route::get('insert','AdminController@insert');
Route::post('insert','AdminController@insertProduct');
Route::get('edit/{id}','AdminController@editPro');
Route::post('edit/{id}','AdminController@editProduct');
Route::get('delete/{id}','AdminController@deleteProduct');
Route::get('viewDetail/{id}','AdminController@viewDetail');
//*****************************************************************//

//hung
Route::get('lien-he', [
    'as' => 'contact',
    'uses' => 'PageController@getContact'
]);
Route::get('index', [
    'as' => 'trangchu',
    'uses' => 'PageController@getIndex'
]);
//cart-hung
Route::get('gio-hang', [
    'as' => 'getCart',
    'uses' => 'CartController@getCart'
]);
Route::get('them-vao-tui/{id}', [
    'as' => 'addCart',
    'uses' => 'CartController@addCart'
]);
Route::post('tim-kiem', [
    'as' => 'search',
    'uses' => 'PageController@getSearch'
]);
Route::post('save-size-rental/{id}', [
    'as' => 'saveSizeRental',
    'uses' => 'CartController@saveSizeRental'
]);
Route::get('them-so-luong/{id}', [
    'as' => 'addQuantity',
    'uses' => 'CartController@addQuantity'
]);
Route::get('giam-so-luong/{id}', [
    'as' => 'minusQuantity',
    'uses' => 'CartController@minusQuantity'
]);
//removeCartOfUser
Route::get('remove-cart/{id}', [
    'as' => 'removeCart',
    'uses' => 'CartController@removeCart'
]);
//ceckout hung
Route::post('thanh-toan', [
    'as' => 'checkout',
    'uses' => 'CartController@checkout'
]);
//logout
Route::get('log-out', [
    'as' => 'logout',
    'uses' => 'PageController@getLogout'
]);
//mai
Route::get('register', [
    'as' => 'signup',
    'uses' => 'PageController@getSignup'
]);
Route::post('register', [
    'as' => 'signup',
    'uses' => 'PageController@postSignup'
]);
Route::get('login', [
    'as' => 'signin',
    'uses' => 'PageController@getLogin'
]);
Route::post('login', [
    'as' => 'signin',
    'uses' => 'PageController@postLogin'
]);
Route::get('detail-product/{id}', [
    'as'=> 'detail',
    'uses' => 'PageController@getDetail'
]
);

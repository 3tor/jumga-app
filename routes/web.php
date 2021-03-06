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

// Route::get('/', function () {
//     return view('layouts.landing');
// });
Route::get('/', 'LandingController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/merchant/register', 'MerchantController@getRegisterForm')->name('merchant.register.form');
Route::post('/merchant/register', 'MerchantController@register')->name('merchant.register');
Route::get('/merchant/setup/payment/{id}', 'MerchantController@getSetupPayment')->name('merchant.setup.payment');
Route::post('/merchant/setup/card-payment', 'CardPaymentsController@setupCardPayment')->name('setup.card-payment');
Route::post('/merchant/setup/bank-payment', 'BankAccountController@setupBankPayment')->name('setup.bank-payment');
Route::post('/merchant/setup/momo-payment', 'MobileMoneyController@setupMobileMoneyPayment')->name('setup.momo-payment');

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

Route::get('/', 'HomeController@welcome');

Route::get('setting/profile', 'SettingController@profile');
Route::get('setting/change-password', 'SettingController@password');
Route::resource('user', 'UserController');
Route::resource('package', 'PackageController');
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('payment', ['as' => 'payment.index', 'uses' => 'PaymentController@index']);
Route::post('payment', ['as' => 'payment.create', 'uses' => 'PaymentController@create']);
Route::get('payment/success', ['as' => 'payment.success', 'uses' => 'PaymentController@success']);
Route::get('payment/failure', ['as' => 'payment.fail', 'uses' => 'PaymentController@fail']);

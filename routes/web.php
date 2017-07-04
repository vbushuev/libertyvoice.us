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

Auth::routes();

Route::get('/','HomeController@index')->name('index');
Route::get('/ivoice','HomeController@invoice')->name('invoice');
Route::get('/numbers','HomeController@numbers')->name('numbers');
Route::get('/other','HomeController@other')->name('other');
Route::get('/price-sip','HomeController@pricesip')->name('pricesip');
Route::get('/server','HomeController@server')->name('server');
Route::get('/statistic','HomeController@statistic')->name('statistic');
Route::get('/vn','HomeController@vn')->name('vn');
Route::get('/vpn','HomeController@vpn')->name('vpn');

Route::get('/mail/test','HomeController@mail_test')->name('mail');




Route::get('/cabinet', 'LibertyvoiceController@cabinet')->name('cabinet');
Route::get('/admin', 'LibertyvoiceController@admin')->name('admin');
Route::post('/admin/payment/add', 'LibertyvoiceController@addpayment')->name('addpayment');
Route::post('/admin/number/add', 'LibertyvoiceController@addnumber')->name('addnumber');
Route::post('/admin/number/remove/{id}', 'LibertyvoiceController@removenumber')->name('removenumber');
Route::post('/admin/user/edit/{id}', 'LibertyvoiceController@edituser')->name('edituser');
//Services
Route::post('/admin/service/add', 'LibertyvoiceController@serviceadd')->name('serviceadd');
Route::post('/admin/service/edit/{id}', 'LibertyvoiceController@serviceedit')->name('serviceedit');
Route::post('/admin/service/remove/{id}', 'LibertyvoiceController@serviceremove')->name('serviceremove');

Route::post('/cabinet/payment/extend/{id}', 'LibertyvoiceController@extendnumber')->name('extendnumber');

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
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/login', 'HomeController@login')->name('login');
Route::post('/login', 'HomeController@verify');
Route::get('/signupRider', 'HomeController@signupRider')->name('signupRider');
Route::post('/signupRider', 'HomeController@createRider');
Route::get('/signupDriver', 'HomeController@signupDriver')->name('signupDriver');
Route::post('/signupDriver', 'HomeController@createDriver');

Route::get('/emailVerification/{email}/{token}', 'HomeController@emailVerification')->name('emailVerification');

Route::get('/driver/dashboard', 'DriverController@dashboard')->name('driver.dashboard');
Route::get('/driver/addpackage', 'DriverController@addpackage')->name('driver.addpackage');
Route::get('/driver/packages', 'DriverController@packages')->name('driver.packages');
Route::get('/driver/packageedit', 'DriverController@packageedit')->name('driver.packageedit');
Route::get('/driver/viewprofile/{id}', 'DriverController@viewprofile')->name('driver.viewprofile');
Route::get('/driver/editprofile/{id}', 'DriverController@editprofile')->name('driver.editprofile');
Route::post('/driver/editprofile/{id}', 'DriverController@saveeditprofile');
Route::get('/driver/changepassword', 'DriverController@changepassword')->name('driver.changepassword');
Route::post('/driver/changepassword', 'DriverController@savechangepassword');


Route::get('/rider/dashboard', 'RiderController@dashboard')->name('rider.dashboard');
Route::get('/rider/packages', 'RiderController@packages')->name('rider.packages');
Route::get('/rider/mytrips', 'RiderController@mytrips')->name('rider.mytrips');
Route::get('/rider/viewprofile', 'RiderController@viewprofile')->name('rider.viewprofile');
Route::get('/rider/editprofile', 'RiderController@editprofile')->name('rider.editprofile');
Route::get('/rider/changepassword', 'RiderController@changepassword')->name('rider.changepassword');


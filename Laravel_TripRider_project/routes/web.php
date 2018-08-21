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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/signupRider', 'HomeController@signupRider')->name('signupRider');
Route::get('/signupDriver', 'HomeController@signupDriver')->name('signupDriver');


Route::get('/driver/dashboard', 'DriverController@dashboard')->name('driver.dashboard');
Route::get('/driver/addpackage', 'DriverController@addpackage')->name('driver.addpackage');
Route::get('/driver/packages', 'DriverController@packages')->name('driver.packages');
Route::get('/driver/packageedit', 'DriverController@packageedit')->name('driver.packageedit');
Route::get('/driver/viewprofile', 'DriverController@viewprofile')->name('driver.viewprofile');
Route::get('/driver/editprofile', 'DriverController@editprofile')->name('driver.editprofile');
Route::get('/driver/changepassword', 'DriverController@changepassword')->name('driver.changepassword');

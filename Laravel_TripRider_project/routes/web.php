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



Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/adminview', 'AdminController@adminview')->name('admin.adminview');
Route::get('/admin/driverview', 'AdminController@driverview')->name('admin.driverview');
Route::get('/admin/riderview', 'AdminController@riderview')->name('admin.riderview');
Route::get('/admin/riderviewprofile/{id}', 'AdminController@riderviewprofile')->name('admin.riderviewprofile');
Route::get('/admin/adminviewprofile/{id}', 'AdminController@adminviewprofile')->name('admin.adminviewprofile');
Route::get('/admin/driverviewprofile/{id}', 'AdminController@riderviewprofile')->name('admin.driverviewprofile');
Route::get('/admin/packages', 'AdminController@packages')->name('admin.packages');
Route::get('/admin/packages/{id}', 'AdminController@packagedetails')->name('admin.packagedetails');

Route::get('/admin/viewprofile/{id}', 'AdminController@viewprofile')->name('admin.viewprofile');
Route::get('/admin/editprofile/{id}', 'AdminController@editprofile')->name('admin.editprofile');
Route::post('/admin/editprofile/{id}', 'AdminController@saveeditprofile');
Route::get('/admin/changepassword', 'AdminController@changepassword')->name('admin.changepassword');
Route::post('/admin/changepassword', 'AdminController@savechangepassword');


Route::get('/start', 'DriverController@start');
Route::get('/end', 'DriverController@end');

Route::get('/driver/dashboard', 'DriverController@dashboard')->name('driver.dashboard');
Route::get('/driver/addpackage', 'DriverController@addpackage')->name('driver.addpackage');
Route::post('/driver/addpackage', 'DriverController@saveaddpackage');
Route::get('/driver/packages', 'DriverController@packages')->name('driver.packages');
Route::get('/driver/packagedetail/{id}', 'DriverController@packagedetail')->name('driver.packagedetail');
Route::get('/driver/packageedit/{id}', 'DriverController@packageedit')->name('driver.packageedit');
Route::post('/driver/packageedit/{id}', 'DriverController@savepackageedit');
Route::get('/driver/packagedelete/{id}', 'DriverController@packagedelete')->name('driver.packagedelete');
Route::get('/driver/viewprofile/{id}', 'DriverController@viewprofile')->name('driver.viewprofile');
Route::get('/driver/editprofile/{id}', 'DriverController@editprofile')->name('driver.editprofile');
Route::post('/driver/editprofile/{id}', 'DriverController@saveeditprofile');
Route::get('/driver/changepassword', 'DriverController@changepassword')->name('driver.changepassword');
Route::post('/driver/changepassword', 'DriverController@savechangepassword');


Route::get('/rider/dashboard', 'RiderController@dashboard')->name('rider.dashboard');
Route::get('/rider/packages', 'RiderController@packages')->name('rider.packages');
Route::get('/rider/packagedetail/{id}', 'RiderController@packagedetail')->name('rider.packagedetail');
Route::get('/rider/mytrips', 'RiderController@mytrips')->name('rider.mytrips');
Route::get('/rider/viewprofile/{id}', 'RiderController@viewprofile')->name('rider.viewprofile');
Route::get('/rider/editprofile/{id}', 'RiderController@editprofile')->name('rider.editprofile');
Route::post('/rider/editprofile/{id}', 'RiderController@saveeditprofile');
Route::get('/rider/changepassword', 'RiderController@changepassword')->name('rider.changepassword');
Route::post('/rider/changepassword', 'RiderController@savechangepassword');


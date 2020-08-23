<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('admin.template.login');
// });
// Route::get('home', function () {
//     return view('admin.template.default');
// });
// Route::get('/register', function () {
//     return view('admin.template.register');
// });

Route::get('/', 'AuthController@login');
Route::get('/home', 'AuthController@home');
Route::get('/register', 'AuthController@register');


Route::get('/logout', 'AuthController@logout')->name('logout');

Auth::routes(['verify' => true]);

Route::get('/home', 'Admin\AdminController@index')->name('home')->middleware('verified');
Route::get('/rfid/data', 'Admin\AdminController@rfid')->name('rfid.data');
Route::get('/equipment/data', 'Admin\AdminController@equipment')->name('equipment.data');
//admin
Route::resource('rfid','Admin\RfidController');
Route::resource('equipment','Admin\EquipmentController');

Route::get('rfid/data', 'Admin/AdminController@show');


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

Auth::routes();

Route::get('/home', 'Admin\AdminController@index')->name('home');
Route::get('/rfid/data', 'Admin\AdminController@rfid')->name('rfid.data');
//admin
Route::resource('rfid','Admin\RfidController');


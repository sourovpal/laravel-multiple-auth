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

Route::get('admin', 'AdminController@showLoginForm')->name('admin.showLoginForm');
Route::post('admin/login', 'AdminController@login')->name('admin.login');
Route::get('admin/logout', 'SiteController@AdminLogout')->name('admin.logout');
Route::get('admin/dashboard', 'SiteController@dashboard')->name('admin.dashboard');

Route::get('user', 'WebController@showLoginForm')->name('user.showLoginForm');
Route::post('user/login', 'WebController@login')->name('user.login');
Route::get('user/logout', 'HomeController@UserLogout')->name('user.logout');
Route::get('user/home', 'HomeController@home')->name('user.home');
Route::get('user/list', 'HomeController@UserList')->name('user.list');

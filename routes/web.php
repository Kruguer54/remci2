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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('equipments_route', 'EquipmentController');
Route::get('/home/equipments', 'EquipmentController@index')->name('equipment_index');


Route::resource('brands_route', 'BrandController');
Route::get('/home/brands', 'BrandController@index')->name('brand_index');


Route::resource('departments_route', 'DepartmentController');
Route::get('/home/departments', 'DepartmentController@index')->name('department_index');


Route::resource('serviceOrders_route', 'ServiceOrderController');
Route::get('/home/serviceorders', 'ServiceOrderController@index')->name('serviceorder_index');
Route::get('/home/createclient', 'ServiceOrderController@createclient')->name('createclient_route');
Route::get('/home/paneltec', 'ServiceOrderController@paneltec')->name('paneltec_route');
Route::get('/home/orderpend', 'ServiceOrderController@orderpend')->name('orderpend_route');
Route::get('/home/history', 'ServiceOrderController@history')->name('history_route');



Route::resource('actions_route', 'ActionController');
Route::get('/home/actions', 'ActionController@index')->name('action_index');


Route::resource('technicals_route', 'TechnicalController');
Route::get('/home/technicals', 'TechnicalController@index')->name('technichal_index');


Route::resource('users_route', 'UserController');
Route::get('/home/user', 'UserController@index')->name('user_index');


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

Route::get('/', 'frontController@index');

Route::get('category', 'frontController@category');

Route::get('post', 'frontController@post');

Route::get('admin', 'adminController@index');

Route::get('admincategory', 'adminController@adminCategory');

Route::post('addcategory', 'crudController@insertData');

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@welcome')->name('welcome');

Route::get('dashboard/category', 'AdminDashboardController@categoryList')->name('categoryList');
Route::get('dashboard/product', 'AdminDashboardController@productList')->name('productList');
Route::get('dashboard/role', 'AdminDashboardController@roleList')->name('roleList');
Route::get('dashboard/user', 'AdminDashboardController@userList')->name('userList');

Route::get('productByCategory/{id}', 'ProductController@productByCategory')->name('productByCategory');
Route::get('recherche', 'ProductController@recherche')->name('recherche');
Route::get('rechercheDashboard', 'AdminDashboardController@rechercheDashboard')->name('rechercheDashboard');
 

Route::resource('category','CategoryController');
Route::resource('product','ProductController');
Route::resource('user','UserController');
Route::resource('role','RoleController');


Route::get('/dashboard', function(){
    return view('bioProduct.niceAdmin.dashord.app');
});

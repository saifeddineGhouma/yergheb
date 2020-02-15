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
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create/reclamation','HomeController@create');
Route::post('/store/reclamation','HomeController@store')->name('reclamtion.store');
Route::get('/','HomeController@index')->name('index');

Route::group(['prefix'=>'dashbord','name'=>'admin'],function(){

    Route::get('/','Admin\AdminController@index')->name('index');
    Route::get('/categorie/create','Admin\AdminController@CreateCategorie');
    Route::post('/categorie/store','Admin\AdminController@StoreCategorie')->name('store.categorie');
    
});

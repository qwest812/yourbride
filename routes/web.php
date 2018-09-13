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



//Route::file('upload','AdminController@upload')->name('upload');



//////////  Admin
/// get
/// pages
Route::get('admin/add-page', 'AdminController@addPageSites');
Route::get( 'admin/pages', 'AdminController@pages');
Route::get( 'admin/edit/page/{id}', 'AdminController@editPage');
/// categories
Route::get( 'admin/add-category', 'AdminController@addCategorySites');
Route::get( 'admin/categories', 'AdminController@categories');
Route::get( 'admin/form-test', 'AdminController@formTest');
//--------------------------------------
/////////post
/// page
 Route::post( 'admin/save-page', 'AdminController@savePage');
 Route::post( 'admin/update-page/{id}', 'AdminController@updatePage');


 ///category
Route::post( 'admin/save-category', 'AdminController@saveCategory');
Route::post('admin/store-bright', 'AdminController@storeBright');


Route::get('admin/upload','AdminController@upload')->name('upload');
Route::post('admin/upload','AdminController@upload');


Route::get('/', 'BaseController@index');
Route::get('/{id}', 'BaseController@page');




Route::match(['get','post'],'admin/test', 'AdminController@test');
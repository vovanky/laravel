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
    return view('welcome');
});
// the route for the category controller
Route::get('category','CategoryController@index')->name('category.index');
Route::get('category/create','CategoryController@create')->name('category.create');
Route::post('category/store','CategoryController@store')->name('category.store');
Route::get('category/{id}','CategoryController@show')->name('category.show');
Route::get('category/edit/{id}','CategoryController@edit')->name('category.edit');
Route::PATCH('category/update/{id}','CategoryController@update')->name('category.update');
Route::DELETE('category/delete/{id}','CategoryController@destroy')->name('category.destroy');
// Route::resource('category', CategoryController::class);

// the route for the type news controller
Route::get('newstype','NewsTypeController@index')->name('newstype.index');
Route::get('newstype/create','NewsTypeController@create')->name('newstype.create');
Route::post('newstype/store','NewsTypeController@store')->name('newstype.store');
Route::get('newstype/{id}','NewsTypeController@show')->name('newstype.show');
Route::get('newstype/edit/{id}','NewsTypeController@edit')->name('newstype.edit');
Route::PATCH('newstype/update/{id}','NewsTypeController@update')->name('newstype.update');
Route::DELETE('newstype/delete/{id}','NewsTypeController@destroy')->name('newstype.destroy');
// Route::resource('newstype', NewsTypeController::class);

// the route for the news controller

Route::get('news','newsController@index')->name('news.index');
Route::get('news/create','newsController@create')->name('news.create');
Route::post('news/store','newsController@store')->name('news.store');
Route::get('news/{id}','newsController@show')->name('news.show');
Route::get('news/edit/{id}','newsController@edit')->name('news.edit');
Route::PATCH('news/update/{id}','newsController@update')->name('news.update');
Route::DELETE('news/delete/{id}','newsController@destroy')->name('news.destroy');
// Route::resource('news', newsController::class);

//the route for the advertisement controller

route::get('advertisement','AdvertisementController@index')->name('advertisement.index');
route::get('advertisement/create','AdvertisementController@create')->name('advertisement.create');
route::post('advertisement/store','AdvertisementController@store')->name('advertisement.store');
route::get('advertisement/{id}','AdvertisementController@show')->name('advertisement.show');
route::get('advertisement/edit/{id}','AdvertisementController@edit')->name('advertisement.edit');
route::PATCH('advertisement/update/{id}','AdvertisementController@update')->name('advertisement.update');
route::DELETE('advertisement/delete/{id}','AdvertisementController@destroy')->name('advertisement.destroy');
// Route::resource('advertisement', AdvertisementController::class);

//the route for the user controller

route::get('user','UserController@index')->name('user.index');
route::get('user/create','UserController@create')->name('user.create');
route::post('user/store','UserController@store')->name('user.store');
route::get('user/{id}','UserController@show')->name('user.show');
route::get('user/edit/{id}','UserController@edit')->name('user.edit');
route::PATCH('user/update/{id}','UserController@update')->name('user.update');
route::DELETE('user/delete/{id}','UserController@destroy')->name('user.destroy');
// Route::resource('user', UserController::class);

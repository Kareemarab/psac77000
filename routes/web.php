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

//Route::get('/', 'PagesController@welcome');
Route::get('/about', 'PagesController@about');
Route::get('/collective', 'PagesController@collective');
Route::get('/unionadv', 'PagesController@unionadv');
Route::get('/faq', 'PagesController@faq');
Route::get('/contactus', 'PagesController@contactus');
Route::get('/resources', 'PagesController@resources');
Route::get('/benefits', 'PagesController@benefits');
Route::get('/docsandforms', 'PagesController@docsandforms');
Route::get('/empissues', 'PagesController@empissues');
Route::get('/health', 'PagesController@health');
//Route::get('/whycupu', 'PagesController@whycupu');

Route::resource('posts', 'PostsController');
Route::resource('events', 'EventsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/', 'PostsController@welcome');
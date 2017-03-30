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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/websitelist', array('uses' => 'WebsiteController@index'));

Route::get('/add_new_website', function () {
    return view('add_new_website');
});

Route::get('/edit_website/{id}', array('uses' => 'WebsiteController@edit_website'));
Route::post('/update_website', array('uses' => 'WebsiteController@update_website'));

Route::get('/delete_website/{id}', array('uses' => 'WebsiteController@delete_website'));

Route::post('/add_new_website', array('uses' => 'WebsiteController@add_new'));

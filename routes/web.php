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

/*
|--------------------------------------------------------------------------
| PostController
|--------------------------------------------------------------------------
*/

Route::resource('post', 'PostController');

/*
|--------------------------------------------------------------------------
| ProfileController
|--------------------------------------------------------------------------
*/

Route::get('/user/profile', [
    'uses' => 'ProfileController@index',
    'as' => 'user.profile'
]);

Route::post('/user/profile/update', [
    'uses' => 'ProfileController@update',
    'as' => 'user.profile.update'
]);


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

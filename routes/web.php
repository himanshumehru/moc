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

Route::get('/', 'PagesController@index');
Route:: get('/one-pager', 'PagesController@onepager');
Route:: get('/pretest', 'PagesController@pretest')->name('pretest');
Route:: get('/post-test', 'PagesController@posttest');
Route:: get('/pcof', 'PagesController@pcof');
Route:: post('/pretest', 'PagesController@pretestsubmit')->name('pretest');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resources([
    'user' => 'UsersController'
]);
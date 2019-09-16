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
Route:: get('/pretest', 'PagesController@pretest');
Route:: get('/post-test', 'PagesController@posttest');
Route:: get('/pcof', 'PagesController@pcof');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resources([
    'questions' => 'QuestionController',
    'quizzes' => 'QuizController',
    'user' => 'UsersController'
]);
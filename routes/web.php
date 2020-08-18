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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/search', 'PostController@search')->name('posts.search');
Route::get('/posts/explain', 'PostController@explain')->name('posts.explain');
Route::post('/posts/delete', 'PostController@delete')->name('posts.delete');
Route::resource('/posts', 'PostController');
Route::resource('/comments', 'CommentController')->middleware('auth');
Route::resource('/answers', 'AnswerController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

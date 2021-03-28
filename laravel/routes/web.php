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

// Route::get('/', function () {
//     return view('articles.test');
// });


Route::get('/', 'ArticleController@index');
Route::get('/blog', 'ArticleController@index');
Route::get('/blog/{category}', 'ArticleController@list');
Route::get('/blog/{category}/{article}', 'ArticleController@show');

Route::get('/pay', 'PaymentController@show');
Route::post('/pay', 'PaymentController@pay');

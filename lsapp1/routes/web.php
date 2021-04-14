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

Route::get('/', 'PageController@index');
Route::get('/hello', function () {
    return 'hello world';
});
Route::get('/about', 'PageController@about');
Route::get('/page2', 'PageController@page2');
Route::get('/assignment1', 'PageController@assignment1');
Route::get('/carousel', 'PageController@carousel');
Route::get('/form', 'PageController@form');
Route::get('/img1', 'PageController@img1');
Route::get('/img2', 'PageController@img2');
Route::get('/img3', 'PageController@img3');
Route::get('/img4', 'PageController@img4');
Route::get('/list', 'PageController@list');
Route::get('/navbar', 'PageController@navbar');
Route::get('/progress', 'PageController@progress');
Route::get('/table', 'PageController@table');
Route::get('/validation', 'PageController@validation');
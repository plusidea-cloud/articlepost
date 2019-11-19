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

Route::get('/list', 'ArticleController@index')->name('article.list');
Route::get('/article/{id}', 'ArticleController@show')->name('article.detail');
Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::post('/article/edit/confirm/{id}', 'ArticleController@confirm')->name('article.confirm');
Route::post('/article/update/{id}', 'ArticleController@update')->name('article.update');

Route::get('/', function () {
    return redirect('/list');
});

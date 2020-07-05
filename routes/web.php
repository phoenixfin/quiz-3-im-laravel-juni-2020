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
    return view('index');
});

Route::get('/article/create', 'ArticleController@create'); // menampilkan halaman form
Route::post('/article', 'ArticleController@store'); // menyimpan data
Route::get('/article', 'ArticleController@index'); // menampilkan semua
Route::get('/article/{id}', 'ArticleController@show'); // menampilkan detail item dengan id 
Route::get('/article/{id}/edit', 'ArticleController@edit'); // menampilkan form untuk edit item
Route::put('/article/{id}', 'ArticleController@update'); // menyimpan perubahan dari form edit
Route::delete('/article/{id}', 'ArticleController@destroy'); // menghapus data dengan id
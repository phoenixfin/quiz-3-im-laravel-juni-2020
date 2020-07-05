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

Route::get('/items/create', 'ArticleController@create'); // menampilkan halaman form
Route::post('/items', 'ArticleController@store'); // menyimpan data
Route::get('/items', 'ArticleController@index'); // menampilkan semua
Route::get('/items/{id}', 'ArticleController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ArticleController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ArticleController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ArticleController@destroy'); // menghapus data dengan id
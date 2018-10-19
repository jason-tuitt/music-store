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
Route::get('/albums', 'AlbumController@views');
Route::get('/songs', 'SongController@views');
Route::get('/artists','ArtistController@views');

Route::post('/artists/create','ArtistController@create');
Route::get('/artists/edit/{id}','ArtistController@edit');
Route::patch('/artists/edit/update','ArtistController@update');
Route::delete('/artists/delete/{id}','ArtistController@delete');

Route::post('/albums/create','AlbumController@create');
Route::get('/albums/edit/{id}', 'AlbumController@edit');
Route::patch('/albums/edit/{id}', 'AlbumController@update');
Route::delete('/albums/delete/{id}','AlbumController@delete');


Route::post('/songs/create','SongController@create');
Route::get('/songs/edit/{id}', 'SongController@edit');
Route::patch('/songs/edit/update','SongController@update');
Route::delete('/songs/delete/{id}','SongController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

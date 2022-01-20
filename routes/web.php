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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('comics', 'ComicController@index')->name('comics');

Route::get('comics/{comic}', 'ComicController@show')->name('comic');

// Mostro lista di risorse
Route::get('admin/comics', 'Admin\CreatecomicController@index')->name('admin.comics.index');
// Mostro form per creare nuovo comic
Route::get('admin/comics/create', 'Admin\CreatecomicController@create')->name('admin.comics.create');
// Salvo il comic nel database
Route::post('admin/comics', 'Admin\CreatecomicController@store')->name('admin.comics.store');
// Mostro un form per modificare il comic
Route::get('admin/comics/{comic}/edit', 'Admin\CreatecomicController@edit')->name('admin.comics.edit');
// Aggiorno la risorla nel DB
Route::put('admin/comics/{comic}', 'Admin\CreatecomicController@update')->name('admin.comics.update');
// Cancella la risorsa
Route::delete('admin/comics/{comic}', 'Admin\CreatecomicController@destroy')->name('admin.comics.destroy');

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

Route::get('/', function ()
{
    return view('index');
})->name('index');

Route::get('/cardapio', function ()
{
    return view('menu');
})->name('menu');

Route::get('/cardapio', 'ShowMenu')->name('menu');

Route::get('/sobre', function ()
{
    return view('about');
})->name('about');

Route::get('/detalhes', function ()
{
    return view('blog-detail');
})->name('details');

Route::get('/blog', function ()
{
    return view('blog');
})->name('blog');

Route::get('/contato', function ()
{
    return view('contact');
})->name('contact');

Route::get('/galeria', 'GalleryController@show')->name('gallery');

Route::get('upload/', 'UploadController@show')->name('show');
Route::post('upload/', 'UploadController@upload')->name('upload');



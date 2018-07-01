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

Route::get('/inicio', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('about');
});

Route::get('/detalhes', function () {
    return view('blog-detail');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/galeria', function () {
    return view('gallery');
});

Route::get('/cardapio', function () {
    return view('menu');
});

Route::get('/reservas', function () {
    return view('reservation');
});

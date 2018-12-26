<?php

use Illuminate\Http\Request;

Route::view('/', 'index')->name('index');

Route::get('/cardapio', function ()
{
    return view('menu');
})->name('menu');

Route::get('/cardapio', function ()
{
    return view('menu');
})->name('menu');

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

Route::get('/galeria', function ()
{
    return view('gallery');
})->name('gallery');

Route::get('/reservas', function ()
{
    return view('reservation');
})->name('reservation');


//Rotas administrativas

Route::prefix('admin')->group(function ()
{
    Route::get('/', function () {
        return 'view';
    });

    Route::get('{id}', function ($id) {
        return "Este é o usuario $id";
    });

    Route::get('{id}/edit', function ($id) {
        return 'Este é o usuario $id';
    });

    Route::get('/informacoes', function () {
        return 'info';
    });
});

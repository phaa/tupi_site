<?php

use Illuminate\Http\Request;

Route::view('/', 'index')->name('index');

Route::get('/inicio', function ()
{
    return redirect()->route('index');
});

Route::get('/sobre', function ()
{
    return view('about');
})->name('sobre');

Route::get('/detalhes', function ()
{
    return view('blog-detail');
})->name('detalhes');

Route::get('/blog', function ()
{
    return view('blog');
})->name('blog');

Route::get('/contato', function ()
{
    return view('contact');
})->name('contato');

Route::get('/galeria', function ()
{
    return view('gallery');
})->name('galeria');

Route::get('/cardapio', function ()
{
    return view('menu');
})->name('cardapio');

Route::get('/reservas', function ()
{
    return view('reservation');
})->name('reservas');


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

<?php
// Rotas de autenticação
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Table Auth Routes...
Route::get('escolher_mesa', 'Auth\TableAuthController@showAuthenticationForm')->name('table.choose');
Route::post('escolher_mesa', 'Auth\TableAuthController@tableAuthentication')->name('table.choose_post');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Rotas do sistema
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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function ()
{
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get('/listar_produtos', 'ProductController@index')->name('products_index');

    Route::get('/cadastrar_produto', 'ProductController@create')->name('product_register_form');
    Route::post('/cadastrar_produto', 'ProductController@create')->name('product_register_post');

    Route::get('{id}/edit', function ($id) {
        return 'Este é o usuario $id';
    });

    Route::get('/informacoes', function () {
        return 'info';
    });
});

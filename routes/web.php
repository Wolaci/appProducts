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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/visualizar/produto', [
    'uses' => 'ProdutoController@visualizarProduto',
    'as' => 'visualizar.produto'
]);

Route::get('/adicionar/produto', [
    'uses' => 'ProdutoController@adicionarProduto',
    'as' => 'adicionar.produto'
]);

Route::post('/salvar/produto', [
    'uses' => 'ProdutoController@salvarProduto',
    'as' => 'salvar.produto'
]);

Route::get('/editar/produto/{id}', [
    'uses' => 'ProdutoController@editarProduto',
    'as' => 'editar.produto'
]);

Route::post('/atualizar/produto/{id}', [
    'uses' => 'ProdutoController@atualizarProduto',
    'as' => 'atualizar.produto'
]);

Route::get('/detalhar/produto/{id}', [
    'uses' => 'ProdutoController@detalharProduto',
    'as' => 'detalhar.produto'
]);

Route::get('/deletar/produto/{id}', [
    'uses' => 'ProdutoController@deletarProduto',
    'as' => 'deletar.produto'
]);

Route::get('/procurar/produto', [
    'uses' => 'ProdutoController@procurarProduto',
    'as' => 'procurar.produto'
]);
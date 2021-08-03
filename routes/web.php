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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.comprador');
});

Route::get('/dashboard', function () {
    return view('dashboard-comprador.index');
});
Route::get('/porto', function () {
    return view('home-escolha-porto.index');
});
Route::get('/listagem-produtos', function () {
    return view('listagem-de-produtos.index');
});
Route::get('/produto-detalhe', function () {
    return view('detalhes-produtos.index');
});
Route::get('/editar', function () {
    return view('cadastrar-editar-produtos.edit');
});
Route::get('/cadastrar', function () {
    return view('cadastrar-editar-produtos.cadastrar');
});
Route::get('/checkout', function () {
    return view('checkout.index');
});



// FLUXOS DAS ENCOMENDAS
Route::get('/listagem', function () {
    return view('fluxo-das-encomendas.listagem-das-encomendas.index');
});
Route::get('/detalhes-encomendas', function () {
    return view('fluxo-das-encomendas.detalhes-das-encomendas.index');
});
Route::get('/cadastro-individual-entrar', function () {
    return view('cadastro-individual.entrar');
});
Route::get('/cadastro-individual-nome', function () {
    return view('cadastro-individual.nome');
});
Route::get('/cadastro-individual-email', function () {
    return view('cadastro-individual.email');
});
Route::get('/cadastro-individual-nif', function () {
    return view('cadastro-individual.nif');
});

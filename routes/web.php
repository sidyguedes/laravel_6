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
Route::get('/produtos/{idProduto?}', function($id = ''){
    return "Produto(s): {$id}";
});

Route::get('/categorias/{categoria}', function($categoria){
    return "Produtos da categoria: {$categoria}";
});

Route::any('/any', function () {
    return 'Any';
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contato', function(){
    return 'ola';
});

Route::get('/', function () {
    return view('welcome');
});

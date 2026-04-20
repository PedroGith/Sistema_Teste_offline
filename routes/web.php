<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


/**  Route::get('/', function () {
   return view('welcome');
});

*/

Route::post('/produto/inserir', [ProdutoController::class, 'inserir']);

Route::get('/produto/novo', [ProdutoController::class, 'novo']);


Route::get('/', function () {
    return view('index');
});


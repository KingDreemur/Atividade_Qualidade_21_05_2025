<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pessoas', PessoaController::class);
Route::resource('produtos', ProdutoController::class);


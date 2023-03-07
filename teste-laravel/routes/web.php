<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProdutoController;//importar função

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto',[ProdutoController::class,'index']);// controllee-class-funcão dentro da controller(site)

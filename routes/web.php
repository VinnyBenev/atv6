<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CirculoController;
use App\Http\Controllers\QuadradoController;
use App\Http\Controllers\RetanguloController;
use App\Http\Controllers\PaginaInicialController;
use App\Http\Controllers\CalculosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\PaginaInicialController::class, 'paginaInicial']) ->name('site.index');
Route::get('/pagina-inicial', [App\Http\Controllers\PaginaInicialController::class, 'redirect']) ->name('site.index.redirect');;
Route::prefix('/forma')->group(function(){
 Route::get('/calculos', [CalculosController::class, 'calculo'])->name('app.calculos');
Route::get('/quadrado', [QuadradoController::class, 'calculaArea'])->name('app.quadrado');
Route::get('/circulo', [CirculoController::class, 'calculaArea'])->name('app.circulo');
Route::get('retangulo', [RetanguloController::class, 'calculaArea'])->name('app.retangulo'); 
});

Route::fallback( [App\Http\Controllers\fallBackController::class, 'fallback']);
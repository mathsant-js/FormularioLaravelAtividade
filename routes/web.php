<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('contato');
});

Route::get('/principal', [PrincipalController::class, 'index'])->name('principal');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::fallback(function () {
    return view('404');
});

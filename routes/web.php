<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contato');
});

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

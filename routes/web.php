<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome'); // Opcional, o redirige a alguna otra ruta principal
});

Route::resource('departamentos', DepartamentoController::class);
Route::resource('usuarios', UsuarioController::class);
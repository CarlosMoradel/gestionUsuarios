<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;


use Illuminate\Support\Facades\Auth;

/*Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Ruta para mostrar el formulario de login
Route::get('login', function () {
    return view('auth.login');  // Esta es la vista donde estará el formulario de login
})->name('login');

// Ruta para el post del formulario de login
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

// Ruta para hacer logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');




// Rutas de recursos para departamentos y usuarios
Route::resource('departamentos', DepartamentoController::class);
Route::resource('usuarios', UsuarioController::class);*/
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
    Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
    Route::get('/dashboard', function () {
        return view('dashboard'); // Vista del dashboard
    })->name('dashboard');
});
Route::resource('departamentos', DepartamentoController::class);
Route::resource('usuarios', UsuarioController::class);

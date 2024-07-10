<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\DB;
// Ruta para probar la conexión a la base de datos
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Connected successfully to database ' . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return 'Could not connect to the database. Error: ' . $e->getMessage();
    }
});

// Rutas para el controlador de usuarios
Route::resource('usuarios', UsuarioController::class);

// Ruta para la página de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rutas para autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Ruta para la página después de iniciar sesión
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

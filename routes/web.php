<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AutocuidadoController;
use App\Http\Controllers\TamizajeController;
use App\Http\Controllers\ForumController;


// Página principal

Route::get('/', function () {
    return view('index');
})->name('index');


// Página de inicio (después de login)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Autenticación

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// Recuperación de contraseña


Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


// Registro de usuarios
Route::get('/register', [RegistroController::class, 'showForm'])->name('register');
Route::post('/register', [RegistroController::class, 'submitForm'])->name('register.submit');

// Sección de registro duplicada
Route::get('/registro', [RegistroController::class, 'showForm'])->name('registro.show');
Route::post('/registro', [RegistroController::class, 'submitForm'])->name('registro.submit');

// CRUD de usuarios
Route::resource('usuarios', UsuariosController::class);

// Página de autocuidado
Route::get('/autocuidado', [AutocuidadoController::class, 'index'])->name('autocuidado');

// Módulo de tamizaje
Route::get('/tamizaje', [TamizajeController::class, 'index'])->name('tamizaje.index')->middleware('auth');
Route::get('/tamizaje/desesperanza', [TamizajeController::class, 'desesperanza'])->name('tamizaje.desesperanza')->middleware('auth');
Route::get('/tamizaje/audit', [TamizajeController::class, 'audit'])->name('tamizaje.audit')->middleware('auth');
Route::get('/tamizaje/ansiedad', [TamizajeController::class, 'ansiedad'])->name('tamizaje.ansiedad')->middleware('auth');
Route::post('/tamizaje/save', [TamizajeController::class, 'save'])->name('tamizaje.save')->middleware('auth');
Route::post('/tamizaje/saveaudit', [TamizajeController::class, 'saveaudit'])->name('tamizaje.saveaudit')->middleware('auth');
Route::post('/tamizaje/saveansiedad', [TamizajeController::class, 'saveansiedad'])->name('tamizaje.saveansiedad')->middleware('auth');
Route::get('tamizaje/unidadesdesalud', [TamizajeController::class, 'unidades'])->name('unidadesdesalud.index')->middleware('auth');
Route::get('unidadesdesalud', [UnidaddesaludController::class],'index')->name('unidadesdesalud')->middleware('auth');

// Foro de ayuda (solo para usuarios autenticados)

Route::middleware(['auth'])->group(function () {
    Route::get('/foro', [ForumController::class, 'index'])->name('forum.index');
    Route::get('/foro/crear', [ForumController::class, 'create'])->name('forum.create');
    Route::post('/foro', [ForumController::class, 'store'])->name('forum.store');
    Route::get('/foro/editar/{id}', [ForumController::class, 'edit'])->name('forum.edit');
    Route::put('/foro/actualizar/{id}', [ForumController::class, 'update'])->name('forum.update');
    Route::delete('/foro/eliminar/{id}', [ForumController::class, 'destroy'])->name('forum.destroy');
    Route::get('/foro/buscar', [ForumController::class, 'search'])->name('forum.search');
    Route::post('/foro/responder/{post}', [ForumController::class, 'reply'])->name('forum.reply');

});

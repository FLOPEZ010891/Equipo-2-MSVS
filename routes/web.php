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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/register', [RegistroController::class, 'showForm'])->name('register');
Route::post('/register', [RegistroController::class, 'submitForm'])->name('register.submit');


Route::get('/registro', [RegistroController::class, 'showForm'])->name('registro.show');
Route::post('/registro', [RegistroController::class, 'submitForm'])->name('registro.submit');



Route::resource('usuarios', UsuariosController::class);


Route::get('/autocuidado', [AutocuidadoController::class, 'index'])->name('autocuidado');


Route::get('/tamizaje', [TamizajeController::class, 'index'])->name('tamizaje.index');
Route::get('/tamizaje/desesperanza', [TamizajeController::class, 'desesperanza'])->name('tamizaje.desesperanza');
Route::post('/tamizaje/save', [TamizajeController::class, 'save'])->name('tamizaje.save');
Route::get('tamizaje/unidadesdesalud', [TamizajeController::class, 'unidades'])->name('unidadesdesalud.index');
Route::get('unidadesdesalud', [UnidaddesaludController::class],'index')->name('unidadesdesalud');


Route::middleware(['auth'])->group(function () {
    Route::get('/foro', [ForumController::class, 'index'])->name('forum.index');
    Route::get('/foro/crear', [ForumController::class, 'create'])->name('forum.create');
    Route::post('/foro', [ForumController::class, 'store'])->name('forum.store');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('./diseño/inicio');
});
Route::get('/mision-vision', function () {
    return view('./informacion/misionvision');
});
Route::get('/sesion', function () {
    return view('./diseño/login');
});
Route::get('/contacto', function () {
    return view('./informacion/contactos');
});
Route::get('/registrar', function () {
    return view('./diseño/registro');
});
Route::get('/acerca', function () {
    return view('./informacion/acercade');
});
Route::get('/admines', function () {
    return view('./admin/paneladmin');
});
Route::get('/seguidos', function () {
    return view('./admin/seguimientos');
});
Route::get('/final', function () {
    return view('./admin/finalizados');
});
Route::get('/tipo', function () {
    return view('./admin/tiposequipos');
});
Route::get('/sop', function () {
    return view('./informacion/soporte');
});
Route::get('/report', function () {
    return view('./informacion/reportes');
});
Route::get('/perfil', function () {
    return view('./admin/perfil');
});
Route::get('/login', [\App\Http\Controllers\UsuarioController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\UsuarioController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\UsuarioController::class, 'logout'])->name('logout');
Route::get('/perfil', [\App\Http\Controllers\UsuariotablaController::class, 'index'])->name('usuariostabla.index');

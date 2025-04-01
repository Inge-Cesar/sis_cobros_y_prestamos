<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas para Confuguraciones

Route::get('/admin/configuraciones', [App\Http\Controllers\ConfiguracionController::class, 'index'])->name('admin.configuracion.index')->middleware('auth');
Route::get('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracionController::class, 'create'])->name('admin.configuracion.create')->middleware('auth');
Route::post('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracionController::class, 'store'])->name('admin.configuracion.store')->middleware('auth');
Route::get('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'show'])->name('admin.configuracion.show')->middleware('auth');
Route::get('/admin/configuraciones/{id}/edit', [App\Http\Controllers\ConfiguracionController::class, 'edit'])->name('admin.configuracion.edit')->middleware('auth');
Route::put('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'update'])->name('admin.configuracion.update')->middleware('auth');
Route::delete('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'destroy'])->name('admin.configuracion.destroy')->middleware('auth');
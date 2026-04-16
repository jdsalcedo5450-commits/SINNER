<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaControlador;
use App\Http\Controllers\PqrsControlador;
use App\Http\Controllers\MensajeControlador;

Route::get('/',           [PaginaControlador::class, 'index'])->name('index');
Route::get('/catalogo',   [PaginaControlador::class, 'catalogo'])->name('catalogo');
Route::get('/streetwear', [PaginaControlador::class, 'streetwear'])->name('streetwear');
Route::get('/old-money',  [PaginaControlador::class, 'oldmoney'])->name('oldmoney');
Route::get('/nosotros',   [PaginaControlador::class, 'nosotros'])->name('nosotros');

Route::get('/soporte', [PqrsControlador::class, 'soporte'])->name('soporte');

Route::post('/pqrs',   [PqrsControlador::class, 'store'])->name('pqrs.store');

Route::get('/pqrs/{pqrs}/edit',    [PqrsControlador::class, 'edit'])->name('pqrs.edit');
Route::put('/pqrs/{pqrs}',         [PqrsControlador::class, 'update'])->name('pqrs.update');
Route::delete('/pqrs/{pqrs}',      [PqrsControlador::class, 'destroy'])->name('pqrs.destroy');
Route::put('/pqrs/{pqrs}/leido',   [PqrsControlador::class, 'marcarLeido'])->name('pqrs.leido');

Route::prefix('mensajes')->name('mensajes.')->group(function () {

    Route::get('/',[MensajeControlador::class, 'index'])->name('index');

    Route::get('/create',[MensajeControlador::class, 'create'])->name('create');

    Route::post('/',[MensajeControlador::class, 'store'])->name('store');

    Route::put('/{pqrs}',[MensajeControlador::class, 'update'])->name('update');

    Route::put('/{pqrs}/estado',[MensajeControlador::class, 'cambiarEstado'])->name('estado');

    Route::delete('/{pqrs}',[MensajeControlador::class, 'destroy'])->name('destroy');
});
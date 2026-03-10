<?php

use Illuminate\Support\Facades\Route;

// Página de Inicio
Route::get('/', function () {
    return view('index');
})->name('index');

// Catálogo General
Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

// Streetwear
Route::get('/catalogo/streetwear', function () {
    return view('streetwear');
})->name('streetwear');

// Old Money
Route::get('/catalogo/old-money', function () {
    return view('oldmoney');
})->name('oldmoney');

// Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// Soporte
Route::get('/soporte', function () {
    return view('soporte');
})->name('soporte');

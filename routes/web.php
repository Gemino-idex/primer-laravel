<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/clientes/create',[ClienteController::class,'create'])->name('clientes.create');

Route::get('/clientes',[ClienteController::class,'index'])->name('clientes');

route::post('/clientes',[ClienteController::class,'store'])->name('clientes.store');

Route::get('/libros/create',[LibrosController::class,'create'])->name('libros.create');

Route::get('/libros',[LibrosController::class,'index'])->name('libros');

route::post('/libros',[LibrosController::class,'store'])->name('libros.store');
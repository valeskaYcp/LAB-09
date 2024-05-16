<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/eventos', [EventoController::class, 'inicio'])->name('eventos.inicio');
Route::get('/eventos/crear', [EventoController::class, 'crear'])->name('eventos.crear');
Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');


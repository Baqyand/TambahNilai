<?php

use App\Http\Controllers\{PageController, RuanganController, SaranaPrasaranaController};
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Ruangan Routes
|--------------------------------------------------------------------------
*/

Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
Route::get('/ruangan/create', [RuanganController::class, 'create'])->name('ruangan.create');

/*
|--------------------------------------------------------------------------
| Sarana Prasarana Routes
|--------------------------------------------------------------------------
*/

Route::get('/sarpras', [SaranaPrasaranaController::class, 'index'])->name('sarpras.index');
Route::get('/sarpras/create', [SaranaPrasaranaController::class, 'create'])->name('sarpras.create');

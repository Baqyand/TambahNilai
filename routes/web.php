<?php

use App\Http\Controllers\{PageController, RuanganController, SaranaPrasaranaController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index']);
Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
Route::get('/sarpras', [SaranaPrasaranaController::class, 'index'])->name('sarpras.index');

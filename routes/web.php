<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

Route::get('/', [TamuController::class, 'create'])->name('kunjungan.create');
Route::post('/kunjungan', [TamuController::class, 'store'])->name('tamu.store');

Route::get('/admin/dashboard', [TamuController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/bukutamu', [TamuController::class, 'index'])->name('bukutamu.index');
Route::put('/admin/bukutamu/{tamu}', [TamuController::class, 'update'])->name('tamu.update');
Route::delete('/admin/bukutamu/{tamu}', [TamuController::class, 'destroy'])->name('tamu.destroy');

<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;

Route::get('/form', [MahasiswaController::class, 'form']);
Route::post('/simpan', [MahasiswaController::class, 'simpan']);
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftar']);

Route::get('/formtamu', [TamuController::class, 'form']);
Route::post('/simpantamu', [TamuController::class, 'simpan']);
Route::get('/daftar-tamu', [TamuController::class, 'daftar']);
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Round;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;

//Client Side Routes
Route::get('/', [FrontController::class, 'index']);
Route::get('/daftar-pengunjung', [FrontController::class, 'showPengunjung']);
Route::post('/daftar-pengunjung/create', [FrontController::class, 'store']);

//Admin Side Routes
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});

//Dashboard Route
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

//Data Pengunjung Route
Route::get('/data-pengunjung', [PengunjungController::class, 'showDataPengunjung'])->middleware('auth');
Route::get('/data-pengunjung/create/show', [PengunjungController::class, 'showPengunjungCreate'])->middleware('auth');
Route::get('/data-pengunjung/edit/{id}', [PengunjungController::class, 'showPengunjungEdit'])->middleware('auth');
Route::post('/data-pengunjung/create/store', [PengunjungController::class, 'store'])->middleware('auth');
Route::put('/data-pengunjung/edit/update/{id}', [PengunjungController::class, 'update'])->middleware('auth');
Route::get('/data-pengunjung/delete/{id}', [PengunjungController::class, 'delete'])->middleware('auth');

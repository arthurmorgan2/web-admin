<?php

use App\Http\Controllers\Api\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Round;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;

//Client Side Routes
Route::get('/', [FrontController::class, 'index']);
Route::get('/daftar-pengunjung', [FrontController::class, 'showPengunjung']);
Route::get('/berita', [FrontController::class, 'showBerita']);
Route::get('/berita/search', [FrontController::class, 'search'])->name('search');
Route::get('/berita/{slug}', [FrontController::class, 'detail_artikel'])->name('detail_artikel');
Route::post('/daftar-pengunjung/create', [FrontController::class, 'store']);
Route::get('/layanan/sapa129', [FrontController::class, 'showSapa']);
Route::get('/layanan/puspaga', [FrontController::class, 'showPuspaga']);
Route::get('/gallery', [FrontController::class, 'showGallery']);
Route::get('/video', [FrontController::class, 'showVideo']);

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

//Data Artikel Route
Route::get('/data-artikel', [ArtikelController::class, 'showDataArtikel'])->middleware('auth');
Route::get('/data-artikel/create/show', [ArtikelController::class, 'showArtikelCreate'])->middleware('auth');
Route::get('/data-artikel/edit/{id}', [ArtikelController::class, 'showArtikelEdit'])->middleware('auth');
Route::post('/data-artikel/create/store', [ArtikelController::class, 'create'])->middleware('auth');
Route::put('/data-artikel/edit/update/{id}', [ArtikelController::class, 'edit'])->middleware('auth');
Route::get('/data-artikel/delete/{id}', [ArtikelController::class, 'delete'])->middleware('auth');

//Data Kategori  Route
Route::get('/data-kategori', [KategoriController::class, 'showDataKategori'])->middleware('auth');
Route::post('/data-kategori/create', [KategoriController::class, 'create'])->name('create')->middleware('auth');
Route::put('/data-kategori/update/{id}', [KategoriController::class, 'update'])->middleware('auth');
Route::get('/data-kategori/delete/{id}', [KategoriController::class, 'delete'])->middleware('auth');

//Data Gallery  Route
Route::get('/data-gallery', [GalleryController::class, 'showDataGallery'])->middleware('auth');
Route::post('/data-gallery/create', [GalleryController::class, 'create'])->name('create')->middleware('auth');
Route::put('/data-gallery/update/{id}', [GalleryController::class, 'update'])->middleware('auth');
Route::get('/data-gallery/delete/{id}', [GalleryController::class, 'delete'])->middleware('auth');

//Data Gallery  Route
Route::get('/data-video', [VideoController::class, 'showDataVideo'])->middleware('auth');
Route::post('/data-video/create', [VideoController::class, 'create'])->name('create')->middleware('auth');
Route::put('/data-video/update/{id}', [VideoController::class, 'update'])->middleware('auth');
Route::get('/data-video/delete/{id}', [VideoController::class, 'delete'])->middleware('auth');

//Data Pengunjung Dashboard API
Route::apiResource('/dashboards', DashboardController::class);

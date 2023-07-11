<?php

use App\Models\dpemanfaatan;
use App\Models\pengawasan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\PengawasanController;
use App\Http\Controllers\DpemanfaatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserdasboardController;
use App\Http\Controllers\UserPengawasan;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Round;

// Check Admin with middleware
Route::group(['middleware' => 'web'], function () {

    // ROUTE LANDING PAGE USER
    Route::get('/', function () {
        return view('user_dashboard');
    })->name('user_dashboard');
    Route::get('/', [UserdasboardController::class, 'index'])->name('user_dasboard');
    Route::get('/pengawasan', [UserPengawasan::class, 'index'])->name('uspengawasan');

    // ROUTE LOGIN
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
    Route::match(['get', 'post'], 'actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

    // ROUTE REGISTER
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

    // Check Admin with middleware with Auth
    Route::group(['middleware' => ['auth']], function () {

        // ROUTE HOME
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::match(['get', 'post'], 'actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
        Route::get('home', [HomeController::class, 'index'])->name('home');



        // ROUTE PEMANFAATAN
        // Memanggil tabel pemanfaatan
        Route::get('/tabel', [DpemanfaatanController::class, 'index'])->name('tabel');
        //Menampilkan form input data pemanfaatan
        Route::get('/form-dpemanfaatan', [DpemanfaatanController::class, 'create'])->name('form-dpemanfaatan');
        //Menampilkan data hasil inputan ke tabel
        Route::post('/simpan-dpemanfaatan', [DpemanfaatanController::class, 'store'])->name('store');
        //Memanggil edit
        Route::get('edit-pemanfaatan/{id}', [DpemanfaatanController::class, 'edit'])->name('edit-pemanfaatan');
        //Memanggil update
        Route::put('/updatepemanfaatan/{id}', [DpemanfaatanController::class, 'update'])->name('update');
        //Memanggil hapus
        Route::get('/hapus-pemanfaatan/{id}', [DpemanfaatanController::class, 'delete'])->name('hapus-pemanfaatan');

        //ROUTE PENGAWASAN
        Route::get('/Data-Pengawasan', [PengawasanController::class, 'index'])->name('Data-Pengawasan');
        Route::get('/Create-Pengawasan', [PengawasanController::class, 'create'])->name('Create-Pengawasan');
        Route::post('/simpan-Pengawasan', [PengawasanController::class, 'store'])->name('simpan-Pengawasan');
        Route::get('/edit-pengawasan/{id}', [PengawasanController::class, 'edit'])->name('edit-pengawasan');
        Route::get('/view-pengawasan/{id}', [PengawasanController::class, 'view'])->name('view-pengawasan');
        Route::put('/update-pengawasan/{id}', [PengawasanController::class, 'update'])->name('update-pengawasan');
        Route::get('/delete-pengawasan/{id}', [PengawasanController::class, 'destroy'])->name('delete-pengawasan');
        Route::get('/Data-Pengawasan', [PengawasanController::class, 'index'])->name('Data-Pengawasan');

        //ROUTE PERMOHONAN IZIN
        Route::get('/tabel_izin', [AdministrasiController::class, 'index'])->name('tabel_izin');
        Route::get('/form_izin', [AdministrasiController::class, 'create'])->name('form_izin');
        Route::post('/simpan_administrasi', [AdministrasiController::class, 'store'])->name('simpan_administrasi');
        Route::get('edit/{id}', [AdministrasiController::class, 'edit'])->name('edit');
        Route::put('/updateadministrasi/{id}', [AdministrasiController::class, 'update'])->name('updateadministrasi');
        Route::get('/hapus/{id}', [AdministrasiController::class, 'delete'])->name('delete');
    });

    // ROUTE FILTER PEMANFAATAN
    Route::get('/search/pemanfaatan', [DpemanfaatanController::class, 'pemanfaatan'])->name('api.pemanfaatan.search');
    Route::get('/search/tahunA', [DpemanfaatanController::class, 'tahunA'])->name('api.tahunA');
    Route::get('/search/pemanfaatan/kabupaten', [DpemanfaatanController::class, 'kabupaten'])->name('api.pemanfaatan.kabupaten');
    Route::get('/search/pemanfaatan/kapanewon', [DpemanfaatanController::class, 'kapanewon'])->name('api.pemanfaatan.kapanewon');
    Route::get('/search/pemanfaatan/kelurahan', [DpemanfaatanController::class, 'kelurahan'])->name('api.pemanfaatan.kelurahan');
    Route::get('/search/pemanfaatan/tanggal_akhir', [DpemanfaatanController::class, 'tanggal_akhir'])->name('api.pemanfaatan.tanggal_akhir');
    Route::get('/pesan/peringatan', 'DpemanfaatanController@peringatan');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // ROUTE FILTER PENGAWASAN
    Route::get('/search/pengawasan', [PengawasanController::class, 'pengawasan'])->name('api.pengawasan.search');
    Route::get('/search/tahun', [PengawasanController::class, 'tahun'])->name('api.tahun');
    Route::get('/search/pengawasan/kabupaten', [PengawasanController::class, 'kabupaten'])->name('api.pengawasan.kabupaten');
    Route::get('/search/pengawasan/kapanewon', [PengawasanController::class, 'kapanewon'])->name('api.pengawasan.kapanewon');
    Route::get('/search/pengawasan/kelurahan', [PengawasanController::class, 'kelurahan'])->name('api.pengawasan.kelurahan');
    Route::get('/search/pengawasan/tahun_pengawasan', [PengawasanController::class, 'tahun_pengawasan'])->name('api.pengawasan.tahun_pengawasan');
    Route::get('/pesan/peringatan', [PengawasanController::class, 'peringatan']);
});

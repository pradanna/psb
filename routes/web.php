<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::match(['GET', 'POST'], '/login', [\App\Http\Controllers\auth\LoginController::class, 'index'])->name('login');
Route::get('/logout', [\App\Http\Controllers\auth\LoginController::class, 'logout']);

Route::match(['POST', 'GET'], '/daftar', [\App\Http\Controllers\auth\RegistrasiController::class, 'index']);

Route::get('/services', function () {
    return view('user.services');
});

Route::middleware('auth')->group(function () {

    Route::prefix('admin')->middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function () {
        Route::get('', function () {
            return view('admin.dashboard');
        });

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        Route::prefix('tahunajaran')->group(function () {
            Route::get('datatable', [\App\Http\Controllers\Admin\TahunAjaranController::class, 'datables'])->name('admin.tahunajaran.datatable');
            Route::match(['POST', 'GET'], '', [\App\Http\Controllers\Admin\TahunAjaranController::class, 'index'])->name('admin.tahunajaran');
            Route::post('delete', [\App\Http\Controllers\Admin\TahunAjaranController::class, 'delete'])->name('admin.tahunajaran.delete');
        });

        Route::prefix('calonsiswa')->group(function () {
            Route::get('datatable', [\App\Http\Controllers\Admin\CalonSiswaController::class, 'datatable'])->name('admin.calonsiswa.datatable');
            Route::get('', [\App\Http\Controllers\Admin\CalonSiswaController::class, 'index'])->name('admin.calonsiswa');
            Route::match(['GET', 'POST'], 'data-calonsiswa/{siswa}', [\App\Http\Controllers\Admin\CalonSiswaController::class, 'dataCalonSiswa'])->name('admin.calonsiswa.data');
            Route::get('detail-calonsiswa/{siswa}', [\App\Http\Controllers\Admin\CalonSiswaController::class, 'detail'])->name('admin.calonsiswa.detail');
            Route::post('detail-calonsiswa/{siswa}/status-pendaftaran', [\App\Http\Controllers\Admin\CalonSiswaController::class, 'confirmRegistration'])->name('admin.calonsiswa.detail.status');
        });

        Route::prefix('informasi')->group(function () {
            Route::get('datatable', [\App\Http\Controllers\Admin\InformasiController::class, 'datatable'])->name('admin.informasi.datatable');
            Route::match(['GET', 'POST'], '', [\App\Http\Controllers\Admin\InformasiController::class, 'index'])->name('admin.informasi');
            Route::post('delete', [\App\Http\Controllers\Admin\InformasiController::class, 'delete'])->name('admin.informasi.delete');
        });

        Route::prefix('paketsoal')->group(function () {
            Route::get('datatable', [\App\Http\Controllers\Admin\PaketSoalController::class, 'datatable'])->name('admin.paketsoal.datatable');
            Route::post('delete', [\App\Http\Controllers\Admin\PaketSoalController::class, 'delete'])->name('admin.paketsoal.delete');
            Route::match(['POST', 'GET'], '', [\App\Http\Controllers\Admin\PaketSoalController::class, 'index'])->name('admin.paketsoal');
            Route::post('ganti-status/{id}', [\App\Http\Controllers\Admin\PaketSoalController::class, 'gantiStatus'])->name('admin.paketsoal.status');
            Route::prefix('soal')->group(function () {
                Route::get('datatable/{url}', [\App\Http\Controllers\Admin\SoalController::class, 'datatable'])->name('admin.paketsoal.soal.datatable');
                Route::match(['POST', 'GET'], '{url}', [\App\Http\Controllers\Admin\SoalController::class, 'index'])->name('admin.paketsoal.soal');
                Route::post('delete/soal', [\App\Http\Controllers\Admin\SoalController::class, 'delete'])->name('admin.paketsoal.soal.delete');
            });

        });

        Route::get('/rekapitulasi', function () {
            return view('admin.rekapitulasi.rekapitulasinilai');
        });
    });

    Route::prefix('siswa')->middleware(\App\Http\Middleware\SiswaMiddleware::class)->group(function () {
        Route::get('', function () {
            return view('siswa.dashboard');
        });

        Route::get('dashboard', function () {
            return view('siswa.dashboard');
        });

        Route::get('tambah-calonsiswa', function () {
            return view('siswa.calonsiswa.tambah_calonsiswa');
        });

        Route::get('detail-calonsiswa', function () {
            return view('siswa.calonsiswa.detail_calonsiswa');
        });

        Route::get('paketsoal', function () {
            return view('siswa.soal.paketsoal');
        });

        Route::get('kerjakansoal', function () {
            return view('siswa.soal.kerjakansoal');
        });
    });
});

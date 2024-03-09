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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/daftar', function () {
    return view('auth.daftar');
});


Route::get('/services', function () {
    return view('user.services');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/admin/tahunajaran', function () {
    return view('admin.tahunajaran.tahunajaran');
});

Route::get('/admin/calonsiswa', function () {
    return view('admin.calonsiswa.calonsiswa');
});

Route::get('/admin/tambah-calonsiswa', function () {
    return view('admin.calonsiswa.tambah_calonsiswa');
});

Route::get('/admin/detail-calonsiswa', function () {
    return view('admin.calonsiswa.detail_calonsiswa');
});

Route::get('/admin/informasi', function () {
    return view('admin.informasi.informasi');
});


Route::get('/admin/paketsoal', function () {
    return view('admin.soal.paketsoal');
});

Route::get('/admin/soal', function () {
    return view('admin.soal.soal');
});

Route::get('/admin/rekapitulasi', function () {
    return view('admin.rekapitulasi.rekapitulasinilai');
});


Route::get('/siswa', function () {
    return view('siswa.dashboard');
});

Route::get('/siswa/dashboard', function () {
    return view('siswa.dashboard');
});


Route::get('/siswa/tambah-calonsiswa', function () {
    return view('siswa.calonsiswa.tambah_calonsiswa');
});

Route::get('/siswa/detail-calonsiswa', function () {
    return view('siswa.calonsiswa.detail_calonsiswa');
});

Route::get('/siswa/paketsoal', function () {
    return view('siswa.soal.paketsoal');
});

Route::get('/siswa/kerjakansoal', function () {
    return view('siswa.soal.kerjakansoal');
});


Route::get('/siswa/cetakformulir', [\App\Http\Controllers\CetakFormulirController::class, 'index']);

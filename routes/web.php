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
    return view('user.home');
});

Route::get('/services', function () {
    return view('user.services');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
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

Route::get('/admin/service', function () {
    return view('admin.service.service');
});

Route::get('/admin/tambah-service', function () {
    return view('admin.service.tambah_service');
});

Route::get('/admin/portfolio', function () {
    return view('admin.portfolio.portfolio');
});

Route::get('/admin/tambah-portfolio', function () {
    return view('admin.portfolio.tambah_portfolio');
});

Route::get('/admin/clients', function () {
    return view('admin.clients.clients');
});

Route::get('/admin/tahunajaran', function () {
    return view('admin.tahunajaran.tahunajaran');
});

Route::get('/admin/inbox', function () {
    return view('admin.inbox.inbox');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/admin/profile', function () {
    return view('admin.profile.profile');
});

Route::get('/admin/about', function () {
    return view('admin.about.about');
});

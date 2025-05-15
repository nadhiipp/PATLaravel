<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMurid;
use App\Http\Controllers\ControllerGuru;
use App\Http\Controllers\ControllerNilai;
use App\Http\Controllers\ControllerMataPelajaran;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ControllerAuth;

Route::get('/DashboardAdmin', function () {
    return view('DashboardAdmin');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/template', function () {
    return view('layout.template');
});
Route::get('/s', function () {
    return view('layout.sidebar');
});
Route::get('/murid', function () {
    return view('user.murid.murid');
});
Route::get('/CreateMurid', function () {
    return view('user.murid.create');
});
Route::get('/UpdateMurid', function () {
    return view('user.murid.update');
});

Route::get('/guru', function () {
    return view('user.guru.guru');
});
Route::get('/nilai', function () {
    return view('nilai.nilai');
});
Route::get('/user', function () {
    return view('mata_pelajaran.mata_pelajaran');
});

// routes/web.php
Route::get('/login', [ControllerAuth::class, 'showLogin'])->name('login');
Route::post('/login', [ControllerAuth::class, 'sumbitLogin'])->name('sumbitLogin');
Route::post('/logout', [ControllerAuth::class, 'logout'])->name('logout');
Route::post('/register', [ControllerAuth::class, 'register'])->name('register');

Route::get('/DashboardAdmin', [ControllerDashboard::class, 'index'])->name('dashboard');


Route::get('/murid', [ControllerMurid::class, 'index'])->name('murid.index');
Route::get('/murid/create', [ControllerMurid::class, 'create'])->name('murid.create');
Route::post('/murid/store', [ControllerMurid::class, 'store'])->name('murid.store');
Route::get('/murid/edit/{id}', [ControllerMurid::class, 'edit'])->name('murid.edit');
Route::put('/murid/update/{id}', [ControllerMurid::class, 'update'])->name('murid.update');
Route::delete('/murid/destroy/{id}', [ControllerMurid::class, 'destroy'])->name('murid.destroy');


Route::get('/guru', [ControllerGuru::class, 'index'])->name('guru.index');
Route::get('/guru/create', [ControllerGuru::class, 'create'])->name('guru.create');
Route::post('/guru/store', [ControllerGuru::class, 'store'])->name('guru.store');
Route::get('/guru/edit/{id}', [ControllerGuru::class, 'edit'])->name('guru.edit');
Route::put('/guru/update/{id}', [ControllerGuru::class, 'update'])->name('guru.update');
Route::delete('/guru/destroy/{id}', [ControllerGuru::class, 'destroy'])->name('guru.destroy');


Route::get('/matapelajaran', [ControllerMataPelajaran::class, 'index'])->name('mataPelajaran.index');
Route::get('/matapelajaran/create', [ControllerMataPelajaran::class, 'create'])->name('mataPelajaran.create');
Route::post('/matapelajaran/store', [ControllerMataPelajaran::class, 'store'])->name('mataPelajaran.store');
Route::get('/matapelajaran/edit/{id}', [ControllerMataPelajaran::class, 'edit'])->name('mataPelajaran.edit');
Route::put('/matapelajaran/update/{id}', [ControllerMataPelajaran::class, 'update'])->name('mataPelajaran.update');
Route::delete('/matapelajaran/destroy/{id}', [ControllerMataPelajaran::class, 'destroy'])->name('mataPelajaran.destroy');

Route::get('/user', [ControllerUser::class, 'index'])->name('user.index');
Route::get('/user/create', [ControllerUser::class, 'create'])->name('user.create');
Route::post('/user/store', [ControllerUser::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [ControllerUser::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [ControllerUser::class, 'update'])->name('user.update');
Route::delete('/user/destroy/{id}', [ControllerUser::class, 'destroy'])->name('user.destroy');

Route::get('/nilai', [ControllerNilai::class, 'index'])->name('nilai.index');
Route::get('/nilai/create', [ControllerNilai::class, 'create'])->name('nilai.create');
Route::post('/nilai/store', [ControllerNilai::class, 'store'])->name('nilai.store');
Route::get('/nilai/edit/{id}', [ControllerNilai::class, 'edit'])->name('nilai.edit');
Route::put('/nilai/update/{id}', [ControllerNilai::class, 'update'])->name('nilai.update');
Route::delete('/nilai/destroy/{id}', [ControllerNilai::class, 'destroy'])->name('nilai.destroy');


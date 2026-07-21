<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\UmkmController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KecamatanController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KontakController;


// =========================
// WEBSITE PENGUNJUNG
// =========================

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/wisata', function () {
    return view('wisata');
})->name('wisata');


Route::get('/umkm', function () {
    return view('umkm');
})->name('umkm');


Route::get('/peta', function () {
    return view('peta');
})->name('peta');




// =========================
// DASHBOARD ADMIN
// =========================

Route::middleware(['auth'])->prefix('admin')->group(function () {


    // Dashboard

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    // =========================
// GLOBAL SEARCH
// =========================

    Route::get('/search', [DashboardController::class, 'search'])
        ->name('admin.search');

    // CRUD DATA

    Route::resource('wisata', WisataController::class);

    Route::resource('umkm', UmkmController::class);

    Route::resource('kategori', KategoriController::class);

    Route::resource('kecamatan', KecamatanController::class);




    // =========================
    // GALERI WISATA
    // =========================


    Route::get(
        '/wisata/{id}/galeri',
        [GaleriController::class, 'index']
    )
        ->name('galeri.index');


    Route::get(
        '/wisata/{id}/galeri/create',
        [GaleriController::class, 'create']
    )
        ->name('galeri.create');





    // =========================
    // GALERI UMKM
    // =========================


    Route::get(
        '/umkm/{id}/galeri',
        [GaleriController::class, 'indexUmkm']
    )
        ->name('galeri.umkm.index');


    Route::get(
        '/umkm/{id}/galeri/create',
        [GaleriController::class, 'createUmkm']
    )
        ->name('galeri.umkm.create');





    // =========================
    // SIMPAN GALERI
    // =========================


    Route::post(
        '/galeri',
        [GaleriController::class, 'store']
    )
        ->name('galeri.store');





    // =========================
    // EDIT GALERI
    // =========================


    Route::get(
        '/galeri/{id}/edit',
        [GaleriController::class, 'edit']
    )
        ->name('galeri.edit');



    Route::put(
        '/galeri/{id}',
        [GaleriController::class, 'update']
    )
        ->name('galeri.update');





    // =========================
    // HAPUS GALERI
    // =========================


    Route::delete(
        '/galeri/{id}',
        [GaleriController::class, 'destroy']
    )
        ->name('galeri.destroy');


    // =========================
// KONTAK WISATA
// =========================

    Route::get(
        '/wisata/{id}/kontak',
        [KontakController::class, 'index']
    )
        ->name('kontak.index');

    Route::get(
        '/wisata/{id}/kontak/create',
        [KontakController::class, 'create']
    )
        ->name('kontak.create');


    // =========================
// KONTAK UMKM
// =========================

    Route::get(
        '/umkm/{id}/kontak',
        [KontakController::class, 'indexUmkm']
    )
        ->name('kontak.umkm.index');

    Route::get(
        '/umkm/{id}/kontak/create',
        [KontakController::class, 'createUmkm']
    )
        ->name('kontak.umkm.create');


    // =========================
// SIMPAN KONTAK
// =========================

    Route::post(
        '/kontak',
        [KontakController::class, 'store']
    )
        ->name('kontak.store');


    // =========================
// EDIT KONTAK
// =========================

    Route::get(
        '/kontak/{id}/edit',
        [KontakController::class, 'edit']
    )
        ->name('kontak.edit');

    Route::put(
        '/kontak/{id}',
        [KontakController::class, 'update']
    )
        ->name('kontak.update');


    // =========================
// HAPUS KONTAK
// =========================

    Route::delete(
        '/kontak/{id}',
        [KontakController::class, 'destroy']
    )
        ->name('kontak.destroy');

});


require __DIR__ . '/auth.php';
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HutanController;
use App\Http\Controllers\RissController;
use App\Http\Controllers\TuguController;
use App\Http\Controllers\PasarController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KebijakanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdgelController;
use App\Http\Controllers\AdkonController;
use App\Http\Controllers\AdproController;
use App\Http\Controllers\AdkanController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Adminkantor\AdminHutanController;
use App\Http\Controllers\Adminkantor\AdminStroberiController;
use App\Http\Controllers\Adminkantor\AdminTuguController;
use App\Http\Controllers\Adminkantor\AdminPasarController;

Route::get('/', function () {
    return view('layout.home');
});
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/wisata', [WisataController::class,'index'])->name('wisata');
Route::get('/kelurahan', [KelurahanController::class,'index'])->name('kelurahan');
Route::get('/galeri', [GaleriController::class,'index'])->name('galeri');
Route::get('/profile', [ProfileController::class,'index'])->name('profile');
Route::get('/hutan', [HutanController::class,'index'])->name('hutan');
Route::get('/riss', [RissController::class,'index'])->name('riss');
Route::get('/tugu', [TuguController::class,'index'])->name('tugu');
Route::get('/pasar', [PasarController::class,'index'])->name('pasar'); 
Route::get('/kontak', [KontakController::class,'index'])->name('kontak'); 
Route::get('/layanan', [LayananController::class,'index'])->name('layanan'); 
Route::get('/kebijakan', [KebijakanController::class,'index'])->name('kebijakan'); 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('beranda_foto.create');
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('beranda_foto.store');
    Route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit'])->name('beranda_foto.edit');
    Route::put('/dashboard/{id}', [DashboardController::class, 'update'])->name('beranda_foto.update');
    Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('beranda_foto.destroy');
    
    Route::get('/layouts.adgel', [AdgelController::class, 'index'])->name('layouts.adgel');
    Route::get('/layouts.adgel/create', [AdgelController::class, 'create'])->name('galeri_foto.create');
    Route::post('/layouts.adgel', [AdgelController::class, 'store'])->name('galeri_foto.store');
    Route::get('/layouts.adgel/{id}/edit', [AdgelController::class, 'edit'])->name('galeri_foto.edit'); 
    Route::put('/layouts.adgel/{id}', [AdgelController::class, 'update'])->name('galeri_foto.update');
    Route::delete('/layouts.adgel/{id}', [AdgelController::class, 'destroy'])->name('galeri_foto.destroy');
    Route::get('/adgel', [AdgelController::class,'index'])->name('adgel'); 

    Route::get('/layouts.adkon', [AdkonController::class, 'index'])->name('layouts.adkon');
    Route::get('/layouts.adkon/create', [AdkonController::class, 'create'])->name('kontak_pesan.create');
    Route::post('/layouts.adkon', [AdkonController::class, 'store'])->name('kontak_pesan.store');
    Route::get('/layouts.adkon/{id}/edit', [AdkonController::class, 'edit'])->name('kontak_pesan.edit');
    Route::put('/layouts.adkon/{id}', [AdkonController::class, 'update'])->name('kontak_pesan.update');
    Route::delete('/layouts.adkon/{id}', [AdkonController::class, 'destroy'])->name('kontak_pesan.destroy');
    
    Route::get('/adkon', [AdkonController::class,'index'])->name('adkon'); 

    Route::get('/adpro', [AdproController::class,'index'])->name('adpro');
    Route::get('/layouts.adpro', [AdproController::class,'index'])->name('layouts.adpro');
    Route::get('/layouts.adpro/create', [AdproController::class, 'create'])->name('profil_foto.create');
    Route::post('/layouts.adpro', [AdproController::class, 'store'])->name('profil_foto.store');
    Route::get('/layouts.adpro/{id}/edit', [AdproController::class, 'edit'])->name('profil_foto.edit');
    Route::put('/layouts.adpro/{id}', [AdproController::class, 'update'])->name('profil_foto.update');
    Route::delete('/layouts.adpro/{id}', [AdproController::class, 'destroy'])->name('profil_foto.destroy'); 

    Route::get('/adkan', [AdkanController::class,'index'])->name('adkan');
    Route::get('/layouts.adkan', [AdkanController::class,'index'])->name('layouts.adkan');
    Route::get('/layouts.adkan/create', [AdkanController::class, 'create'])->name('kantor_foto.create');
    Route::post('/layouts.adkan', [AdkanController::class, 'store'])->name('kantor_foto.store');
    Route::get('/layouts.adkan/{id}/edit', [AdkanController::class, 'edit'])->name('kantor_foto.edit');
    Route::put('/layouts.adkan/{id}', [AdkanController::class, 'update'])->name('kantor_foto.update');
    Route::delete('/layouts.adkan/{id}', [AdkanController::class, 'destroy'])->name('kantor_foto.destroy'); 


    Route::get('/admin/hutan', [AdminHutanController::class, 'index'])->name('layouts.kantor.adminhutan');
    Route::prefix('kantor/adminhutan')->group(function () {
        Route::get('/', [AdminHutanController::class, 'index'])->name('kantor.adminhutan'); // Menampilkan daftar hutan
        Route::get('/create', [AdminHutanController::class, 'create'])->name('kantor.hutan_foto.create'); // Form tambah
        Route::post('/store', [AdminHutanController::class, 'store'])->name('kantor.hutan_foto.store'); // Simpan data
        Route::get('/{hutan}', [AdminHutanController::class, 'show'])->name('kantor.hutan_foto.show'); // Detail data
        Route::get('/{hutan}/edit', [AdminHutanController::class, 'edit'])->name('kantor.hutan_foto.edit'); // Form edit
        Route::put('/{hutan}', [AdminHutanController::class, 'update'])->name('kantor.hutan_foto.update'); // Update data
        Route::delete('/{hutan}', [AdminHutanController::class, 'destroy'])->name('kantor.hutan_foto.destroy'); // Hapus data
    });

    Route::get('/admin/stroberi', [AdminStroberiController::class, 'index'])->name('layouts.kantor.adminstroberi');
    Route::prefix('kantor/adminstroberi')->group(function () {
        Route::get('/', [AdminStroberiController::class, 'index'])->name('kantor.adminstroberi'); // Menampilkan daftar hutan
        Route::get('/create', [AdminStroberiController::class, 'create'])->name('kantor.stroberi_foto.create'); // Form tambah
        Route::post('/store', [AdminStroberiController::class, 'store'])->name('kantor.stroberi_foto.store'); // Simpan data
        Route::get('/{stroberi}', [AdminStroberiController::class, 'show'])->name('kantor.stroberi_foto.show'); // Detail data
        Route::get('/{stroberi}/edit', [AdminStroberiController::class, 'edit'])->name('kantor.stroberi_foto.edit'); // Form edit
        Route::put('/{stroberi}', [AdminStroberiController::class, 'update'])->name('kantor.stroberi_foto.update'); // Update data
        Route::delete('/{stroberi}', [AdminStroberiController::class, 'destroy'])->name('kantor.stroberi_foto.destroy'); // Hapus data
    });

    Route::get('/admin/tugu', [AdminTuguController::class, 'index'])->name('layouts.kantor.admintugu');
    Route::prefix('kantor/admintugu')->group(function () {
        Route::get('/', [AdminTuguController::class, 'index'])->name('kantor.admintugu'); // Menampilkan daftar hutan
        Route::get('/create', [AdminTuguController::class, 'create'])->name('kantor.tugu_foto.create'); // Form tambah
        Route::post('/store', [AdminTuguController::class, 'store'])->name('kantor.tugu_foto.store'); // Simpan data
        Route::get('/{tugu}', [AdminTuguController::class, 'show'])->name('kantor.tugu_foto.show'); // Detail data
        Route::get('/{tugu}/edit', [AdminTuguController::class, 'edit'])->name('kantor.tugu_foto.edit'); // Form edit
        Route::put('/{tugu}', [AdminTuguController::class, 'update'])->name('kantor.tugu_foto.update'); // Update data
        Route::delete('/{tugu}', [AdminTuguController::class, 'destroy'])->name('kantor.tugu_foto.destroy'); // Hapus data
    });

    Route::get('/admin/pasar', [AdminPasarController::class, 'index'])->name('layouts.kantor.adminpasar');
    Route::prefix('kantor/adminpasar')->group(function () {
        Route::get('/', [AdminPasarController::class, 'index'])->name('kantor.adminpasar'); // Menampilkan daftar hutan
        Route::get('/create', [AdminPasarController::class, 'create'])->name('kantor.pasar_foto.create'); // Form tambah
        Route::post('/store', [AdminPasarController::class, 'store'])->name('kantor.pasar_foto.store'); // Simpan data
        Route::get('/{pasar}', [AdminPasarController::class, 'show'])->name('kantor.pasar_foto.show'); // Detail data
        Route::get('/{pasar}/edit', [AdminPasarController::class, 'edit'])->name('kantor.pasar_foto.edit'); // Form edit
        Route::put('/{pasar}', [AdminPasarController::class, 'update'])->name('kantor.pasar_foto.update'); // Update data
        Route::delete('/{pasar}', [AdminPasarController::class, 'destroy'])->name('kantor.pasar_foto.destroy'); // Hapus data
    });
    
});

Route::post('/kontak_pesan', [KontakController::class, 'store'])->name('kontak_pesan.store');
Route::get('/admin/kontak_pesan', [KontakController::class, 'index'])->name('layout.kontak')->middleware('auth');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [KelurahanController::class, 'index'])->name('kelurahan');
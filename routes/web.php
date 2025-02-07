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
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DashboardController;

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('images', ImageController::class);
Route::get('/dashboard', [ImageController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
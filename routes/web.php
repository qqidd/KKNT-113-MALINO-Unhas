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
use Illuminate\Support\Facades\Route;

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
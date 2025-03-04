<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tugu;

class TuguController extends Controller
{
    public function index()
    {
    // Ambil data untuk bagian pertama (misal: kategori "profil")
    $tugus1 = Tugu::where('kategori', 'profil')->get();

    // Ambil data untuk bagian kedua (misal: kategori "wisata")
    $tugus2 = Tugu::where('kategori', 'wisata')->get();

    // Kirim data ke Blade viewA
    return view('layout.tugu', compact('tugus1', 'tugus2'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stroberi;

class RissController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Ambil data untuk bagian pertama (misal: kategori "profil")
    $stroberis1 = Stroberi::where('kategori', 'profil')->get();

    // Ambil data untuk bagian kedua (misal: kategori "wisata")
    $stroberis2 = Stroberi::where('kategori', 'wisata')->get();

    // Kirim data ke Blade viewA
    return view('layout.riss', compact('stroberis1', 'stroberis2'));
    }
}
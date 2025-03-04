<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pasar;

class PasarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Ambil data untuk bagian pertama (misal: kategori "profil")
    $pasars1 = Pasar::where('kategori', 'profil')->get();

    // Ambil data untuk bagian kedua (misal: kategori "wisata")
    $pasars2 = Pasar::where('kategori', 'wisata')->get();

    // Kirim data ke Blade viewA
    return view('layout.pasar', compact('pasars1', 'pasars2'));
    }
}
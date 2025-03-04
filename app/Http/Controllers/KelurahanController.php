<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kantor;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Ambil data untuk bagian pertama (misal: kategori "profil")
    $kantors1 = Kantor::where('kategori', 'GambarProfil')->get();

     // Ambil data untuk bagian kedua (misal: kategori wisata)
     $kantors2 = Kantor::whereIn('kategori', ['GambarHutan', 'GambarRiss', 'GambarTugu', 'GambarPasar'])
     ->get()
     ->map(function ($wisata) {
         // Tentukan route berdasarkan kategori
         $wisata->route = match ($wisata->kategori) {
             'GambarHutan' => route('hutan'),
             'GambarRiss' => route('riss'),
             'GambarTugu' => route('tugu'),
             'GambarPasar' => route('pasar'),
             default => route('home'), // Fallback jika kategori tidak dikenali
         };
         return $wisata;
     });

    // Kirim data ke Blade viewA
    return view('layout.kelurahan', compact('kantors1', 'kantors2'));
    }

}
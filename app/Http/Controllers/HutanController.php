<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hutan;

class HutanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Ambil data untuk bagian pertama (misal: kategori "profil")
    $hutans1 = Hutan::where('kategori', 'profil')->get();

    // Ambil data untuk bagian kedua (misal: kategori "wisata")
    $hutans2 = Hutan::where('kategori', 'wisata')->get();

    // Kirim data ke Blade viewA
    return view('layout.hutan', compact('hutans1', 'hutans2'));
    }

}
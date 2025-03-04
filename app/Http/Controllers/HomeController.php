<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Ambil data untuk bagian pertama (misal: kategori "profil")
    $contents1 = Content::where('kategori', 'profil')->get();

    // Ambil data untuk bagian kedua (misal: kategori "wisata")
    $contents2 = Content::where('kategori', 'wisata')->get();

    // Kirim data ke Blade viewA
    return view('layout.home', compact('contents1', 'contents2'));
    }

}
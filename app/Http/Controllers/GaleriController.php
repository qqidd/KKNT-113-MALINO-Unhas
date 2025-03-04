<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GaleriFoto;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = GaleriFoto::query();
    
        // Cek apakah ada input pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%");
        }
    
        $adminFoto = $query->get();
        $adminFoto = GaleriFoto::all(); // Ambil semua gambar dari database
    
        return view('layout.galeri', compact('adminFoto'));
    }    
}
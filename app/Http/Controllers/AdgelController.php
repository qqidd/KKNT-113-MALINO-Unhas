<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriFoto;

class AdgelController extends Controller
{
    public function index(Request $request)
    {
        $query = GaleriFoto::query();
    
        // Cek apakah ada pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%");
        }
    
        $adminFoto = $query->get();
        $adminFoto = GaleriFoto::all(); // Ambil semua gambar dari database

        return view('layouts.adgel', compact('adminFoto'));
    }
    
    public function create()
    {
        return view('layouts.galeri_foto_create');
    }

    // Menyimpan data foto baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Menyimpan gambar ke folder public/images
        $fotoPath = $request->file('foto')->store('images', 'public');

        // Menyimpan data ke database
        GaleriFoto::create([
            'foto' => $fotoPath,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('layouts.adgel');
    }
    // Menampilkan form untuk edit foto
    public function edit($id)
    {
        $foto = GaleriFoto::findOrFail($id);
        return view('layouts.galeri_foto_edit', compact('foto'));
    }

    // Memperbarui data foto
    public function update(Request $request, $id)
    {
        $foto = GaleriFoto::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Jika ada foto baru, simpan di folder public/images
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('images', 'public');
            $foto->foto = $fotoPath;
        }

        // Update data lainnya
        $foto->nama = $request->nama;
        $foto->deskripsi = $request->deskripsi;

        $foto->save();

        return redirect()->route('layouts.adgel');
    }

    // Menghapus data foto
    public function destroy($id)
    {
        $foto = GaleriFoto::findOrFail($id);
        $foto->delete(); // Menghapus data dari database

        // Menghapus file gambar dari folder public/images
        unlink(storage_path('app/public/' . $foto->foto));

        return redirect()->route('layouts.adgel');
    }
    
    
}   
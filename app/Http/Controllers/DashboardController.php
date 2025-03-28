<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BerandaFoto;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = BerandaFoto::query();
    
        // Cek apakah ada pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                  ->orWhere('link_maps', 'LIKE', "%{$search}%"); // Tambahkan pencarian link
        }
    
        $berandaFotos = $query->get();
    
        return view('dashboard', compact('berandaFotos'));
    }
    
    public function create()
    {
        return view('layouts.beranda_foto_create');
    }

    // Menyimpan data foto baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'link_maps' => 'required|url', // Tambahkan validasi URL
        ]);

        // Menyimpan gambar ke folder public/images
        $fotoPath = $request->file('foto')->store('images', 'public');

        // Menyimpan data ke database
        BerandaFoto::create([
            'foto' => $fotoPath,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'link_maps' => $request->link_maps, // Simpan link
        ]);

        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form untuk edit foto
    public function edit($id)
    {
        $foto = BerandaFoto::findOrFail($id);
        return view('layouts.beranda_foto_edit', compact('foto'));
    }

    // Memperbarui data foto
    public function update(Request $request, $id)
    {
        $foto = BerandaFoto::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'link_maps' => 'required|url', // Tambahkan validasi URL
        ]);

        // Jika ada foto baru, simpan di folder public/images
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('images', 'public');
            $foto->foto = $fotoPath;
        }

        // Update data lainnya
        $foto->nama = $request->nama;
        $foto->deskripsi = $request->deskripsi;
        $foto->link_maps = $request->link_maps; // Simpan link yang diperbarui

        $foto->save();

        return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus data foto
    public function destroy($id)
    {
        $foto = BerandaFoto::findOrFail($id);
        $foto->delete(); // Menghapus data dari database

        // Menghapus file gambar dari folder public/images
        unlink(storage_path('app/public/' . $foto->foto));

        return redirect()->route('dashboard')->with('deleted', 'Data berhasil dihapus!');
    }
}
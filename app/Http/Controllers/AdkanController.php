<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kantor;

class AdkanController extends Controller
{
    public function index(Request $request)
    {
        $query = Kantor::query();
    
        // Cek apakah ada pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                  ->orWhere('kategori', 'LIKE', "%{$search}%");
        }
    
        $kantors = $query->get();

        return view('layouts.adkan', compact('kantors'));
    }
    
    public function create()
    {
        return view('layouts.kantor_foto_create');
    }

    // Menyimpan data foto baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
        ]);

        // Menyimpan gambar ke folder public/images
        $fotoPath = $request->file('foto')->store('images', 'public');

        // Menyimpan data ke database
        Kantor::create([
            'foto' => $fotoPath,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('layouts.adkan')->with('success', 'Data berhasil ditambahkan!');
    }
    // Menampilkan form untuk edit foto
    public function edit($id)
    {
        $foto = Kantor::findOrFail($id);
        return view('layouts.kantor_foto_edit', compact('foto'));
    }

    // Memperbarui data foto
    public function update(Request $request, $id)
    {
        $foto = Kantor::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
        ]);

        // Jika ada foto baru, simpan di folder public/images
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('images', 'public');
            $foto->foto = $fotoPath;
        }

        // Update data lainnya
        $foto->nama = $request->nama;
        $foto->deskripsi = $request->deskripsi;
        $foto->kategori = $request->kategori;

        $foto->save();

        return redirect()->route('layouts.adkan')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus data foto
    public function destroy($id)
    {
        $foto = Kantor::findOrFail($id);
        unlink(storage_path('app/public/' . $foto->foto)); // Hapus file dari storage
        $foto->delete(); // Hapus dari database
    
        return redirect()->route('layouts.adkan')->with('deleted', 'Data berhasil dihapus!');
    }
}
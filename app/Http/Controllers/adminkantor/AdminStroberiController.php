<?php

namespace App\Http\Controllers\Adminkantor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Stroberi;

class AdminStroberiController extends Controller
{
    // Menampilkan semua data
    public function index(Request $request)
    {
        $query = Stroberi::query();
    
        // Cek apakah ada pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                  ->orWhere('kategori', 'LIKE', "%{$search}%");
        }
    
        $stroberis = $query->get();
        return view('layouts.kantor.adminstroberi', compact('stroberis'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('layouts.kantor.stroberi_foto_create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        // Upload foto ke storage/foto (dalam disk 'public')
        $fotoPath = $request->file('foto')->store('foto', 'public');
    
        // Simpan data ke database dengan path yang benar
        Stroberi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $fotoPath, // Path yang benar untuk digunakan di asset()
        ]);
    
        return redirect()->route('layouts.kantor.adminstroberi')->with('success', 'Data berhasil disimpan.');
    }       

    // Menampilkan detail data
    public function show(Stroberi $stroberi)
    {
        return view('layouts.kantor.stroberi_foto_show', compact('stroberi'));
    }

    // Menampilkan form edit data
    public function edit(Stroberi $stroberi)
    {
        return view('layouts.kantor.stroberi_foto_edit', compact('stroberi'));
    }

    // Mengupdate data
    public function update(Request $request, Stroberi $stroberi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Jika ada foto baru, upload dan hapus foto lama
        if ($request->hasFile('foto')) {
            Storage::delete($stroberi->foto);
            $fotoPath = $request->file('foto')->store('public', 'foto');
            $stroberi->foto = $fotoPath;
        }

        // Update data
        $stroberi->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $stroberi->foto, // Menyimpan foto baru jika ada
        ]);

        return redirect()->route('layouts.kantor.adminstroberi')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy(Stroberi $stroberi)
    {
        Storage::delete($stroberi->foto); // Hapus foto
        $stroberi->delete();

        return redirect()->route('layouts.kantor.adminstroberi')->with('deleted', 'Data berhasil dihapus.');
    }
}
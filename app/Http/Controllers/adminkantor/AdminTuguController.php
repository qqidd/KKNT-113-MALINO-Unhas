<?php

namespace App\Http\Controllers\Adminkantor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Tugu;

class AdminTuguController extends Controller
{
    // Menampilkan semua data
    public function index(Request $request)
    {
        $query = Tugu::query();
    
        // Cek apakah ada pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                  ->orWhere('kategori', 'LIKE', "%{$search}%");
        }
    
        $tugus = $query->get();
        return view('layouts.kantor.admintugu', compact('tugus'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('layouts.kantor.tugu_foto_create');
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
        $fotoPath = $request->file('foto')->store('images', 'public');
    
        // Simpan data ke database dengan path yang benar
        Tugu::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $fotoPath, // Path yang benar untuk digunakan di asset()
        ]);
    
            return redirect()->route('layouts.kantor.admintugu')->with('success', 'Data berhasil disimpan.');
    }       

    // Menampilkan detail data
    public function show(Tugu $tugu)
    {
        return view('layouts.kantor.tugu_foto_show', compact('tugu'));
    }

    // Menampilkan form edit data
    public function edit(Tugu $tugu)
    {
        return view('layouts.kantor.tugu_foto_edit', compact('tugu'));
    }

    // Mengupdate data
    public function update(Request $request, Tugu $tugu)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Jika ada foto baru, upload dan hapus foto lama
        if ($request->hasFile('foto')) {
            Storage::delete($tugu->foto);
            $fotoPath = $request->file('foto')->store('public/foto');
            $tugu->foto = $fotoPath;
        }

        // Update data
        $tugu->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $tugu->foto, // Menyimpan foto baru jika ada
        ]);

        return redirect()->route('layouts.kantor.admintugu')->with('success', 'Data berhasil diperbarui.');
    }
    // Menghapus data
    public function destroy(Tugu $tugu)
    {
        Storage::delete($tugu->foto); // Hapus foto
        $tugu->delete();

        return redirect()->route('layouts.kantor.admintugu')->with('deleted', 'Data berhasil dihapus.');
    }
}
<?php

namespace App\Http\Controllers\Adminkantor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Hutan;

class AdminHutanController extends Controller
{
    // Menampilkan semua data
    public function index(Request $request)
    {
        $query = Hutan::query();
    
        // Cek apakah ada pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                  ->orWhere('kategori', 'LIKE', "%{$search}%");
        }
    
        $hutans = $query->get();
        return view('layouts.kantor.adminhutan', compact('hutans'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('layouts.kantor.hutan_foto_create');
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
        Hutan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $fotoPath, // Path yang benar untuk digunakan di asset()
        ]);
    
        return redirect()->route('layouts.kantor.adminhutan')->with('success', 'Data berhasil disimpan.');
    }       

    // Menampilkan detail data
    public function show(Hutan $hutan)
    {
        return view('layouts.kantor.hutan_foto_show', compact('hutan'));
    }

    // Menampilkan form edit data
    public function edit(Hutan $hutan)
    {
        return view('layouts.kantor.hutan_foto_edit', compact('hutan'));
    }

    // Mengupdate data
    public function update(Request $request, Hutan $hutan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Jika ada foto baru, upload dan hapus foto lama
        if ($request->hasFile('foto')) {
            Storage::delete($hutan->foto);
            $fotoPath = $request->file('foto')->store('public','foto');
            $hutan->foto = $fotoPath;
        }

        // Update data
        $hutan->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $hutan->foto, // Menyimpan foto baru jika ada
        ]);

        return redirect()->route('layouts.kantor.adminhutan')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy(Hutan $hutan)
    {
        Storage::delete($hutan->foto); // Hapus foto
        $hutan->delete();

        return redirect()->route('layouts.kantor.adminhutan')->with('deleted', 'Data berhasil dihapus.');
    }
}
<?php

namespace App\Http\Controllers\Adminkantor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pasar;

class AdminPasarController extends Controller
{
    // Menampilkan semua data
    public function index(Request $request)
    {
        $query = Pasar::query();
    
        // Cek apakah ada pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$search}%")
                  ->orWhere('kategori', 'LIKE', "%{$search}%");
        }
    
        $pasars = $query->get();
        return view('layouts.kantor.adminpasar', compact('pasars'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('layouts.kantor.pasar_foto_create');
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
        Pasar::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $fotoPath, // Path yang benar untuk digunakan di asset()
        ]);
    
        return redirect()->route('layouts.kantor.adminpasar')->with('success', 'Data berhasil disimpan.');
    }       

    // Menampilkan detail data
    public function show(Pasar $pasar)
    {
        return view('layouts.kantor.pasar_foto_show', compact('pasar'));
    }

    // Menampilkan form edit data
    public function edit(Pasar $pasar)
    {
        return view('layouts.kantor.pasar_foto_edit', compact('pasar'));
    }

    // Mengupdate data
    public function update(Request $request, Pasar $pasar)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Jika ada foto baru, upload dan hapus foto lama
        if ($request->hasFile('foto')) {
            Storage::delete($pasar->foto);
            $fotoPath = $request->file('foto')->store('foto', 'public');
            $pasar->foto = $fotoPath;
        }

        // Update data
        $pasar->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $pasar->foto, // Menyimpan foto baru jika ada
        ]);

        return redirect()->route('layouts.kantor.adminpasar')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy(Pasar $pasar)
    {
        Storage::delete($pasar->foto); // Hapus foto
        $pasar->delete();

        return redirect()->route('layouts.kantor.adminpasar')->with('deleted', 'Data berhasil dihapus.');
    }
}
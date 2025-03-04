<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KontakPesan;   

class AdkonController extends Controller
{
    public function index(Request $request)
    {
        $query = KontakPesan::query();

        // Cek apakah ada input pencarian
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('nama_lengkap', 'LIKE', "%$search%")
                  ->orWhere('email', 'LIKE', "%$search%")
                  ->orWhere('subjek', 'LIKE', "%$search%")
                  ->orWhere('isi_pesan', 'LIKE', "%$search%");
        }
    
        $pesan = $query->get();
        return view('layouts.adkon', compact('pesan'));
    }
    public function create()
    {
        return view('layouts.kontak_pesan_create'); // Sesuaikan dengan path view Anda
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:pesan,email',
            'subjek' => 'required|string|max:255',
            'isi_pesan' => 'required|string',
        ]);
    
        try {
            KontakPesan::create($request->only(['nama_lengkap', 'email', 'subjek', 'isi_pesan']));
    
            // Cegah double submit
            $request->session()->regenerateToken();
    
            return redirect()->route('kontak_pesan.create')->with('success', 'Pesan berhasil ditambahkan!');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) { // Kode error duplikasi entry
                return redirect()->back()->withInput()->with('error', 'Email sudah digunakan! Gunakan email lain.');
            }
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan! Coba lagi.');
        }
    }
    
    public function edit($id)
    {
        $pesan = KontakPesan::findOrFail($id);
        return view('layouts.kontak_pesan_edit', compact('pesan'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:pesan,email,' . $id,
            'subjek' => 'required|string|max:255',
            'isi_pesan' => 'required|string',
        ]);

        $pesan = KontakPesan::findOrFail($id);
        $pesan->update($request->all());    

        return redirect()->route('kontak_pesan.create')->with('success', 'Pesan berhasil diperbarui!');
    }

    // Hapus data
    public function destroy($id)
    {
        KontakPesan::destroy($id);
        return redirect()->route('layouts.adkon')->with('success', 'Pesan berhasil dihapus!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KontakPesan;

class KontakController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'isi_pesan' => 'required',
        ],[
            'nama_lengkap.required' => 'Wajib isi nama lengkap.',
            'email.required' => 'Wajib isi email.',
            'email.email' => 'Format email tidak valid.',
            'subjek.required' => 'Wajib isi subjek.',
            'isi_pesan.required' => 'Wajib isi pesan.',
        ]);
    
        try {
            KontakPesan::create($request->all());
            return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim pesan.');
        }
    }

    public function index()
    {
        $pesan = KontakPesan::latest()->get();
        return view('layout.kontak', compact('pesan'));
    }
}
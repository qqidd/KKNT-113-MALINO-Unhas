<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $data = Image::paginate(5); // ✅ GUNAKAN paginate()
        return view('dashboard', compact('data'));
    }


    // Menampilkan form tambah gambar
    public function create()
    {
        return view('images.create');
    }

    // Menyimpan data gambar baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url'
        ]);

        Image::create($request->all());

        return redirect()->route('images.index')->with('success', 'Gambar berhasil ditambahkan');
    }

    // Menampilkan form edit gambar
    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    // Mengupdate data gambar di database
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url'
        ]);

        $image->update($request->all());

        return redirect()->route('images.index')->with('success', 'Gambar berhasil diperbarui');
    }

    // Menghapus gambar dari database
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('images.index')->with('success', 'Gambar berhasil dihapus');
    }
}
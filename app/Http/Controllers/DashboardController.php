<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Pastikan Model Image ada

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data dari database dengan paginate()
        $data = Image::paginate(10);

        // Kirim data ke view dashboard
        return view('dashboard', compact('data'));
    }
}
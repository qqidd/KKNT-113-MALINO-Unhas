<?php

// app/Models/BerandaFoto.php
namespace App\Models;   

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriFoto extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi (mass assignable)
    protected $table = 'galeri_foto2';
    protected $fillable = ['foto', 'nama', 'deskripsi'];
}
<?php

// app/Models/BerandaFoto.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerandaFoto extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi (mass assignable)
    protected $fillable = ['foto', 'nama', 'deskripsi', 'link_maps'];
}
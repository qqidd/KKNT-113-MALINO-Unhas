<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KontakPesan extends Model
{
    use HasFactory;
    protected $table = 'pesan'; // Nama tabel di database
    protected $fillable = ['nama_lengkap', 'email', 'subjek', 'isi_pesan'];
}
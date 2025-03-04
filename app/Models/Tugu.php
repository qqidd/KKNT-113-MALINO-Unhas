<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugu extends Model
{
    use HasFactory;
    protected $table = 'tugus';
    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'foto',
    ];
}
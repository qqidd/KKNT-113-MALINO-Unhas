<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasar extends Model
{
    use HasFactory;
    protected $table = 'pasars';
    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'foto',
    ];
}
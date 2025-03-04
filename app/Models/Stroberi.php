<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stroberi extends Model
{
    use HasFactory;
    protected $table = 'stroberis';
    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'foto',
    ];
}
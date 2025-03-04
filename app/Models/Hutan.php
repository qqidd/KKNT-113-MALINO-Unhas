<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hutan extends Model
{
    use HasFactory;
    protected $table = 'hutans';
    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'foto',
    ];
}
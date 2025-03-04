<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kantor extends Model
{
    use HasFactory;
    protected $table = 'kantors';
    protected $fillable = ['foto', 'nama','deskripsi','kategori'];
}
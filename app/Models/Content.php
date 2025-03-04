<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    use HasFactory;
    
    protected $table = 'contents';
    protected $fillable = ['foto', 'nama','deskripsi','kategori'];
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kantors', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom ID sebagai primary key
            $table->string('foto'); // Kolom untuk menyimpan foto (path atau nama file)
            $table->string('nama'); // Kolom untuk menyimpan nama
            $table->text('deskripsi'); // Kolom untuk menyimpan deskripsi
            $table->string('kategori'); // Kolom untuk menyimpan kategori
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kantors');
    }
};
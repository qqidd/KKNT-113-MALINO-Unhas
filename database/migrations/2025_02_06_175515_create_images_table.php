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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index(); // Nama gambar (ditambahkan index untuk pencarian cepat)
            $table->text('description')->nullable();
            $table->string('url');            
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images'); // Hapus tabel jika rollback dilakukan
    }
};
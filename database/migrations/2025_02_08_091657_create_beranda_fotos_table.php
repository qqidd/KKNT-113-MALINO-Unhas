<?php

// database/migrations/xxxx_xx_xx_create_beranda_fotos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerandaFotosTable extends Migration
{
    public function up()
    {
        Schema::create('beranda_fotos', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom ID sebagai primary key
            $table->string('foto'); // Kolom untuk menyimpan foto (path atau nama file)
            $table->string('nama'); // Kolom untuk menyimpan nama
            $table->text('deskripsi'); // Kolom untuk menyimpan deskripsi
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('beranda_fotos');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkMapsToBerandaFotos extends Migration
{
    public function up()
    {
        Schema::table('beranda_fotos', function (Blueprint $table) {
            $table->string('link_maps')->nullable()->after('deskripsi'); // Menambahkan kolom link_maps setelah deskripsi
        });
    }

    public function down()
    {
        Schema::table('beranda_fotos', function (Blueprint $table) {
            $table->dropColumn('link_maps'); // Menghapus kolom jika rollback
        });
    }
}
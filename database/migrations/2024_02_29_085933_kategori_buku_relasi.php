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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('kategori_buku_relasi', function (Blueprint $table) {
            $table->integer('KategoriBukuID');
            $table->integer('BukuID');
            $table->integer('KategoriID');
            $table->timestamps();
            $table->primary('KategoriBukuID');
        });
    }
};

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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('namaDepan',50)->nullable();
            $table->string('namaBelakang',50)->nullable();
            $table->string('email',100)->nullable();
            $table->string('jenisKelamin',50)->nullable();
            $table->string('jabatan',50)->nullable();
            $table->string('pekerjaan',50)->nullable();
            $table->string('kataSandi',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};

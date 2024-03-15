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
        Schema::create('koleksi_pribadi', function (Blueprint $table) {
            $table->integer('KoleksiID');
            $table->integer('UserID');
            $table->integer('BukuID');
            $table->timestamps();
            $table->primary('KoleksiID');
        });
    }
};

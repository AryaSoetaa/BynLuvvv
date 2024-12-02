<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('kelaspraktikums', function (Blueprint $table) {
            $table->id();
            $table->string('nama_praktikum');
            $table->string('dosen');
            $table->string('asisten_praktikum');
            $table->string('kepala_laboratorium');
            $table->date('tanggal_dibuka');
            $table->date('tanggal_ditutup');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('kelaspraktikums');
    }
};

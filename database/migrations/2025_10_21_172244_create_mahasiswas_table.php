<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Gunakan nama tabel plural 'mahasiswas'
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10)->unique();
            $table->string('nama');
            $table->string('jurusan');
            $table->integer('angkatan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // Sesuaikan juga di sini
        Schema::dropIfExists('mahasiswas');
    }
};
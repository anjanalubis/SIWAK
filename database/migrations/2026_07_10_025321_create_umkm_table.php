<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();

            // Relasi
            $table->foreignId('kategori_id')
                  ->constrained('kategori')
                  ->cascadeOnDelete();

            $table->foreignId('kecamatan_id')
                  ->constrained('kecamatan')
                  ->cascadeOnDelete();

            // Data UMKM
            $table->string('nama_umkm');
            $table->string('pemilik');
            $table->text('deskripsi');
            $table->text('alamat');

            // Lokasi
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);

            // Informasi
            $table->string('gambar_cover');
            $table->string('jam_operasional');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
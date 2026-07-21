<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();

            // Relasi ke kategori
            $table->foreignId('kategori_id')
                  ->constrained('kategori')
                  ->cascadeOnDelete();

            // Relasi ke kecamatan
            $table->foreignId('kecamatan_id')
                  ->constrained('kecamatan')
                  ->cascadeOnDelete();

            // Data wisata
            $table->string('nama_wisata');
            $table->text('deskripsi');
            $table->text('alamat');

            // Koordinat
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);

            // Informasi wisata
            $table->string('gambar_cover');
            $table->decimal('harga_tiket',10,2);
            $table->string('jam_operasional');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
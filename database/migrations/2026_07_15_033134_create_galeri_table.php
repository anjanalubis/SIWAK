<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();

            $table->foreignId('wisata_id')
                  ->nullable()
                  ->constrained('wisata')
                  ->nullOnDelete();

            $table->foreignId('umkm_id')
                  ->nullable()
                  ->constrained('umkm')
                  ->nullOnDelete();

            $table->string('judul');
            $table->string('file');
            $table->enum('tipe', ['foto', 'video']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('wisata', function (Blueprint $table) {
            $table->dropColumn([
                'harga_tiket',
                'jam_operasional'
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('wisata', function (Blueprint $table) {
            $table->decimal('harga_tiket',10,2)->nullable();
            $table->string('jam_operasional')->nullable();
        });
    }
};
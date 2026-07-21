<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('umkm', function (Blueprint $table) {

            $table->string('jam_weekday')->nullable();
            $table->string('jam_weekend')->nullable();

            $table->integer('harga_mulai')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('umkm', function (Blueprint $table) {

            $table->dropColumn([
                'jam_weekday',
                'jam_weekend',
                'harga_mulai'
            ]);

        });
    }
};

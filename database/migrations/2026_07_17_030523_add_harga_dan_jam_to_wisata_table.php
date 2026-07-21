<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('wisata', function ($table) {
            $table->integer('harga_weekday')->nullable();
            $table->integer('harga_weekend')->nullable();
            $table->string('jam_weekday')->nullable();
            $table->string('jam_weekend')->nullable();
        });
    }

    public function down()
    {
        Schema::table('wisata', function ($table) {
            $table->dropColumn([
                'harga_weekday',
                'harga_weekend',
                'jam_weekday',
                'jam_weekend'
            ]);
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama lokasi
            $table->text('description')->nullable(); // Deskripsi lokasi
            $table->decimal('latitude', 10, 7); // Kolom latitude
            $table->decimal('longitude', 10, 7); // Kolom longitude

            // Menggunakan DB::raw untuk mendefinisikan kolom POINT
            $table->geometry('geom')->nullable(); // Gunakan geometry untuk mendukung data geospasial

            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
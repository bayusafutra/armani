<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanan_khas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id');
            $table->String("name_makanan");
            $table->String("author");
            $table->String("slug");
            $table->text("deskripsi_makanan");
            $table->String("gambar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makanan_khas');
    }
};

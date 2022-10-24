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
        Schema::create('rumah_adats', function (Blueprint $table) {
            $table->id("id_rumah_adat");
            $table->String("name_rumah_adat");
            $table->String("author");
            $table->String("slug");
            $table->text("deskripsi_rumah_adat");
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
        Schema::dropIfExists('rumah_adats');
    }
};

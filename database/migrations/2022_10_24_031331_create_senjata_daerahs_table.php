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
        Schema::create('senjata_daerahs', function (Blueprint $table) {
            $table->id("id_senjata");
            $table->String("name_senjata");
            $table->String("author");
            $table->String("slug");
            $table->text("deskripsi_senjata");
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
        Schema::dropIfExists('senjata_daerahs');
    }
};

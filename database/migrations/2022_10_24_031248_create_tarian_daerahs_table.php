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
        Schema::create('tarian_daerahs', function (Blueprint $table) {
            $table->id("id_tarian");
            $table->String("name_tarian");
            $table->String("author");
            $table->String("slug");
            $table->text("deskripsi_tarian");
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
        Schema::dropIfExists('tarian_daerahs');
    }
};

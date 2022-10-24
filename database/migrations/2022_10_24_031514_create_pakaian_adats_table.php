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
        Schema::create('pakaian_adats', function (Blueprint $table) {
            $table->id("id_pakaian");
            $table->String("name_pakaian");
            $table->String("author");
            $table->String("slug");
            $table->text("deskripsi_pakaian");
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
        Schema::dropIfExists('pakaian_adats');
    }
};

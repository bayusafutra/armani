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
            $table->foreignId("user_id");
            $table->foreignId('province_id');
            $table->String("name_makanan");
            $table->String("slug")->unique();
            $table->text("deskripsi_makanan")->nullable();
            $table->String("gambar")->nullable();
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

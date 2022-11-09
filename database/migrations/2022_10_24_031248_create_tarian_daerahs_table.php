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
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId('province_id');
            $table->String("name_tarian");
            $table->String("slug")->unique();
            $table->text("deskripsi_tarian")->nullable();
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
        Schema::dropIfExists('tarian_daerahs');
    }
};

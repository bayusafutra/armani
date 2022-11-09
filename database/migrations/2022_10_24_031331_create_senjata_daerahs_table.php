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
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId('province_id');
            $table->String("name_senjata");
            $table->String("slug")->unique();
            $table->text("deskripsi_senjata")->nullable();
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
        Schema::dropIfExists('senjata_daerahs');
    }
};

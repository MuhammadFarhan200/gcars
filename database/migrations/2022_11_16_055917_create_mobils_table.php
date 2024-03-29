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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_merek');
            $table->string('slug')->unique();
            $table->string('tipe');
            $table->year('tahun_keluar');
            $table->string('warna');
            $table->text('deskripsi');
            $table->bigInteger('harga');
            $table->enum('status', ['tersedia', 'sold out']);
            $table->timestamps();

            $table->foreign('id_merek')->references('id')->on('mereks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobils');
    }
};

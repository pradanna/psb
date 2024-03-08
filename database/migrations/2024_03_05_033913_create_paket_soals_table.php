<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paket_soals', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->string('nama');
            $table->text('gambar')->default(null)->nullable();
            $table->bigInteger('tahun_ajaran_id')->unsigned();
            $table->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajarans');
            $table->enum('status',['menunggu','siap','selesai'])->default('menunggu');
            $table->integer('durasi');
            $table->dateTime('waktu_pengerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_soals');
    }
};

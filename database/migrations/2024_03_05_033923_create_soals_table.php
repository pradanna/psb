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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('paket_soal_id')->unsigned();
            $table->foreign('paket_soal_id')->references('id')->on('paket_soals');
            $table->text('gambar_soal')->default(null)->nullable();
            $table->text('soal');
            $table->text('pilihan_1');
            $table->text('pilihan_2');
            $table->text('pilihan_3');
            $table->text('pilihan_4');
            $table->text('jawaban_benar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};

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
        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('registrant_id')->unsigned();
            $table->bigInteger('soal_id')->unsigned();
            $table->integer('jawaban')->default(0);
            $table->timestamps();
            $table->foreign('registrant_id')->references('id')->on('registrants');
            $table->foreign('soal_id')->references('id')->on('soals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawabans');
    }
};

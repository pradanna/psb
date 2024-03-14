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
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['Laki - Laki','Perempuan']);
            $table->text('alamat');
            $table->text('asal_sekolah');
            $table->string('no_hp')->default(null)->nullable();
            $table->text('url_foto');
            $table->text('url_ijazah');
            $table->enum('status_pendaftaran',['diterima','ditolak','menunggu'])->default('menunggu');
            $table->bigInteger('tahun_ajaran_id')->unsigned();
            $table->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajarans');
            $table->enum('status_penerimaan',['diterima','ditolak','menunggu'])->default('menunggu');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_siswas');
    }
};

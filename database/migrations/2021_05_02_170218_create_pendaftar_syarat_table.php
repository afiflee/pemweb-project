<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarSyaratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar_syarat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_syarat_sertifikasi')->constrained('syarat_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_pendaftar')->constrained('pendaftar')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status_verifikasi_syarat');
            $table->string('path_bukti');
            $table->string('verifikasi_asesor');
            $table->text('komentar_asesor');
            $table->string('verified_by');
            $table->date('verified_at');
            $table->string('created_by');
            $table->timestamps();
            $table->string('edited_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar_syarat');
    }
}

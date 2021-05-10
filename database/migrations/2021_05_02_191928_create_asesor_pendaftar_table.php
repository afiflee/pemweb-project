<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorPendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesor_pendaftar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_asesor_jenis_sertifikasi')->constrained('asesor_jenis_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_pendaftar')->constrained('pendaftar')->onUpdate('cascade')->onDelete('cascade');
            $table->string('hasil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesor_pendaftar');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorJenisSertifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesor_jenis_sertifikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_asesor')->constrained('asesor')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_ref_jenis_sertifikasi')->constrained('ref_jenis_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal_awal_berlaku');
            $table->date('tanggal_akhir_berlaku');
            $table->integer('no_sertifikat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesor_jenis_sertifikasi');
    }
}

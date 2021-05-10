<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitKompetensiSertifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_kompetensi_sertifikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_ref_jenis_sertifikasi')->constrained('ref_jenis_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_ref_kompetensi')->constrained('ref_unit_kompetensi')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('is_aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_kompetensi_sertifikasi');
    }
}

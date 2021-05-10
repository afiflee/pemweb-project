<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_penawaran_sertifikasi')->constrained('penawaran_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_asesi')->constrained('asesi')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status_akhir_sertifikasi');
            $table->date('tanggal_status_akhir');
            $table->string('created_by');
            $table->timestamps();
            $table->string('edited_by');
            $table->string('status_pendaftaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}

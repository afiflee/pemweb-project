<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenawaranSertifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawaran_sertifikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_ref_jenis_sertifikasi')->constrained('ref_jenis_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->text('deskripsi_penawaran');
            $table->year('periode');
            $table->string('created_by');
            $table->timestamps();
            $table->string('edited_by');
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
        Schema::dropIfExists('penawaran_sertifikasi');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_penawaran_sertifikasi')->constrained('penawaran_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_kegiatan')->constrained('ref_kegiatan')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->string('created_by');
            $table->timestamps();
            $table->boolean('is_show');
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyaratSertifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarat_sertifikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_ref_jenis_sertifikasi')->constrained('ref_jenis_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->text('syarat');
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
        Schema::dropIfExists('syarat_sertifikasi');
    }
}

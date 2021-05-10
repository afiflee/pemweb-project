<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefJenisSertifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_jenis_sertifikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('status_jenis_sertifikasi');
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
        Schema::dropIfExists('ref_jenis_sertifikasi');
    }
}

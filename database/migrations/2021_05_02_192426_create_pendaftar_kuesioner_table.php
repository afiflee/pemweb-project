<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarKuesionerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar_kuesioner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_pendaftar')->constrained('pendaftar')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_kuesioner')->constrained('ref_kuesioner')->onUpdate('cascade')->onDelete('cascade');
            $table->text('jawaban');
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
        Schema::dropIfExists('pendaftar_kuesioner');
    }
}

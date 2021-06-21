<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAsesiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->char('nim',8);
            $table->char('nik', 20);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 10);
            $table->string('id_ref_negara');
            $table->text('alamat');
            $table->string('no_telpon');
            $table->string('email');
            $table->string('kualifikasi_pendidikan');
            $table->string('id_unit')->constrained('unit_kompetensi_sertifikasi')->onUpdate('cascade')->onDelete('cascade');
            $table->string('created_by');
            $table->timestamps();
            $table->string('edited_by');
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesi');
    }
}

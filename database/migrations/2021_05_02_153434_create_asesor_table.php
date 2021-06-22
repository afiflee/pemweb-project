<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->char('nim',8);
            $table->char('nik', 20);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 10);
            $table->text('alamat');
            $table->string('no_telpon');
            $table->string('email');
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
        Schema::dropIfExists('asesor');
    }
}

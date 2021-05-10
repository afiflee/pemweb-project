<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumenAsesmenKompetensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumen_asesmen_kompetensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_ref_unit_kompetensi')->constrained('ref_unit_kompetensi')->onUpdate('cascade')->onDelete('cascade');
            $table->string('instrumen_pertanyaan');
            $table->string('status_instrumen');
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
        Schema::dropIfExists('instrumen_asesmen_kompetensi');
    }
}

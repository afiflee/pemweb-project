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
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
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
            $table->string('id_unit');
            $table->string('created_by');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('edited_by');
            $table->timestamp('edited_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->foreignId('id_user')->constrained('users');
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

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class asesorpendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asesor_pendaftar')->insert(
            array(
                array(
                    'id_asesor_jenis_sertifikasi' => 1,
                    'id_pendaftar' => 1,
                    'hasil' => 'lulus'
                )
            )
        );
    }
}

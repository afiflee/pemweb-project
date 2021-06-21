<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class unitkompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_kompetensi_sertifikasi')->insert(
            array(
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'id_ref_kompetensi' => 1,
                    'is_aktif' => 1
                ),
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'id_ref_kompetensi' => 2,
                    'is_aktif' => 1
                ),
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'id_ref_kompetensi' => 3,
                    'is_aktif' => 1
                ),
            )
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class syaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('syarat_sertifikasi')->insert(
            array(
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'syarat' => 'berkas A',
                    'is_aktif' => 1
                ),
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'syarat' => 'berkas B',
                    'is_aktif' => 1
                ),
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'syarat' => 'berkas C',
                    'is_aktif' => 1
                ),
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'syarat' => 'berkas D',
                    'is_aktif' => 1
                ),
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'syarat' => 'berkas E',
                    'is_aktif' => 1
                ),
            )
        );
    }
}

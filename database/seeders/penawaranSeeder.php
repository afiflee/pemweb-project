<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penawaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penawaran_sertifikasi')->insert(
            array(
                array(
                    'id_ref_jenis_sertifikasi' => 1,
                    'deskripsi_penawaran' => 'Sertifikasi dengan materi sertifikasi 1',
                    'periode' => 2021,
                    'created_by' => 'User',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'edited_by' => 'user',
                    'is_aktif' => 1
                )
            )
        );
    }
}

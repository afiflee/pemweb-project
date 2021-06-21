<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pendaftarsyaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendaftar_syarat')->insert(
            array(
                array(
                    'id_syarat_sertifikasi' => 1,
                    'id_pendaftar' => 1,
                    'status_verifikasi_syarat' => 'aktif',
                    'path_bukti' => 'path', 
                    'verifikasi_asesor' => 'belum terverifikasi',
                    'komentar_asesor' => 'belum ada komentar',
                    'verified_by' => 'asesor',
                    'verified_at' => Carbon::create('2021', '06', '21'),
                    'created_by' => 'asesi',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'edited_by' => 'asesor'
                )
            )
        );
    }
}

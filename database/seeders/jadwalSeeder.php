<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert(
            array(
                array(
                    'id_penawaran_sertifikasi' => 1,
                    'id_kegiatan' => 1,
                    'tanggal_awal' => Carbon::create('2021', '06', '21'),
                    'tanggal_akhir' => Carbon::create('2021', '07', '05'),
                    'created_by' => 'User',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'is_show' => 1,
                    'deskripsi' => 'Masa pendaftaran sertifikasi'
                ),
                array(
                    'id_penawaran_sertifikasi' => 1,
                    'id_kegiatan' => 2,
                    'tanggal_awal' => Carbon::create('2021', '07', '10'),
                    'tanggal_akhir' => Carbon::create('2021', '07', '12'),
                    'created_by' => 'User',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'is_show' => 1,
                    'deskripsi' => 'Seleksi Sertifikasi'
                )
            )
        );
    }
}

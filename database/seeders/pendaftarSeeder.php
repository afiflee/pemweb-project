<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendaftar')->insert(
            array(
                array(
                    'id_penawaran_sertifikasi' => 1,
                    'id_asesi' => 1,
                    'status_akhir_sertifikasi' => 'aktif',
                    'tanggal_status_akhir' => Carbon::create('2021', '06', '20'),
                    'created_by' => 'asesi',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'edited_by' => 'asesi',
                    'status_pendaftaran' => 'aktif'
                )
            )
        );
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class asesorsertifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asesor_jenis_sertifikasi')->insert(
            array(
                array(
                    'id_asesor' => 1,
                    'id_ref_jenis_sertifikasi' => 1,
                    'tanggal_awal_berlaku' => Carbon::create('2021', '06', '21'),
                    'tanggal_akhir_berlaku' => Carbon::create('2021', '07', '21'),
                    'no_sertifikat' => 1
                )
            )
        );
    }
}

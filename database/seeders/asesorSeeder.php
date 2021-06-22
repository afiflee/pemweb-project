<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class asesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asesor')->insert(
            array(
                array(
                    'nama' => 'asesor',
                    'nim' => 'M000000',
                    'nik' => '3172000000000000',
                    'tempat_lahir' => 'Jakarta',
                    'tanggal_lahir' => Carbon::create('2000', '01', '01'),
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'jakarta',
                    'no_telpon' => '081808180818',
                    'email' => 'asesor@asesor.com',
                )
            )
        );
    }
}

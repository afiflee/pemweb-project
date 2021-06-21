<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class asesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asesi')->insert(
            array(
                array(
                    'nama' => 'asesi',
                    'nim' => 'M000001',
                    'nik' => '3172000000000001',
                    'tempat_lahir' => 'Jakarta',
                    'tanggal_lahir' => Carbon::create('2000', '01', '01'),
                    'jenis_kelamin' => 'Laki-laki',
                    'id_ref_negara' => 'Indonesia',
                    'alamat' => 'jakarta',
                    'no_telpon' => '081808180818',
                    'email' => 'asesi@asesi.com',
                    'kualifikasi_pendidikan' => 'SMA',
                    'id_unit' => 1,
                    'created_by' => 'asesi',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'edited_by' => 'asesi',
                    'id_user' => 2
                )
            )
        );
    }
}

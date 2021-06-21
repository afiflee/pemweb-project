<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pendaftarkuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendaftar_kuesioner')->insert(
            array(
                array(
                    'id_pendaftar' => 1,
                    'id_kuesioner' => 1,
                    'jawaban' => 'saya cukup puas dengan layanan website',
                    'created_by' => 'asesi',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'edited_by' => 'asesi'
                )
            )
        );
    }
}

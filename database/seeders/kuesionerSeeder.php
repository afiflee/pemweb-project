<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_kuesioner')->insert(
            array(
                array(
                    'pertanyaan' => 'apakah anda puas dengan layanan website kami?',
                    'is_aktif' => 1
                ),
                array(
                    'pertanyaan' => 'Berikan kritik dan saran untuk website kami',
                    'is_aktif' => 1
                ),
                array(
                    'pertanyaan' => 'Layanan apa yang menurut anda perlu kami perbaiki?',
                    'is_aktif' => 1
                ),
            )
        );
    }
}

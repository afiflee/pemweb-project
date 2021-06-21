<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class instrumenasesmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instrumen_asesmen_kompetensi')->insert(
            array(
                array(
                    'id_ref_unit_kompetensi' => 1,
                    'instrumen_pertanyaan' => 'Apakah anda pernah mempelajari materi sertifikasi?',
                    'status_instrumen' => 'aktif',
                    'is_aktif' => 1
                ),
                array(
                    'id_ref_unit_kompetensi' => 1,
                    'instrumen_pertanyaan' => 'Apakah anda sudah menguasai materi sertifikasi?',
                    'status_instrumen' => 'aktif',
                    'is_aktif' => 1
                ),
            )
        );
    }
}

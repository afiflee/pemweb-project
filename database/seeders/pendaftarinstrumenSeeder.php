<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pendaftarinstrumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendaftar_instrumen')->insert(
            array(
                array(
                    'id_pendaftar' => 1,
                    'id_instrumen_asesmen' => 1,
                    'jawaban_self_asesmen' => 'ya, saya pernah mempelajari mengenai materi sertifikasi',
                    'path_bukti' => 'path',
                    'komentar_bukti' => 'komentar',
                    'jawaban_asesor_verifikasi' => 'belum ada jawaban',
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

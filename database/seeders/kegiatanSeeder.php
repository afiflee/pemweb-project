<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_kegiatan')->insert(
            array(
                array(
                    'nama_kegiatan' => 'pendaftaran',
                    'deskripsi' => 'pendaftaran sertifikasi yang akan diikuti',
                    'created_by' => 'User',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
                array(
                    'nama_kegiatan' => 'seleksi',
                    'deskripsi' => 'Seleksi untuk ujian sertifikasi',
                    'created_by' => 'User',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
                array(
                    'nama_kegiatan' => 'Ujian',
                    'deskripsi' => 'Kegiatan ujian sertifikasi',
                    'created_by' => 'User',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
                array(
                    'nama_kegiatan' => 'pengumuman',
                    'deskripsi' => 'Pengumuman hasil ujian sertifikasi',
                    'created_by' => 'User',
                    'created_at' => now(),
                    'updated_at' => now()
                )
            )
        );
    }
}

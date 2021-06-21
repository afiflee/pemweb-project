<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class refjenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_jenis_sertifikasi')->insert(
            array(
                'nama' => 'Sertifikasi 1',
                'status_jenis_sertifikasi' => 'aktif',
                'created_by' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
                'edited_by' => 'User',
                'is_aktif' => 1,
            ),
            array(
                'nama' => 'Sertifikasi 2',
                'status_jenis_sertifikasi' => 'aktif',
                'created_by' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
                'edited_by' => 'User',
                'is_aktif' => 1,
            ),
            array(
                'nama' => 'Sertifikasi 3',
                'status_jenis_sertifikasi' => 'aktif',
                'created_by' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
                'edited_by' => 'User',
                'is_aktif' => 1,
            ),
            array(
                'nama' => 'Sertifikasi 4',
                'status_jenis_sertifikasi' => 'aktif',
                'created_by' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
                'edited_by' => 'User',
                'is_aktif' => 1,
            ),
            array(
                'nama' => 'Sertifikasi 5',
                'status_jenis_sertifikasi' => 'aktif',
                'created_by' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
                'edited_by' => 'User',
                'is_aktif' => 1,
            ),
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class unitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_unit_kompetensi')->insert(
            array(
                array(
                    'nama' => 'unit 1',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 2',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 3',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 4',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 5',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 6',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 7',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 8',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 9',
                    'is_aktif' => 1,
                ),
                array(
                    'nama' => 'unit 10',
                    'is_aktif' => 1,
                ),
            ));
    }
}

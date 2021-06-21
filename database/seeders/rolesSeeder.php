<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            array(
                array(
                    'name' => 'admin',
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
                array(
                    'name' => 'asesi',
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
                array(
                    'name' => 'asesor',
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            ));
    }
}

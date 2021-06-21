<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
          array(
              array(
                  'name' => 'admin',
                  'email' => 'admin@admin.com',
                  'password' => Hash::make('admin123'),
                  'created_at' => now(),
                  'updated_at'=> now()
              )
          )  
        );

        DB::table('model_has_roles')->insert(
            array(
                array(
                    'role_id' => 1,
                    'model_type' => 'App\Models\User',
                    'model_id' => 1,
                )
            )
        );
    }
}

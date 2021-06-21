<?php

namespace Database\Seeders;

use App\Models\pendaftarinstrumen;
use App\Models\pendaftarkuesioner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            rolesSeeder::class,
            userSeeder::class,
            refjenisSeeder::class,
            asesorSeeder::class,
            unitSeeder::class,
            asesiSeeder::class,
            kegiatanSeeder::class,
            kuesionerSeeder::class,
            unitkompetensiSeeder::class,
            syaratSeeder::class,
            instrumenasesmenSeeder::class,
            penawaranSeeder::class,
            pendaftarSeeder::class,
            pendaftarsyaratSeeder::class,
            pendaftarinstrumenSeeder::class,
            asesorsertifikasiSeeder::class,
            asesorpendaftarSeeder::class,
            jadwalSeeder::class,
            pendaftarkuesionerSeeder::class
        ]);
    }
}

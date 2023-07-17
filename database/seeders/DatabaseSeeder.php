<?php

use App\Models\DataSiswa;
use App\Models\Kecamatan;
use Database\Seeders\AdminSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 15; $i++) {
            Kecamatan::create([
                'nama_kecamatan' => $faker->city,
                'tahun' => $faker->numberBetween(2020, 2023),
            ]);
        }

        for ($i = 0; $i < 250; $i++) {
            DataSiswa::create([
                'kecamatan_id' => rand(1, 15),
                'nama_siswa' => $faker->name,
                'jk' => $faker->randomElement(['P', 'L']),
            ]);
        }

        $this->call(AdminSeeder::class);
    }
}

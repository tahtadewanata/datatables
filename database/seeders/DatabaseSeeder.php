<?php

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
        foreach (range(1, 75) as $index) {
            DB::table('tb_usiasekolah')->insert([
                'id_uker' => $faker->numberBetween(0, 37),
                'jk_lk_sds' => $faker->numberBetween(500, 3853),
                'jk_pr_sds' => $faker->numberBetween(500, 3853),
                'jk_lk_sdn' => $faker->numberBetween(500, 3853),
                'jk_pr_sdn' => $faker->numberBetween(500, 3853),
                'jk_lk_smpn' => $faker->numberBetween(500, 3853),
                'jk_pr_smpn' => $faker->numberBetween(500, 3853),
                'jk_lk_smps' => $faker->numberBetween(500, 3853),
                'jk_pr_smps' => $faker->numberBetween(500, 3853),
                'tahun' => $faker->year('+3 years')
            ]);
        }
    }
}

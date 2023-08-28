<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KecamatanSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $kecdata = [
            [
                'nama_kecamatan' => 'BAGOR',
            ],
            [
                'nama_kecamatan' => 'BARON',
            ],
            [
                'nama_kecamatan' => 'BERBEK',
            ],
            [
                'nama_kecamatan' => 'GONDANG',
            ],
            [
                'nama_kecamatan' => 'JATIKALEN',
            ],
            [
                'nama_kecamatan' => 'KERTOSONO',
            ],
            [
                'nama_kecamatan' => 'LENGKONG',
            ],
            [
                'nama_kecamatan' => 'LOCERET',
            ],
            [
                'nama_kecamatan' => 'NGANJUK',
            ],
            [
                'nama_kecamatan' => 'NGETOS',
            ],
            [
                'nama_kecamatan' => 'NGLUYU',
            ],
            [
                'nama_kecamatan' => 'NGRONGGOT',
            ],
            [
                'nama_kecamatan' => 'PACE',
            ],
            [
                'nama_kecamatan' => 'PATIANROWO',
            ],
            [
                'nama_kecamatan' => 'PRAMBON',
            ],
            [
                'nama_kecamatan' => 'REJOSO',
            ],
            [
                'nama_kecamatan' => 'SAWAHAN',
            ],
            [
                'nama_kecamatan' => 'SUKOMORO',
            ],
            [
                'nama_kecamatan' => 'TANJUNGANOM',
            ],
            [
                'nama_kecamatan' => 'WILANGAN',
            ],
        ];
        Kecamatan::insert($kecdata);
    }
}

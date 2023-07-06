<?php

namespace Database\Seeders;

use App\Models\klasifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KlasifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $klasifikasidata = [
            [
                'namaklasifikasi' => 'KELEMBAGAAN',
            ],
            [
                'namaklasifikasi' => 'TERPILAH',
            ],
            [
                'namaklasifikasi' => 'DASAR',
            ],
        ];
        klasifikasi::insert($klasifikasidata);
    }
}

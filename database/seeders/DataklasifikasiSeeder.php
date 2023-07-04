<?php

namespace Database\Seeders;

use App\Models\Dataklasifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataklasifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $klasifikasi = [
            [
                'namadata' => 'DATA PENDUDUK USIA SEKOLAH',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'PENDIDIKAN',
            ],
            [
                'namadata' => 'SISWA PUTUS SEKOLAH',
                'klasifikasi' => 'KELEMBAGAAN',
                'bidang' => 'PENDIDIKAN',
            ],
        ];

        Dataklasifikasi::insert($klasifikasi);
    }
}

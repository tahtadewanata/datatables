<?php

namespace Database\Seeders;

use App\Models\Bidang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bidangdata = [
            [
                'namabidang' => 'PENDIDIKAN',
            ],
            [
                'namabidang' => 'KESEHATAN',
            ],
            [
                'namabidang' => 'SOSIAL',
            ],
            [
                'namabidang' => 'POLITIK',
            ],
            [
                'namabidang' => 'HUKUM DAN HAM',
            ],
            [
                'namabidang' => 'EKONOMI DAN KETENAGAKERJAAN',
            ],
        ];
        Bidang::insert($bidangdata);
    }
}

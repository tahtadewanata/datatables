<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@localhost',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@localhost',
                'password' => bcrypt('admin2'),
            ],
        ];

        User::insert($users);
    }
}

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
        $user = [
            'name' => 'admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('admin'),
        ];

        User::create($user);
    }
}

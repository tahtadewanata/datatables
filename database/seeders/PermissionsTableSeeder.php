<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Insert permissions
        DB::table('permissions')->insert([
            ['name' => 'view-dashboard', 'guard_name' => 'web'],
            ['name' => 'view-datatable', 'guard_name' => 'web'],
            // Add other permissions as needed
        ]);
    }
}

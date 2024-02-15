<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasRolesTableSeeder extends Seeder
{
    public function run()
    {
        // Assign roles to users
        DB::table('model_has_roles')->insert([
            ['role_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => 1], // Assign 'admin' role to user with ID 1
            // Add other user_role relationships as needed
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasPermissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing model_has_permissions entries to avoid duplication
        DB::table('model_has_permissions')->truncate();

        // Assign permissions to users
        $modelHasPermissions = [
            ['permission_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => 1], // Assign 'view-dashboard' permission to user with ID 1
            ['permission_id' => 2, 'model_type' => 'App\Models\User', 'model_id' => 1], // Assign 'view-datatable' permission to user with ID 1
            // Add other user_permission relationships as needed
        ];

        DB::table('model_has_permissions')->insert($modelHasPermissions);
    }
}

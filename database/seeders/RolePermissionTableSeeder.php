<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionTableSeeder extends Seeder
{
    public function run()
    {
        // Assign permissions to roles
        DB::table('role_has_permissions')->insert([
            ['role_id' => 1, 'permission_id' => 1], // admin role has view-dashboard permission
            ['role_id' => 1, 'permission_id' => 2], // admin role has view-datatable permission
            ['role_id' => 2, 'permission_id' => 1], // superadmin role has view-dashboard permission
            ['role_id' => 2, 'permission_id' => 2], // superadmin role has view-datatable permission
            // Add other role_permission relationships as needed
        ]);
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminRole = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        $adminRole->givePermissionTo(
            "dashboard_access",

            "create_letter",
            "read_letter",
            "update_letter",
        );
    }
}

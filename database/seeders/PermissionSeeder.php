<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $permissions = [
            "dashboard_access",


            "create_letter",
            "read_letter",
            "update_letter",
        ];

        $this->insertPermission($permissions);
    }

    private function insertPermission(array $permissions): void
    {
        $permissions = collect($permissions)->map(
            fn($permission) => [
                "name" => $permission,
                'guard_name' => 'web',
                "created_at" => Carbon::now(),
            ]
        );

        Permission::insert($permissions->toArray());
    }
}

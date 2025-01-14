<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::where('id', 1)->first();
        $superAdmin->assignRole('Super Admin');

        $admin = Role::where('name', 'Super Admin')->first();
        $adminPermissions = Permission::pluck('id')->all();

        $admin->syncPermissions($adminPermissions);
    }
}

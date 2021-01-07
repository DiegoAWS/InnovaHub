<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        // Super admin
        $roleSuperAdmin = Role::create(['name' => 'super admin']);
        $permissionEditUsers = Permission::create(['name' => 'edit users']);
        $roleSuperAdmin->givePermissionTo($permissionEditUsers);

        // Admin
        $roleAdmin = Role::create(['name' => 'admin']);
        $permissionEditProjects = Permission::create(['name' => 'edit projects']);
        $roleAdmin->givePermissionTo($permissionEditProjects);

        // Startup
        $roleStartup = Role::create(['name' => 'startup']);
        $permissionCreateOpp = Permission::create(['name' => 'create opportunities']);
        $roleStartup->givePermissionTo($permissionCreateOpp);

        // Company
        $roleCompany = Role::create(['name' => 'company']);
        $roleCompany->givePermissionTo($permissionCreateOpp);


    }
}

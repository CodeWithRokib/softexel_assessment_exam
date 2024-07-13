<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
             // Reset cached roles and permissions
             app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

             // create permissions
             Permission::create(['name' => 'access dashboard']);
     
             // create roles and assign created permissions
             $superAdminRole = Role::create(['name' => 'super admin']);
             $adminRole = Role::create(['name' => 'admin']);
             $userRole = Role::create(['name' => 'user']);
     
             $superAdminRole->givePermissionTo('access dashboard');
             $adminRole->givePermissionTo('access dashboard');
    }
}
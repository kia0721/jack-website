<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Log;
class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {

        Log::info("RUN SEEDER : RolesAndPermissionsSeeder ");
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'view user']);

        Permission::create(['name' => 'create sales user']);
        Permission::create(['name' => 'update sales user']);
        Permission::create(['name' => 'delete sales user']);
        Permission::create(['name' => 'view sales user']);


        Permission::create(['name' => 'create layer']);
        Permission::create(['name' => 'update layer']);
        Permission::create(['name' => 'delete layer']);
        Permission::create(['name' => 'view layer']);


        Permission::create(['name' => 'create opportunity']);
        Permission::create(['name' => 'update opportunity']);
        Permission::create(['name' => 'delete opportunity']);
        Permission::create(['name' => 'view opportunity']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'SMSGT Admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'PLDT Admin']);
        $role->givePermissionTo(['view opportunity']);

        $role = Role::create(['name' => 'Sales']);
        $role->givePermissionTo(['view opportunity', 'create opportunity', 'update opportunity', 'delete opportunity']);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Permission_Array = [
            'view trips' , 'create trips' , 'edit trips' , 'manage trips',
            'view bookings' , 'book trip' , 'cancel booking' , 'manage bookings', 'view own bookings' , 'cancel own booking',
            'view users' , 'create users' , 'edit users', 'delete users' , 'manage users',
            'view reports', 'export reports',
            'view permissions', 'create permissions', 'edit permissions', 'delete permissions',
            'view roles', 'create roles', 'edit roles', 'delete roles',
            'create employee' , 'edit employee' , 'delete employee',
        ];

        foreach ($Permission_Array as $Permissions){
            Permission::create(["name" => $Permissions]);
        }

        $Admin = Role::create(['name' => 'admin']);
        $Admin->givePermissionTo(Permission::all());




        $Manager = Role::create(['name' => 'manager']);
        $Manager->givePermissionTo([
            'view trips' , 'create trips' , 'edit trips' , 'manage trips', 'view bookings' , 'manage bookings' , 'view reports',
            'view permissions' , 'create permissions' , 'edit permissions',
            'view roles' , 'create roles' , 'edit roles',
            'create employee' , 'edit employee',
        ]);

        $Agent = Role::create(['name' => 'agent']);
        $Agent->givePermissionTo([
            'book trip' , 'cancel booking' , 'view bookings'
        ]);

        $Customer = Role::create(['name' => 'customer']);
        $Customer->givePermissionTo([
            'cancel own booking', 'view own bookings' , 'view trips' , 'book trip',
        ]);
    }
}

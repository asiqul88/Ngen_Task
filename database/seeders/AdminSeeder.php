<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password'),
        ]);

        $salesman = User::create([
            'name'=>'Salesman',
            'email'=>'salesman@salesman.com',
            'password'=>bcrypt('password')
        ]);


        $admin_role = Role::create(['name' => 'admin']);
        $salesman_role = Role::create(['name' => 'salesman']);

        $permission = Permission::create(['name' => 'product add']);
        $permission = Permission::create(['name' => 'Product create']);
        $permission = Permission::create(['name' => 'product edit']);
        $permission = Permission::create(['name' => 'Product delete']);

        $permission = Permission::create(['name' => 'Post access']);
        $permission = Permission::create(['name' => 'Post edit']);
        $permission = Permission::create(['name' => 'Post create']);
        $permission = Permission::create(['name' => 'Post delete']);

        $permission = Permission::create(['name' => 'Role access']);
        $permission = Permission::create(['name' => 'Role edit']);
        $permission = Permission::create(['name' => 'Role create']);
        $permission = Permission::create(['name' => 'Role delete']);

        $permission = Permission::create(['name' => 'User access']);
        $permission = Permission::create(['name' => 'User edit']);
        $permission = Permission::create(['name' => 'User create']);
        $permission = Permission::create(['name' => 'User delete']);

        $permission = Permission::create(['name' => 'Permission access']);
        $permission = Permission::create(['name' => 'Permission edit']);
        $permission = Permission::create(['name' => 'Permission create']);
        $permission = Permission::create(['name' => 'Permission delete']);

        $admin->assignRole($admin_role);
        $salesman->assignRole($salesman_role);

        $admin_role->givePermissionTo(Permission::all());
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\Role;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $allRoles = Role::all()->keyBy('id');
 
        $permissions = [
            'manage-organization' => [Role::ROLE_ADMINISTRATOR],
            'manage-supervisor' => [Role::ROLE_MANAGER],
            'manage-worker' => [Role::ROLE_SUPERVISOR],
            'view-profile' => [Role::ROLE_WORKER],
        ];
 
        foreach ($permissions as $key => $roles) {
            $permission = Permission::create(['name' => $key]);
            foreach ($roles as $role) {
                $allRoles[$role]->permissions()->attach($permission->id);
            }
        }
    }
}

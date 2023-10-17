<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function run()
    {
        $allRoles = Role::all()->keyBy('id');
 
        $permissions = [
            'supervisor-manage' => [Role::ROLE_MANAGER],
            'worker-manage' => [Role::ROLE_SUPERVISOR],
            'detail-manage' => [Role::ROLE_WORKER],
        ];
 
        foreach ($permissions as $key => $roles) {
            $permission = Permission::create(['name' => $key]);
            foreach ($roles as $role) {
                $allRoles[$role]->givePermissionTo($permission);
            }
        }
    }
}

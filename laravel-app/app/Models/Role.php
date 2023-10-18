<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ROLE_ADMINISTRATOR = 1;
    const ROLE_MANAGER = 2;
    const ROLE_SUPERVISOR = 3;
    const ROLE_WORKER = 4;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}

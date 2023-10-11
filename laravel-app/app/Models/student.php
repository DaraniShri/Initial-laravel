<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< Updated upstream
use App\Traits\UUID;
=======
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
>>>>>>> Stashed changes


class Student extends Model
{
    use CrudTrait;
    use HasFactory;
    use UUID;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];
<<<<<<< Updated upstream
}
=======

    public function getStudent($email, $password){
        return DB::table('students')->where(["email"=>$email, "password"=>$password])->get();
    }
}
>>>>>>> Stashed changes

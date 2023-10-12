<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;


class Student extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasApiTokens;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getStudent($email){
        return DB::table('students')->where('email',$email)->get();
    }

    public function updateStudent($id, $name, $email, $password){
        $values=array('name' => $name,'email' => $email, 'password' => $password);
        $affected = DB::table('students')
                ->where('id', $id)
                ->update($values);
        return $affected;
    }
}
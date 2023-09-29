<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'employee_email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
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

    public function insertData($name, $email, $password) {        
        DB::table('employees')->insert(array(
            'employee_name'=> $name,
            'employee_email'=> $email,
            'password'=>Hash::make($password),
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ));
        echo "Record inserted successfully.<br/>";
        echo '<a href = "insert">Click Here</a> to go back.';
    }

    public function deleteData($id){
        DB::table('employees')->where('id',$id)->delete();
        echo "Record deleted successfully.";
    }

    public function editData($id){
        return DB::table('employees')->where('id',$id)->get();
    }

    public function updateData($name, $email, $id){
        DB::update('update employees set employee_name = ?, employee_email = ? where id = ?',[$name,$email,$id]);        
    }
}

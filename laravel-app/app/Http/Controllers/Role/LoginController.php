<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Auth;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $request->session()->put('roleEmail',$email);
            $role = Role::find(Auth::user()->role_id);
            $role_name = $role->name;
            if($role_name == 'manager'){
                return view('roles/manager/dashboard');
            }
            if($role_name == 'admin'){
                return view('roles/admin/dashboard');
            }
            if($role_name == 'supervisor'){
                return view('roles/supervisor/dashboard');
            }
        }
    }
}

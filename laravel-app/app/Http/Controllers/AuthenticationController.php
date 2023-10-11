<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    public function createAccount(Request $request)
    {
        $Student = Student::create([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $tokenResult = $Student->createToken('Personal Access Token');
        $token = $tokenResult->plainTextToken;
        return response()->json([
            'message' => 'Successfully created user!',
            'accessToken'=> $token,
        ],201);
    }

    public function signinAccount(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $student = new Student();
        $studentDetails = $student->getStudent($email,$password);
        if($studentDetails){
            return redirect()->route('cms');
        }
    }  
    
    public function signoutAccount(){
        dd("irnf");
    }
}

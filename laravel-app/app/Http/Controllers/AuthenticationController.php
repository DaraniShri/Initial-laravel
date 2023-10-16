<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Hash;


class AuthenticationController extends Controller
{
    public function createAccount(Request $request)
    {
        $Student = Student::create([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $tokenResult = $Student->createToken('Personal Access Token');
        $token = $tokenResult->plainTextToken;
        return response()->json([
            'message' => 'Successfully created user!',
            'accessToken'=> $token,
        ],201);
    }

    public function updateProfile(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $student = new Student();
        if($student->updateStudent($id, $name, $email, $password)){
            $request->session()->put('userName',$name);
            $request->session()->put('userEmail',$email);
            $request->session()->save();
            return redirect()->route('cms');
        }
    }

    public function signinAccount(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $student = new Student();
        $studentDetails = $student->getStudent($email);

        foreach($studentDetails as $student){
            $id = $student->id;
            $name = $student->name;
            $hashPassword = $student->password;
        }
        if(Hash::check($password, $hashPassword)){
            $request->session()->put('userId',$id);
            $request->session()->put('userName',$name);
            $request->session()->put('userEmail',$email);
            return redirect()->route('cms');
        }
        else{
            return view('user/login');
        }
    }  
    public function signoutAccount(Request $request){
        $request->session()->forget('userEmail');
        return view('user/login');        
    }
}

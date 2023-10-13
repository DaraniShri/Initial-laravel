<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        $query = Student::select('name','email')->orderBy('created_at', 'asc')->get();  
        return response()->json([
            'message' => 'Successfull!',
            'accessToken'=> $query,
        ],200);
    }

    public function show($id) {
        return Student::findorFail($id);
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'

        ]);
  
        $student = new Student;
        $student->name = $request->input('name'); 
        $student->email = $request->input('email');  
        $student->password = Hash::make($request->input('password'));
        $student->save(); 
        return response()->json([
            'message' => 'Successfully inserted!',
            'data'=> $student,
        ],200);
    }

    public function update(Request $request, $id){  
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $student = Student::findorFail($id); 
        $student->name = $request->input('name'); 
        $student->email = $request->input('email');  
        $student->password = Hash::make($request->input('password'));
        $student->save();
        return response()->json([
            'message' => 'Successfully updated!',
            'data'=> $student,
        ],200);
    }

    public function destroy($id){ 
        $student = Student::findorFail($id); 
        if($student->delete()){ 
            return response()->json([
                'message' => 'Successfully deleted from the table!',
                'data'=> $student,
            ],200);
        }
    }

}

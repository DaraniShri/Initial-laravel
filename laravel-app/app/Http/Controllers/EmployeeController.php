<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function displayData(): View
    {
        $employees = DB::table('employees')->get();
        return view('employees/view', ['employees' => $employees]);
    }

    public function insertform() {
        return view('employees/insert');
    }

    public function insert(Request $request) {
        $employeeName = $request->input('employee-name');
        $employeeEmail = $request->input('employee-email');
        $password = $request->input('password');
        
        DB::table('employees')->insert(array(
            'employee_name'=> $employeeName,
            'employee_email'=> $employeeEmail,
            'password'=>Hash::make($password),
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ));
        echo "Record inserted successfully.<br/>";
        echo '<a href = "insert">Click Here</a> to go back.';
    }

    public function destroy($id) {
        DB::delete('delete from employees where id = ?',[$id]);
        echo "Record deleted successfully.";
    }
}
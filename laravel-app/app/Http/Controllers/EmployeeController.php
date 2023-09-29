<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
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

    public function insertEmployee(Request $request) {
        $employeeName = $request->input('employee-name');
        $employeeEmail = $request->input('employee-email');
        $password = $request->input('password');
        $employee = new Employee();
        $employee -> insertData($employeeName, $employeeEmail, $password);
    }

    public function destroy($id) {
        $employee = new Employee();
        $employee -> deleteData($id);
    }

    public function edit($id){
        $employee = new Employee();
        $employeeDetails = $employee -> editData($id);
        return view('employees/edit',array(
                                        'employeeDetails'=>$employeeDetails
                                    ));
    }

    public function update(Request $request){
        $employeeId = $request->input('id');
        $employeeName = $request->input('employee-name');
        $employeeEmail = $request->input('employee-email');
        $employee = new Employee();
        $employee -> updateData($employeeName, $employeeEmail, $employeeId);

    }
}
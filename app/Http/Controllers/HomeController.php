<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    function index()
    {
        return view('home', [
        ]);
    }

    function confirmed(Request $request)
    {
        //ตรวจสอบ
        $request->validate([
            'id' => 'required|unique:employee|max:5',
            'employeeRole' => 'required',
            'salary' => 'required',
            'startWork' => 'required',
        ]);

        //บันทึก
        $employee = new Employee;
        $employee->id = $request->id;
        $employee->role = $request->employeeRole;
        $employee->salary_per_year = $request->salary;
        $employee->start_work = $request->startWork;
        $employee->confirmed = $request->confirmed;
        $employee->save();

        return redirect()->route('home');
    }
}

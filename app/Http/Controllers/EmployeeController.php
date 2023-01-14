<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function getEmployee()
    {
        $data = Employee::get();
        return view('list')->with(['employees' => $data]);
    }

    public function create()
    {
        return view('form');
    }

    public function createEmployee(EmployeeRequest $request)
    {
        Employee::create($request->toArray());
        // $data = Employee::get();
        return redirect('/');
    }

    public function editEmployee($id)
    {
        $data = Employee::find($id);
        return view('updateForm')->with(['employee' => $data]);
    }

    public function updateEmployee(EmployeeRequest $request, $id)
    {
        Employee::find($id)->update($request->toArray());
        return redirect('/');
    }

    public function deleteEmployee($id)
    {
        Employee::find($id)->delete();
        return redirect('/');
    }
}
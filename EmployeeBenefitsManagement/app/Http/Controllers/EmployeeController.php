<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index(Request $request){
        $employees = Employee::when($request->search, function($query) use ($request){
            return $query->whereAny(
                [
                    'employeeID',
                    'name',
                    'department',
                    'role',
                    'location' 
                ], 'like','%'. $request->search . '%');
        })->paginate(10);

        return view('employees.index',compact('employees'));
    }

    public function create(Request $request){
        $employee = new Employee();

        $employee->employeeID = $request->employeeID;
        $employee->name = $request->name;
        $employee->department = $request->department;
        $employee->role = $request->role;
        $employee->location = $request->location;
        $employee->save();

        return redirect('employee');
    }

    public function edit($id){
        $employee = Employee::findOrFail($id);

        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id){
        $employee = Employee::findOrFail($id);

        $employee->employeeID = $request->employeeID;
        $employee->name = $request->name;
        $employee->department = $request->department;
        $employee->role = $request->role;
        $employee->location = $request->location;
        $employee->update();

        return redirect('employee');
    }

    public function destroy(Request $request,$id){
        $employee = Employee::findOrFail($id)->delete();
        
        return redirect('employee');
    }
}

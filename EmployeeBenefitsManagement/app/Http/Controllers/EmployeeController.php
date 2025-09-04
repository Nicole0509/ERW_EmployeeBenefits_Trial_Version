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
        })->paginate(20);

        return view('employees.index',compact('employees'));
    }
}

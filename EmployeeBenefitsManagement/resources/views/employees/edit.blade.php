@extends('layouts.app')

@section('head')
    <title>Edit Employee</title>
@endsection

@section('content')
    <section>
        <div class=" card shadow-lg">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0">Edit Employee</h5>
            </div>

            <div class="card-body">
                <form action="{{ URL('employee/update',$employee->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="employeeID" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="employeeID" name="employeeID" required value="{{ old('name', $employee->employeeID) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $employee->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="department" required value="{{ old('name', $employee->department) }}">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" class="form-control" id="role" name="role" required value="{{ old('name', $employee->role) }}">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required value="{{ old('name', $employee->location) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
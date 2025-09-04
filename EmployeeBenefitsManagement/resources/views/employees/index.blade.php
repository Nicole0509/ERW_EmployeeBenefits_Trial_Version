@extends('layouts.app')

@section('head')
    <title>Students</title>
@endsection

@section('styles')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        h2{
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        a{
            text-decoration:none;
        }

        .search{
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search input{
            padding: 10px;
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search button, 
        .addStudentButton{
            padding: 10px 15px;
            margin-left: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search button:hover,
        .addStudentButton:hover {
            color: white;
            background-color: #0056b3;
        }

        .editButton, .deleteButton {
            padding: 5px 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .editButton {
            background-color: #28a745;
        }

        .editButton:hover {
            color: white;
            background-color: #218838;
        }

        .deleteButton {
            background-color: #dc3545;
        }

        .deleteButton:hover {
            color: white;
            background-color: #c82333;
        }
    </style>
@endsection

@section('content')
    <section>
        <h2>Employees List</h2>
        <form action={{ URL('employee') }} method="GET">
            <div class="search">
                <input type="text" placeholder="Search" id="search" name="search">
                <button type="submit">Search</button>
            </div>
        </form>
        
        <table>
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Full Name</th>
                    <th>Department</th>
                    <th>Job Title</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ( $employees as $employee)

                    <tr>
                        <td>{{$employee->employeeID}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->department}}</td>
                        <td>{{$employee->role}}</td>
                        <td>{{$employee->location}}</td>
                        <td>
                            <a href="#" class="editButton">Edit</a>
                            <a href="#" class="deleteButton">Delete</a>
                        </td>
                    </tr>

                    
                @endforeach
            </tbody>
            
        </table>
        
    </section>
@endsection

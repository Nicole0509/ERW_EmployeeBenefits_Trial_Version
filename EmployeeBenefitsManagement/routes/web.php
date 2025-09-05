<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('list-employees', [EmployeeController::class,'index']);

Route::prefix('employee')->controller(EmployeeController::class)->group(function(){
    Route::get('/', 'index');
    Route::view('add','employees.add');
    Route::post('create','create');
    Route::get('edit/{id}','edit');
    Route::post('update/{id}','update');
    Route::delete('delete/{id}','destroy');
});

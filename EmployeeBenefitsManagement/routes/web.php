<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('list-employees', [EmployeeController::class,'index']);

Route::prefix('employee')->controller(EmployeeController::class)->group(function(){
    Route::get('/', 'index');
});

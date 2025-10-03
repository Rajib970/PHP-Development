<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('employees', [EmployeeController::class, 'getEmployee']);

Route::get('employee/{id}',[EmployeeController::class,'getEmployeeById']);

// Route::post('addEmployee',[EmployeeController::class,'addEmployee']);

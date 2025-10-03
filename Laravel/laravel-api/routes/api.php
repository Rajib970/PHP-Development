<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('employees', [EmployeeController::class, 'getEmployee']);

Route::post('addEmployee',[EmployeeController::class,'addEmployee']);

Route::get('/test', function () {
    return response()->json([
        'message' => 'API is working!',
    ]);
});

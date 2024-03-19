<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmenstsController;
use App\Http\Controllers\Employees_shilftsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PositionsController;


Route::get('/departament', [DepartmenstsController::class, 'index']);
Route::post('/departament', [DepartmenstsController::class, 'store']);
Route::get('/departament/{id}', [DepartmenstsController::class, 'show']);
Route::put('/departament/{id}', [DepartmenstsController::class, 'update']);
Route::delete('/departament/{id}', [DepartmenstsController::class, 'destroy']);

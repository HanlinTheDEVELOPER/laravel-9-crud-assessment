<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [EmployeeController::class, 'getEmployee']);
Route::get('/create', [EmployeeController::class, 'create']);
Route::post('/create', [EmployeeController::class, 'createEmployee']);
Route::get('/delete/{id}', [EmployeeController::class, 'deleteEmployee']);
Route::get('/update/{id}', [EmployeeController::class, 'editEmployee']);
Route::post('/update/{id}', [EmployeeController::class, 'updateEmployee']);
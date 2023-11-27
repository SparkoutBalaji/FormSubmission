<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DocumentController;
use App\Models\Document;
use App\Models\Employer;
use App\Models\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/authenticate',[AuthController::class,'authenticate'])->name('authenticate');

Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');

// web.php or routes.php

Route::get('employee/{id}/form',[EmployeeController::class,'link_generate'])->name('employee.link_generate');
Route::post('employee/form_document/store/{id}', [DocumentController::class, 'store'])->name('post.form');
Route::get('/register/form/{id}',[EmployeeController::class,'register'])->name('register.form');
Route::post('employee/{employeeId}/registration', [EmployeeController::class,'update'])->name('registration.update');
Route::get('/employee/document',[EmployeeController::class,'show'])->name('employee.document');
Route::get('/employer/employee/document',[AuthController::class,'show'])->name('employees.document');


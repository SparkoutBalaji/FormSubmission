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
Route::post('/',[AuthController::class,'authenticate'])->name('authenticate');
// Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('employee/form_document/store/{id}', [DocumentController::class, 'store'])->name('post.form');

Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');

Route::get('employee/{id}/form',[EmployeeController::class,'link_generate'])->name('employee.link_generate');
Route::get('/register/form/{id}',[EmployeeController::class,'register'])->name('register.form');
Route::post('employee/{employeeId}/registration', [EmployeeController::class,'update'])->name('registration.update');
Route::get('/employee/document/{employee}',[EmployeeController::class,'show'])->name('employee.document');
Route::get('/employer/employee/document',[AuthController::class,'show'])->name('employees.document');

Route::get('/download-document/{path}', [EmployeeController::class,'downloadDocument'])->name('download.document');
Route::group(['middleware' => ['auth:employees']], function () {
    Route::get('/view-document/{id}', [DocumentController::class, 'viewDocument'])->name('view.document');
 });


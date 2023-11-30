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

// Route::middleware(['guest'])->group(function () {
Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/',[AuthController::class,'authenticate'])->name('authenticate');
// });

Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware(['auth:employers,employees']);

Route::middleware(['auth:employers'])->group(function () {
Route::post('employee/form_document/store/{id}', [DocumentController::class, 'store'])->name('post.form');

Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');

Route::get('employee/{id}/form',[EmployeeController::class,'link_generate'])->name('employee.link_generate');

Route::get('/employer/employee/document',[AuthController::class,'show'])->name('employees.document');
});


Route::get('/register/form/{id}',[EmployeeController::class,'register'])->name('register.form');
Route::post('employee/{employeeId}/registration', [EmployeeController::class,'update'])->name('registration.update');

Route::middleware(['auth:employees'])->group(function () {
    Route::get('/employee/document/{employee}', [EmployeeController::class,'show'])->name('employee.document');
});

// Route::middleware(['auth'])->group(function () {
//     // For authenticated users

//     // If an employer tries to access '/', they will be redirected to 'employee.create'
//     Route::middleware(['auth:employers'])->group(function () {
//         Route::get('/', function () {
//             return redirect()->route('employee.create');
//         });
//     });

//     // If an employee tries to access '/', they will be redirected to 'employee.document'
//     Route::middleware(['auth:employees'])->group(function () {
//         Route::get('/', function () {
//             return redirect()->route('employee.document');
//         });
//     });
// });

Route::middleware(['auth'])->group(function () {
Route::get('/download-document/{path}', [EmployeeController::class,'downloadDocument'])->name('download.document');
Route::get('/view-document/{id}', [DocumentController::class, 'viewDocument'])->name('view.document');
});


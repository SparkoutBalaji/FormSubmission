<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Employer;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
    $credentials = $request->only('email', 'password');

    $employer = Employer::where('email', $credentials['email'])->first();

    if ($employer && password_verify($credentials['password'], $employer->password)) {
        $role = $employer->role;
        if ($role == '1') {
            return view('admin.dashboard')->with('success Logged in as an Admin | Employer');
        }
    }

    $employee = Employee::where('email', $credentials['email'])->first();

    if ($employee && password_verify($credentials['password'], $employee->password)) {
        $role = $employee->role;

        if ($role == '2') {
            return redirect()->route('employee.document')->with('success Logged in as an Employee');
        }
    }

    // Authentication failed
    return back()->with('fail', 'Invalid credentials');
    }
    public function show()
    {
        $documents = Document::with('employee')->get();
        return view('admin.index', compact('documents'));
    }
    public function logout(){
        Session::flush();

        Employee::logout();
        Employer::logout();

        return Redirect('login');
    }
}

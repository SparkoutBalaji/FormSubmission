<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Employer;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
    $credentials = $request->only('email', 'password');
    // dd($credentials);
    if (Auth::guard('employers')->attempt($credentials)) {
        $user = Auth::guard('employers')->user();
        if ($user->role == 1) {
            return redirect()->route('employee.create')->with('success Logged in as an Admin | Employer');
        }
    }
    if (Auth::guard('employees')->attempt($credentials)) {
        $user = Auth::guard('employees')->user(); // Retrieve the authenticated user
        if ($user->role == 2) {
            return redirect()->route('employee.document', ['employee' => $user->employee_id ?? null])->with('success', 'Logged in as an Employee');
        }
    }
        return back()->with(['fail' => 'The provided credentials do not match our records.']);
    }

    public function show()
    {
        $documents = Employee::rightJoin('documents', 'employees.id', '=', 'documents.employee_id')
                    ->select('employees.id', 'employees.email', 'documents.path')
                    ->latest('employees.created_at')
                    ->paginate(5);

        return view('admin.index', compact('documents'));
    }
    public function logout()
    {
            Session::flush();
            Auth::guard('employers')->logout();
            Auth::guard('employees')->logout();
            return redirect()->route('login');
    }
}

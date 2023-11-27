<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Document;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_email' => 'required|email',
            'forms' => 'required|array|min:1|max:2',
        ]);

        // Store the employee
        $employee = Employee::create([
            'email' => $validatedData['employee_email'],
            'forms' => implode(',', $validatedData['forms']),
        ]);

        if ($employee instanceof Employee) {
            // Generate the links
            $links = [];
            foreach ($validatedData['forms'] as $form) {
                $links[] = route('employee.link_generate', ['id' => $employee->id]);
            }

            // Store the links in the session
            return redirect()
                ->route('employee.create')
                ->with(['links' => $links, 'success' => 'Employee created successfully!']);
        }
    }


    public function link_generate($id)
    {
        $employee = Employee::find($id);

        if ($employee) {

            $link = route('employee.link_generate', ['id' => $employee->id]);

            return view('form.form', compact('employee', 'link'));

        }

        abort(404);
    }
    public function register($id)
    {
        $employee = Employee::find($id);
        //dd($employee);

        if (!$employee) {
            // Handle the case where the employee is not found
            return back()->with('error', 'Employee not found!');
        }

        return view('form.register', compact('employee'));
    }
    public function update($id, Request $request)
    {
    // Retrieve the employee
    $employee = Employee::find($id);

    if (!$employee) {
        // Handle the case where the employee is not found
        return back()->with('error', 'Employee not found!');
    }

    // Validate the request data
    $request->validate([
        'password' => 'required|min:8|confirmed',
        'password_confirmation' => 'required|same:password',
    ]);

    // Update the employee's password
    $employee->password = bcrypt($request->input('password')); // Use bcrypt to hash the password
    $employee->save();

    // Redirect to the login page with success message
    return redirect()->route('login')->with('success', 'Employee Registration Successfully. Login Here!');
    }

    public function show(Employee $employee){

        $documents = Document::with('employee')->where('id',$employee->id)->first();

        return view('employee.dashboard', compact('documents'));

    }

}

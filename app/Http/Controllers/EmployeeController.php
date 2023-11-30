<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Document;
use PhpParser\Comment\Doc;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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
            return back()->with('error', 'Employee not found!');
        }

        return view('form.register', compact('employee'));
    }
    public function update($id, Request $request)
    {
    // Retrieve the employee
    $employee = Employee::find($id);


    $request->validate([
        'password' => 'required|min:8|confirmed',
        'password_confirmation' => 'required|same:password',
    ]);


    $employee->password = bcrypt($request->input('password')); // Use bcrypt to hash the password
    $employee->save();
    // $employee = Employee::find($id);
    // dd($employee);
    Session::flush();
    Auth::logout();

    return redirect()->route('login')->with('success', 'Employee Registration Successfully. Login Here!');
    }

    public function show($id){
        $document = Document::where('employee_id', $id)->first();
        // dd($document);

        $documents = DB::table('documents')
        ->select('employee_id', 'path', DB::raw('GROUP_CONCAT(path) as paths'))
        ->where('employee_id', $id)
        ->groupBy('employee_id', 'path')
        ->get();

        foreach ($documents as $document) {
            $employee = Employee::find($document->employee_id);
            $document->email = $employee->email;
         }
         $firstDocument = $documents->first();
         $employee = Employee::find($firstDocument->employee_id);
        return view('employee.dashboard', compact('documents','employee'));

    //     $documents = DB::table('documents')
    //     ->select('employee_id', 'path', DB::raw('GROUP_CONCAT(path) as paths'))
    //     ->where('employee_id', $id)
    //     ->groupBy('employee_id', 'path')
    //     ->get();

    // if ($documents->isEmpty()) {
    //     // Handle the case where no documents are found for the given $id
    //     // For example, you might want to redirect or display an error message.
    //     return 'your.route.for.no.documents';
    // }

    // foreach ($documents as $documents) {
    //     $employee = Employee::find($documents->employee_id);
    //     $documents->email = $employee->email;
    // }


    // return view('employee.dashboard', compact('documents'));
    }

    public function downloadDocument($path)
    {
        $filePath = public_path("documents/{$path}");
        return response()->download($filePath);
    }
}

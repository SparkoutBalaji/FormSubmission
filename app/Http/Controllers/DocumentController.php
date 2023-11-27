<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;

class DocumentController extends Controller
{
    public function store(Request $request, $employeeId)
        {
            $employee = Employee::find($employeeId);

                if ($employee) {
                if (strpos($employee->forms, '1') !== false) {
                $pdf = PDF::loadView($employee->formsForFormNumber('1'));
                $filename = "form_one.$employeeId.pdf";
                $pdf->save(public_path('documents/' . $filename));

                $document = new Document();
                $document->path = 'documents/' . $filename;
                $document->employee_id = $employee->id;
                $document->save();
            }

            // Example for form_two
            if (strpos($employee->forms, '2') !== false) {
                $pdf = PDF::loadView($employee->formsForFormNumber('2'));
                $filename = "form_two.$employeeId.pdf";
                $pdf->save(public_path('documents/' . $filename));

                $document = new Document();
                $document->path = 'documents/' . $filename;
                $document->employee_id = $employee->id;
                $document->save();
            }

            // Example for form_three
            if (strpos($employee->forms, '3') !== false) {
                $pdf = PDF::loadView($employee->formsForFormNumber('3'));
                $filename = "form_three.$employeeId.pdf";
                $pdf->save(public_path('documents/' . $filename));

                $document = new Document();
                $document->path = 'documents/' . $filename;
                $document->employee_id = $employee->id;
                $document->save();
            }

            // You can redirect the user to a success page or return a response as needed
            return back()->with('success', 'Forms submitted successfully!');
        }
}
}

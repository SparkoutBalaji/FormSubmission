<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function store(Request $request, $employeeId)
        {
            $employee = Employee::find($employeeId);
            $employees = $request->all();
            $Forms = explode(',', $employee->forms);
            //dd($employees);
            if ($employee) {
                    //dd($employees);
                if (in_array('1', $Forms) !== false) {
                    $filename = 'form_one.' . $employeeId . '.pdf';

                    $directory = public_path('documents');

                    // Check if the directory exists, if not, create it
                    if (!is_dir($directory)) {
                        mkdir($directory, 0777, true);
                    }

                    $pdf = FacadePdf::loadView("form.form_two", compact('employees'));

                    // Specify the full path including the filename
                    $filePath = $directory . '/' . $filename;

                    $pdf->save($filePath);

                    $document = new Document();
                    $document->path = 'documents/' . $filename;
                    $document->employee_id = $employee->id;
                    $document->save();

            }

            // Example for form_two
            if (in_array('2', $Forms) !== false) {
                $filename = 'form_two.' . $employeeId . '.pdf';

                    $directory = public_path('documents');

                    // Check if the directory exists, if not, create it
                    if (!is_dir($directory)) {
                        mkdir($directory, 0777, true);
                    }

                    $pdf = FacadePdf::loadView("form.form_two", compact('employees'));

                    // Specify the full path including the filename
                    $filePath = $directory . '/' . $filename;

                    $pdf->save($filePath);

                    $document = new Document();
                    $document->path = 'documents/' . $filename;
                    $document->employee_id = $employee->id;
                    $document->save();

            }

            // Example for form_three
            if (in_array('3', $Forms) !== false) {
                $filename = 'form_three.' . $employeeId . '.pdf';

                    $directory = public_path('documents');

                    // Check if the directory exists, if not, create it
                    if (!is_dir($directory)) {
                        mkdir($directory, 0777, true);
                    }

                    $pdf = FacadePdf::loadView("form.form_two", compact('employees'));

                    // Specify the full path including the filename
                    $filePath = $directory . '/' . $filename;

                    $pdf->save($filePath);

                    $document = new Document();
                    $document->path = 'documents/' . $filename;
                    $document->employee_id = $employee->id;
                    $document->save();
            }

            // You can redirect the user to a success page or return a response as needed
            return back()->with('success', 'Forms submitted successfully!');
        }
    }
    public function viewDocument($id){
        $document = Document::where('employee_id', $id)->first();

        if (!$document) {
            return response()->json(['error' => 'Document not found'], 404);
        }

        $fileContent = Storage::get($document->path);

        $pdf = FacadePdf::loadView('documents.view', compact('fileContent'));

        return $pdf->stream('document.pdf');
    }
    public function downloadDocument($path) {
        // Validate $path, if necessary
        $filePath = public_path($path);
        return response()->download($filePath);
    }
}

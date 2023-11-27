<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'forms',
    ];
    public function formsForFormNumber($formNumber)
    {
    // Implement your logic to return the view name based on the form number
    switch ($formNumber) {
        case '1':
            return "form.form_one";
        case '2':
            return "form.form_two";
        case '3':
            return "form.form_three";
        // Add more cases as needed
        default:
            return null; // or throw an exception, depending on your requirements
    }
}
}

@extends('admin.dashboard')
@section('title','Create Employee')
@section('main')
@php
    $groupedDocuments = $documents->groupBy('employee.id');
@endphp

@foreach($groupedDocuments as $employeeId => $employeeDocuments)
    <div>
        <strong>Employee ID:</strong> {{ $employeeId }}
        <br>
        <strong>Email:</strong> {{ $employeeDocuments[0]->employee->email }}
        <br>
        <strong>Document Paths:</strong>
        @foreach($employeeDocuments->pluck('path') as $path)
            {{ $path }},
        @endforeach
    </div>
    <hr>
@endforeach
@endsection

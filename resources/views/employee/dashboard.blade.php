@extends('layout.frame')
@section('title','Employee Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar sidebar-custom" style="background-color: skyblue !important;">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('employee.document') }}">
                            Document
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
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
        </div>
</div>

@endsection

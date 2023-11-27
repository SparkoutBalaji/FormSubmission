@extends('layout.frame')
@section('title','Employer Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar sidebar-custom" style="background-color: skyblue !important;">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('employee.create') }}">
                            Add Employee
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive" href="{{ route('employees.document') }}">
                            Document List
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('main')

    </div>
</div>
@endsection

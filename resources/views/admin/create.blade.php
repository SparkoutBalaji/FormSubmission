@extends('admin.dashboard')
@section('title','Create Employee')
@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Employee</h1>
    </div>

    <form method="POST" action="{{ route('employee.store') }}">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <label for="employee">Employee Email</label>
                        <input type="email" name="employee_email" id="employee_email" required>
                        <br>
                        <label for="forms">Select Forms</label> <br>
                        <input type="checkbox" name="forms[]" value="1">1 <br>
                        <input type="checkbox" name="forms[]" value="2">2 <br>
                        <input type="checkbox" name="forms[]" value="3">3 <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <input type="submit" value="Create Employee" class="btn btn-success">
        </div>
    </form>
</main>
@if(session()->has('links'))
    <h3>Generated Link :</h3>
    <ul>
        @foreach (session('links') as $link)
            <li><a href="{{ $link }}">{{ $link }}</a></li>
        @endforeach
    </ul>
@endif

@endsection

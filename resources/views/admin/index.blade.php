@extends('admin.dashboard')
@section('title','Create Employee')
@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Employee's Document's</h1>
    </div>
    @php
        $groupedDocuments = $documents->groupBy('employee_id');
    @endphp

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Employee ID</th>
                    <th>Email</th>
                    <th>Document Paths</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $key => $document)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $document->employee_id }}</td>
                <td>{{ $document->email }}</td>
                <td>{{ $document->path ?: 'No Document Paths' }}</td>
                <td>@if ($document->path)
                        <a href="{{ asset($document->path) }}" class="btn btn-primary" download>Download</a>

                    @if ($document->employee_id)
                        <a href="{{ route('view.document', ['id' => $document->employee_id ?? '']) }}" class="btn btn-secondary">View</a>
                    @else
                        <span class="btn btn-secondary disabled">View</span>
                    @endif
                    <br><br>
                    @endif
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>
        {{ $documents->links() }}
    </div>
</main>
@endsection

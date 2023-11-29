@extends('layout.frame')
@section('title', 'Employee Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar sidebar-custom" style="background-color: skyblue !important;">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </nav>
        {{-- {{ dd($documents) }} --}}
        @if($documents)
   <table class="table table-bordered">
       <thead>
           <tr>
               <th>#</th>
               <th>Employee EMAIL</th>
               <th>Document Paths</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>
           @foreach($documents as $employeeDocument)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $employeeDocument->email }}</td>
                  <td>
                      @foreach(explode(',', $employeeDocument->paths) as $path)
                          <a href="{{ route('download.document', ['path' => $path]) }}" download="{{ basename($path) }}">
                              {{ $path }}
                          </a>
                          <br>
                      @endforeach
                  </td>
                  <td>
                      @foreach(explode(',', $employeeDocument->paths) as $path)
                          <a href="{{ route('download.document', ['path' => $path]) }}" class="btn btn-primary" download>Download</a>
                          <a href="{{ route('view.document', ['id' => $employeeDocument->employee_id]) }}" class="btn btn-secondary">View</a>
                          <br>
                      @endforeach
                  </td>
               </tr>
           @endforeach
       </tbody>
   </table>
@endif
    </div>
</div>

@endsection

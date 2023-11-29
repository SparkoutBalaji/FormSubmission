    <div class="container mt-5">
        <form action="{{ route('post.form', ['id' => $employee->id]) }}" method="POST">

            @csrf
            @if (strpos($employee->forms, '1') !== false)
                @include('form.form_one')
            @endif

            @if (strpos($employee->forms, '2') !== false)
                @include('form.form_two')
            @endif

            @if (strpos($employee->forms, '3') !== false)
                @include('form.form_three')
            @endif

            <div class="row pb-2">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <a href="{{ route('register.form', ['id' => $employee->id]) }}"><button class="btn btn-success">Register Here</button></a>
            </div>
            @endif
    </div>

</body>
</html>

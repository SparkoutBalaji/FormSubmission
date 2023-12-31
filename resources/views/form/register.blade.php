<form action="{{ route('registration.update', ['employeeId' => $employee->id]) }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $employee->email }}" readonly>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <div class="row pb-2">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update Password</button>
        </div>
    </div>
</form>
</div>

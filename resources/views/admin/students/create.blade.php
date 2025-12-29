@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-0 fw-bold">Add New Student</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="{{ route('admin.students.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password_field" minlength="8" placeholder="Enter password or leave empty to auto-generate">
                                <small class="text-muted">Leave empty to auto-generate a password</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" name="generate_credentials" id="generate_credentials" value="1">
                                    <label class="form-check-label" for="generate_credentials">
                                        Auto-generate Password (ignores password field above)
                                    </label>
                                </div>
                                <small class="text-muted">If checked, a random password will be generated. Email is required.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-select" name="country" id="country">
                                    <option value="">Select Country</option>
                                    @foreach(config('countries.countries') as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status *</label>
                                <select class="form-select" name="status" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="pending">Pending</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const generateCheckbox = document.getElementById('generate_credentials');
    const passwordField = document.getElementById('password_field');
    
    if (generateCheckbox && passwordField) {
        generateCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordField.disabled = true;
                passwordField.placeholder = 'Password will be auto-generated';
            } else {
                passwordField.disabled = false;
                passwordField.placeholder = 'Enter password or leave empty to auto-generate';
            }
        });
    }
});
</script>
@endpush
@endsection

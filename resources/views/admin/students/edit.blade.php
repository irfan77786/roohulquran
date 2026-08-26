@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-0 fw-bold">Edit Student</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="{{ route('admin.students.update', $student) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" minlength="8" placeholder="Leave empty to keep current password">
                                <small class="text-muted">Only enter if you want to change the password</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $student->phone }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-select" name="country" id="country">
                                    <option value="">Select Country</option>
                                    @foreach(config('countries.countries') as $country)
                                        <option value="{{ $country }}" {{ $student->country === $country ? 'selected' : '' }}>{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status *</label>
                                <select class="form-select" name="status" required>
                                    <option value="active" {{ $student->status === 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $student->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    <option value="pending" {{ $student->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="suspended" {{ $student->status === 'suspended' ? 'selected' : '' }}>Suspended</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('student.main')

@section('title', 'My Profile')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>My Profile</h2>
                <p>Manage your account information and settings</p>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Profile Information -->
        <div class="col-lg-8 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5><i class="ti ti-user me-2"></i>Personal Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.profile.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control" value="{{ $student->email }}" disabled>
                                <small class="text-muted">Email cannot be changed. Contact support if needed.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" placeholder="Enter phone number">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">WhatsApp Number</label>
                                <input type="text" class="form-control" name="whatsapp" value="{{ $student->whatsapp }}" placeholder="Enter WhatsApp number">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">City</label>
                                <input type="text" class="form-control" name="city" value="{{ $student->city }}" placeholder="Enter city">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Gender</label>
                                <select class="form-select" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ $student->gender === 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $student->gender === 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" value="{{ $student->date_of_birth ? $student->date_of_birth->format('Y-m-d') : '' }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Guardian Name</label>
                                <input type="text" class="form-control" name="guardian_name" value="{{ $student->guardian_name }}" placeholder="Enter guardian name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Guardian Phone</label>
                                <input type="text" class="form-control" name="guardian_phone" value="{{ $student->guardian_phone }}" placeholder="Enter guardian phone">
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-device-floppy me-2"></i>Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Profile Sidebar -->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <div class="avatar-lg bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 120px; height: 120px; font-size: 3rem; font-weight: 700;">
                        {{ strtoupper(substr($student->name, 0, 1)) }}
                    </div>
                    <h4 class="mb-1">{{ $student->name }}</h4>
                    <p class="text-muted mb-3">{{ $student->email }}</p>
                    <span class="badge bg-{{ $student->status === 'active' ? 'success' : 'secondary' }} px-3 py-2">
                        <i class="ti ti-{{ $student->status === 'active' ? 'check-circle' : 'clock' }} me-1"></i>
                        {{ ucfirst($student->status) }} Account
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5><i class="ti ti-info-circle me-2"></i>Account Details</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 pb-3 border-bottom">
                        <small class="text-muted d-block mb-1">Phone Number</small>
                        <strong>{{ $student->phone ?? 'Not provided' }}</strong>
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                        <small class="text-muted d-block mb-1">City</small>
                        <strong>{{ $student->city ?? 'Not provided' }}</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Member Since</small>
                        <strong>{{ $student->created_at->format('M d, Y') }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

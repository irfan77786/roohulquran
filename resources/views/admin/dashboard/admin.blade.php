@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-0 fw-bold">Admin Dashboard</h3>
            <p class="text-muted mb-0">Overview of all system activities</p>
        </div>
    </div>

    {{-- Statistics Cards Row --}}
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:book-bold-duotone" class="fs-1 text-primary"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Trial Classes</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_trial_classes'] }}</h3>
                            <small class="text-success">
                                <i class="ti ti-arrow-up"></i> {{ $stats['today_trial_classes'] }} today
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-success bg-opacity-10 rounded">
                            <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="fs-1 text-success"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Users</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_users'] }}</h3>
                            <small class="text-primary">
                                <i class="ti ti-check"></i> {{ $stats['active_users'] }} active
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-info bg-opacity-10 rounded">
                            <iconify-icon icon="solar:graduation-bold-duotone" class="fs-1 text-info"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Students</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_students'] }}</h3>
                            <small class="text-success">
                                <i class="ti ti-check"></i> {{ $stats['active_students'] }} active
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-warning bg-opacity-10 rounded">
                            <iconify-icon icon="solar:teacher-bold-duotone" class="fs-1 text-warning"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Teachers</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_teachers'] }}</h3>
                            <small class="text-success">
                                <i class="ti ti-check"></i> {{ $stats['active_teachers'] }} active
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-secondary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:document-bold-duotone" class="fs-1 text-secondary"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Courses</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_courses'] }}</h3>
                            <small class="text-success">
                                <i class="ti ti-check"></i> {{ $stats['active_courses'] }} active
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-dark bg-opacity-10 rounded">
                            <iconify-icon icon="solar:article-bold-duotone" class="fs-1 text-dark"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Blogs</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_blogs'] }}</h3>
                            <small class="text-primary">
                                <i class="ti ti-check"></i> {{ $stats['published_blogs'] }} published
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Activities --}}
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Recent Users</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recent_users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <span class="badge bg-{{ $user->status === 'active' ? 'success' : 'secondary' }}">
                                            {{ ucfirst($user->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No users yet</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Recent Trial Classes</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recent_classes as $class)
                                <tr>
                                    <td>{{ $class->name }}</td>
                                    <td>{{ $class->email ?? '-' }}</td>
                                    <td>{{ $class->country ?? '-' }}</td>
                                    <td>{{ $class->created_at->diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No trial classes yet</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


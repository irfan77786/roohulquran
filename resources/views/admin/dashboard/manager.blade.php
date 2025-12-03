@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-0 fw-bold">Manager Dashboard</h3>
            <p class="text-muted mb-0">Operations overview and management</p>
        </div>
    </div>

    {{-- Statistics Cards Row --}}
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:graduation-bold-duotone" class="fs-1 text-primary"></iconify-icon>
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
                        <div class="p-3 bg-info bg-opacity-10 rounded">
                            <iconify-icon icon="solar:document-bold-duotone" class="fs-1 text-info"></iconify-icon>
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
                        <div class="p-3 bg-success bg-opacity-10 rounded">
                            <iconify-icon icon="solar:clipboard-list-bold-duotone" class="fs-1 text-success"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Pending Enrollments</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['pending_enrollments'] }}</h3>
                            <small class="text-warning">Requires attention</small>
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
                    <h5 class="mb-0">Recent Enrollments</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recent_enrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->student_name }}</td>
                                    <td>{{ $enrollment->course_name }}</td>
                                    <td>
                                        <span class="badge bg-{{ $enrollment->status === 'active' ? 'success' : 'warning' }}">
                                            {{ ucfirst($enrollment->status) }}
                                        </span>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($enrollment->created_at)->diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No enrollments yet</td>
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
                    <h5 class="mb-0">Upcoming Classes</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Scheduled</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($upcoming_classes as $class)
                                <tr>
                                    <td>{{ $class->course_name }}</td>
                                    <td>{{ $class->teacher_name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($class->scheduled_at)->format('M d, Y H:i') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">No upcoming classes</td>
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


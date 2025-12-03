@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-0 fw-bold">Student Dashboard</h3>
            <p class="text-muted mb-0">Your courses and progress overview</p>
        </div>
    </div>

    {{-- Statistics Cards Row --}}
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:document-bold-duotone" class="fs-1 text-primary"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">My Enrollments</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['my_enrollments'] }}</h3>
                            <small class="text-info">Total courses</small>
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
                            <iconify-icon icon="solar:book-bookmark-bold-duotone" class="fs-1 text-success"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Active Courses</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['active_courses'] }}</h3>
                            <small class="text-primary">Currently enrolled</small>
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
                            <iconify-icon icon="solar:check-circle-bold-duotone" class="fs-1 text-info"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Completed</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['completed_courses'] }}</h3>
                            <small class="text-success">Finished courses</small>
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
                            <iconify-icon icon="solar:calendar-mark-bold-duotone" class="fs-1 text-warning"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Upcoming Classes</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['upcoming_classes'] }}</h3>
                            <small class="text-warning">Scheduled ahead</small>
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
                    <h5 class="mb-0">My Enrollments</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th>Enrolled</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($my_enrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->course->name ?? 'N/A' }}</td>
                                    <td>
                                        <span class="badge bg-{{ $enrollment->status === 'active' ? 'success' : ($enrollment->status === 'completed' ? 'info' : 'warning') }}">
                                            {{ ucfirst($enrollment->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $enrollment->created_at->diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">No enrollments yet</td>
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
                                    <th>Scheduled</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($upcoming_classes as $class)
                                <tr>
                                    <td>{{ $class->course_name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($class->scheduled_at)->format('M d, Y H:i') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center text-muted">No upcoming classes</td>
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


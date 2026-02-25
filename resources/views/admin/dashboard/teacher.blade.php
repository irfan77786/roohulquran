@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-0 fw-bold">Teacher Dashboard</h3>
            <p class="text-muted mb-0">Your classes and students overview</p>
        </div>
    </div>

    {{-- Statistics Cards Row --}}
    <div class="row mb-4">
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:calendar-bold-duotone" class="fs-1 text-primary"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Classes Today</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['my_classes_today'] }}</h3>
                            <small class="text-info">Scheduled for today</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-success bg-opacity-10 rounded">
                            <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="fs-1 text-success"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Students</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['my_total_students'] }}</h3>
                            <small class="text-primary">Enrolled in your classes</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-info bg-opacity-10 rounded">
                            <iconify-icon icon="solar:calendar-mark-bold-duotone" class="fs-1 text-info"></iconify-icon>
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
                    <h5 class="mb-0">My Upcoming Classes</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Scheduled</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($my_classes as $class)
                                <tr>
                                    <td>{{ $class->course_name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($class->scheduled_at)->format('M d, Y H:i') }}</td>
                                    <td>
                                        <span class="badge bg-{{ $class->status === 'scheduled' ? 'primary' : 'secondary' }}">
                                            {{ ucfirst($class->status) }}
                                        </span>
                                    </td>
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

        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Recent Attendance</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recent_attendance as $attendance)
                                <tr>
                                    <td>{{ $attendance->student_name }}</td>
                                    <td>
                                        <span class="badge bg-{{ $attendance->status === 'present' ? 'success' : ($attendance->status === 'absent' ? 'danger' : 'warning') }}">
                                            {{ ucfirst($attendance->status) }}
                                        </span>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($attendance->created_at)->diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">No attendance records yet</td>
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


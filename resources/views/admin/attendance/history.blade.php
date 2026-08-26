@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Attendance History</h3>
                    <p class="text-muted mb-0">View and filter attendance records</p>
                </div>
                <a href="{{ route('admin.attendance.index') }}" class="btn btn-primary">
                    <i class="ti ti-plus"></i> Mark Attendance
                </a>
            </div>
        </div>
    </div>

    {{-- Statistics Cards --}}
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-success bg-opacity-10 rounded">
                            <i class="ti ti-check text-success fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Present</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['present'] }}</h3>
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
                            <i class="ti ti-clock text-warning fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Late</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['late'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-danger bg-opacity-10 rounded">
                            <i class="ti ti-x text-danger fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Absent</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['absent'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-primary bg-opacity-10 rounded">
                            <i class="ti ti-percentage text-primary fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Attendance Rate</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['attendance_rate'] }}%</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Filters --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.attendance.history') }}">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Student</label>
                                <select class="form-select" name="student_id">
                                    <option value="">All Students</option>
                                    @foreach($students as $student)
                                        <option value="{{ $student->id }}" {{ $studentId == $student->id ? 'selected' : '' }}>
                                            {{ $student->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Session</label>
                                <select class="form-select" name="session_id">
                                    <option value="">All Sessions</option>
                                    @foreach($sessions as $session)
                                        <option value="{{ $session->id }}" {{ $sessionId == $session->id ? 'selected' : '' }}>
                                            {{ $session->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date" value="{{ $startDate }}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date" value="{{ $endDate }}">
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="ti ti-filter"></i> Filter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Attendance Table --}}
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Date</th>
                                    <th>Student</th>
                                    <th>Session</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attendance as $record)
                                <tr>
                                    <td>
                                        <span class="fw-medium">{{ \Carbon\Carbon::parse($record->date)->format('d M Y') }}</span>
                                        <small class="text-muted d-block">{{ \Carbon\Carbon::parse($record->date)->format('l') }}</small>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs bg-primary bg-opacity-10 rounded">
                                                <span class="text-primary">{{ strtoupper(substr($record->student->name ?? 'N/A', 0, 1)) }}</span>
                                            </div>
                                            <span class="ms-2 fw-medium">{{ $record->student->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $record->classSession->name }}</td>
                                    <td>{{ $record->classSession->course->name }}</td>
                                    <td>{{ $record->classSession->teacher->name ?? 'TBA' }}</td>
                                    <td>
                                        <span class="badge bg-{{ str_replace(['present', 'late', 'absent', 'excused'], ['success', 'warning', 'danger', 'info'], $record->status) }}">
                                            {{ ucfirst($record->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $record->time ? \Carbon\Carbon::parse($record->time)->format('h:i A') : '-' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {!! $attendance->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



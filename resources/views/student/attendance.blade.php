@extends('student.main')

@section('title', 'Attendance')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>Attendance Records</h2>
                <p>Track your class attendance and participation</p>
            </div>
        </div>
    </div>

    <!-- Attendance Statistics -->
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xs bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <iconify-icon icon="solar:calendar-bold-duotone" class="text-primary" style="font-size: 1.5rem;"></iconify-icon>
                        </div>
                        <div>
                            <small class="text-muted d-block">Total Classes</small>
                            <h4 class="mb-0 fw-bold text-primary">{{ $stats['total'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xs bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <iconify-icon icon="solar:check-circle-bold-duotone" class="text-success" style="font-size: 1.5rem;"></iconify-icon>
                        </div>
                        <div>
                            <small class="text-muted d-block">Present</small>
                            <h4 class="mb-0 fw-bold text-success">{{ $stats['present'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xs bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <iconify-icon icon="solar:close-circle-bold-duotone" class="text-danger" style="font-size: 1.5rem;"></iconify-icon>
                        </div>
                        <div>
                            <small class="text-muted d-block">Absent</small>
                            <h4 class="mb-0 fw-bold text-danger">{{ $stats['absent'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xs bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <iconify-icon icon="solar:clock-circle-bold-duotone" class="text-warning" style="font-size: 1.5rem;"></iconify-icon>
                        </div>
                        <div>
                            <small class="text-muted d-block">Late</small>
                            <h4 class="mb-0 fw-bold text-warning">{{ $stats['late'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="ti ti-filter me-2"></i>Filters</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('student.attendance') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="present" {{ request('status') == 'present' ? 'selected' : '' }}>Present</option>
                                    <option value="late" {{ request('status') == 'late' ? 'selected' : '' }}>Late</option>
                                    <option value="absent" {{ request('status') == 'absent' ? 'selected' : '' }}>Absent</option>
                                    <option value="excused" {{ request('status') == 'excused' ? 'selected' : '' }}>Excused</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">Course</label>
                                <select class="form-select form-select-sm" name="course_id">
                                    <option value="">All Courses</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}" {{ request('course_id') == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Date From</label>
                                <input type="date" class="form-control form-control-sm" name="date_from" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Date To</label>
                                <input type="date" class="form-control form-control-sm" name="date_to" value="{{ request('date_to') }}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">&nbsp;</label>
                                <button type="submit" class="btn btn-sm btn-primary w-100">
                                    <i class="ti ti-filter"></i>
                                </button>
                            </div>
                            @php
                                $hasFilters = request()->filled('status') || request()->filled('course_id') || request()->filled('date_from') || request()->filled('date_to');
                            @endphp
                            @if($hasFilters)
                            <div class="col-md-12">
                                <a href="{{ route('student.attendance') }}" class="btn btn-sm btn-outline-secondary">
                                    <i class="ti ti-x me-1"></i>Clear Filters
                                </a>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Attendance Rate Card -->
    @if($stats['total'] > 0)
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h5 class="mb-1">Overall Attendance Rate</h5>
                            <p class="text-muted mb-0">Based on {{ $stats['total'] }} total classes</p>
                        </div>
                        <div class="text-end">
                            <h3 class="mb-0 fw-bold text-primary">
                                {{ round(($stats['present'] / $stats['total']) * 100) }}%
                            </h3>
                        </div>
                    </div>
                    <div class="progress" style="height: 12px;">
                        <div class="progress-bar bg-success" role="progressbar" 
                             style="width: {{ round(($stats['present'] / $stats['total']) * 100) }}%"
                             aria-valuenow="{{ round(($stats['present'] / $stats['total']) * 100) }}" 
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5><i class="ti ti-clipboard-check me-2"></i>Attendance History</h5>
                </div>
                <div class="card-body">
                    @if($attendance->count() > 0)
                        <div class="table-responsive">
                            <table class="table" id="attendanceTable">
                                <thead>
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attendance as $record)
                                    <tr>
                                        <td>
                                            <div>
                                                <strong>{{ \App\Helpers\TimezoneHelper::formatForStudent($record->date, $student->country ?? null, 'M d, Y') }}</strong>
                                                @if($record->time)
                                                    <br><small class="text-muted">
                                                        <i class="ti ti-clock me-1"></i>{{ \App\Helpers\TimezoneHelper::formatForStudent($record->time, $student->country ?? null, 'h:i A') }}
                                                    </small>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                                                    <iconify-icon icon="solar:book-bold-duotone" class="text-info"></iconify-icon>
                                                </div>
                                                <span>{{ $record->classSession->course->name ?? 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $record->status === 'present' ? 'success' : ($record->status === 'late' ? 'warning' : 'danger') }}">
                                                <i class="ti ti-{{ $record->status === 'present' ? 'check-circle' : ($record->status === 'late' ? 'clock' : 'x-circle') }} me-1"></i>
                                                {{ ucfirst($record->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <small class="text-muted">{{ $record->remarks ?? 'No remarks' }}</small>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <iconify-icon icon="solar:clipboard-check-bold-duotone"></iconify-icon>
                            <h5>No Attendance Records Found</h5>
                            <p>Your attendance records will appear here once classes begin</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#attendanceTable').DataTable({
            pageLength: 15,
            order: [[0, 'desc']],
            language: {
                search: "Search records:",
                lengthMenu: "Show _MENU_ records per page",
                info: "Showing _START_ to _END_ of _TOTAL_ records",
                paginate: {
                    previous: "<i class='ti ti-chevron-left'></i>",
                    next: "<i class='ti ti-chevron-right'></i>"
                }
            }
        });
    });
</script>
@endpush
@endsection

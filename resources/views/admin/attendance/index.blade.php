@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Mark Attendance</h3>
                    <p class="text-muted mb-0">Mark daily attendance for students</p>
                </div>
                <a href="{{ route('admin.attendance.history') }}" class="btn btn-outline-primary">
                    <i class="ti ti-history"></i> View History
                </a>
            </div>
        </div>
    </div>

    {{-- Filters --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.attendance.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Select Course</label>
                                <select class="form-select" name="course_id" id="course_select" onchange="filterForm.submit()">
                                    <option value="">Choose a course...</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}" {{ $courseId == $course->id ? 'selected' : '' }}>
                                            {{ $course->name }} @if($course->level) - {{ $course->level }} @endif
                                        </option>
                                    @endforeach
                                </select>
                                @if($courses->isEmpty())
                                <small class="text-danger d-block mt-1">
                                    <i class="ti ti-alert-circle"></i> No courses found. 
                                    <a href="{{ route('admin.courses.index') }}" target="_blank">Create one here</a>
                                </small>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" value="{{ $selectedDate }}" onchange="filterForm.submit()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if($selectedCourse)
    {{-- Attendance Marking Interface --}}
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h5 class="mb-0 fw-bold">{{ $selectedCourse->name }}</h5>
                            <p class="text-muted mb-0">
                                @if($selectedCourse->level) Level: {{ $selectedCourse->level }} | @endif
                                {{ \Carbon\Carbon::parse($selectedDate)->format('l, F d, Y') }} | 
                                Total Students: {{ $enrollments->count() }}
                            </p>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-success" onclick="markAllPresent()">
                                <i class="ti ti-check"></i> Mark All Present
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="markAllAbsent()">
                                <i class="ti ti-x"></i> Mark All Absent
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="25%">Student</th>
                                    <th width="20%">Status</th>
                                    <th width="20%">Time</th>
                                    <th width="30%" class="text-center">Quick Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enrollments as $enrollment)
                                    @php
                                        $currentAttendance = $attendanceRecords[$enrollment->student_id] ?? null;
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-primary bg-opacity-10 rounded">
                                                    <span class="text-primary">{{ strtoupper(substr($enrollment->student->name ?? 'N/A', 0, 1)) }}</span>
                                                </div>
                                                <span class="ms-2 fw-medium">{{ $enrollment->student->name }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge attendance-badge badge-{{ $currentAttendance ? str_replace(['present', 'late', 'absent', 'excused'], ['success', 'warning', 'danger', 'info'], $currentAttendance->status) : 'secondary' }}" id="badge-{{ $enrollment->student_id }}">
                                                {{ $currentAttendance ? ucfirst($currentAttendance->status) : 'Not Marked' }}
                                            </span>
                                        </td>
                                        <td id="time-{{ $enrollment->student_id }}">
                                            @if($currentAttendance && $currentAttendance->time)
                                                {{ \Carbon\Carbon::parse($currentAttendance->time)->format('h:i A') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-success" onclick="markAttendance({{ $enrollment->student_id }}, 'present')" title="Present">
                                                    <i class="ti ti-check"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" onclick="markAttendance({{ $enrollment->student_id }}, 'late')" title="Late">
                                                    <i class="ti ti-clock"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" onclick="markAttendance({{ $enrollment->student_id }}, 'absent')" title="Absent">
                                                    <i class="ti ti-x"></i>
                                                </button>
                                                <button type="button" class="btn btn-info" onclick="markAttendance({{ $enrollment->student_id }}, 'excused')" title="Excused">
                                                    <i class="ti ti-checkbox"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center py-5">
                    <iconify-icon icon="solar:book-bookmark-bold-duotone" class="fs-1 text-muted mb-3"></iconify-icon>
                    <h5 class="text-muted">Select a Course to Mark Attendance</h5>
                    <p class="text-muted">Choose a course from the dropdown above to view enrolled students and mark their attendance.</p>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@push('scripts')
<script>
const selectedCourseId = {{ $selectedCourse ? $selectedCourse->id : 'null' }};
const selectedDate = '{{ $selectedDate }}';

function markAttendance(studentId, attendanceStatus) {
    const data = {
        student_id: studentId,
        course_id: selectedCourseId,
        date: selectedDate,
        status: attendanceStatus,
        _token: '{{ csrf_token() }}'
    };

    fetch('{{ route("admin.attendance.mark") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        return response.json().then(responseData => {
            return { httpStatus: response.status, data: responseData };
        });
    })
    .then(({ httpStatus, data }) => {
        if (data.success) {
            updateBadge(studentId, attendanceStatus);
            if (data.updated) {
                showToast(data.message || 'Attendance updated successfully', 'success');
            } else {
                showToast('Attendance marked successfully', 'success');
            }
        } else {
            // Handle already marked attendance
            if (data.already_marked) {
                showToast(data.message || 'Attendance already marked for today\'s session', 'warning');
            } else {
                showToast(data.message || 'Failed to mark attendance', 'error');
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('Failed to mark attendance', 'error');
    });
}

function updateBadge(studentId, status) {
    const badge = document.getElementById('badge-' + studentId);
    const timeCell = document.getElementById('time-' + studentId);
    
    if (!badge || !timeCell) {
        console.error('Badge or time cell not found for student:', studentId);
        return;
    }
    
    // Ensure status is a string
    if (typeof status !== 'string') {
        console.error('Status is not a string:', status, typeof status);
        status = String(status);
    }
    
    // Remove old badge classes
    badge.className = 'badge attendance-badge';
    
    // Status colors mapping
    const statusColors = {
        'present': 'success',
        'late': 'warning',
        'absent': 'danger',
        'excused': 'info'
    };
    
    const statusColor = statusColors[status] || 'secondary';
    badge.classList.add('badge-' + statusColor);
    badge.textContent = status.charAt(0).toUpperCase() + status.slice(1);
    
    // Update time
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const ampm = hours >= 12 ? 'PM' : 'AM';
    const displayHours = hours % 12 || 12;
    timeCell.textContent = `${displayHours}:${minutes.toString().padStart(2, '0')} ${ampm}`;
}

function markAllPresent() {
    showConfirm('Mark All Present?', 'Mark all students as present?', 'Yes, Mark All', 'Cancel').then((result) => {
        if (result.isConfirmed) {
            const presentButtons = document.querySelectorAll('[onclick*="markAttendance"][onclick*="present"]');
            presentButtons.forEach(btn => btn.click());
        }
    });
}

function markAllAbsent() {
    showConfirm('Mark All Absent?', 'Mark all students as absent?', 'Yes, Mark All', 'Cancel').then((result) => {
        if (result.isConfirmed) {
            const absentButtons = document.querySelectorAll('[onclick*="markAttendance"][onclick*="absent"]');
            absentButtons.forEach(btn => btn.click());
        }
    });
}

function showToast(message, type) {
    // Simple toast notification
    const toast = document.createElement('div');
    let alertClass = 'alert-info';
    if (type === 'success') {
        alertClass = 'alert-success';
    } else if (type === 'error' || type === 'danger') {
        alertClass = 'alert-danger';
    } else if (type === 'warning') {
        alertClass = 'alert-warning';
    }
    
    toast.className = `alert ${alertClass} position-fixed shadow-lg`;
    toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px; padding: 15px 20px; border-radius: 8px;';
    toast.innerHTML = `<i class="ti ti-${type === 'success' ? 'check-circle' : (type === 'warning' ? 'alert-triangle' : 'x-circle')} me-2"></i>${message}`;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.style.transition = 'opacity 0.3s';
        toast.style.opacity = '0';
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3000);
}
</script>
@endpush
@endsection

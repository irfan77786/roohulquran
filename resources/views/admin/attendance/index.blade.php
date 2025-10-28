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
                                <label class="form-label">Select Session</label>
                                <select class="form-select" name="session_id" id="session_select" onchange="filterForm.submit()">
                                    <option value="">Choose a session...</option>
                                    @foreach($sessions as $session)
                                        <option value="{{ $session->id }}" {{ $classSessionId == $session->id ? 'selected' : '' }}>
                                            {{ $session->name }} - {{ $session->course->name ?? 'N/A' }} ({{ $session->day_of_week }})
                                        </option>
                                    @endforeach
                                </select>
                                @if($sessions->isEmpty())
                                <small class="text-danger d-block mt-1">
                                    <i class="ti ti-alert-circle"></i> No sessions found. 
                                    <a href="{{ route('admin.sessions.index') }}" target="_blank">Create one here</a>
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

    @if($selectedSession)
    {{-- Attendance Marking Interface --}}
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h5 class="mb-0 fw-bold">{{ $selectedSession->name }}</h5>
                            <p class="text-muted mb-0">
                                {{ $selectedSession->course->name }} | 
                                Teacher: {{ $selectedSession->teacher->name ?? 'TBA' }} | 
                                {{ \Carbon\Carbon::parse($selectedDate)->format('l, F d, Y') }}
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
                                            {{ $currentAttendance ? $currentAttendance->time : '-' }}
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
                    <iconify-icon icon="solar:calendar-add-bold-duotone" class="fs-1 text-muted mb-3"></iconify-icon>
                    <h5 class="text-muted">Select a Session to Mark Attendance</h5>
                    <p class="text-muted">Choose a class session from the dropdown above to begin marking attendance.</p>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@push('scripts')
<script>
const selectedSessionId = {{ $selectedSession ? $selectedSession->id : 'null' }};
const selectedDate = '{{ $selectedDate }}';

function markAttendance(studentId, status) {
    const data = {
        student_id: studentId,
        class_session_id: selectedSessionId,
        date: selectedDate,
        status: status,
        _token: '{{ csrf_token() }}'
    };

    fetch('{{ route("admin.attendance.mark") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateBadge(studentId, status);
            showToast('Attendance marked successfully', 'success');
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
    
    // Remove old badge classes
    badge.className = 'badge attendance-badge';
    
    // Status colors mapping
    const statusColors = {
        'present': 'success',
        'late': 'warning',
        'absent': 'danger',
        'excused': 'info'
    };
    
    badge.classList.add('badge-' + statusColors[status]);
    badge.textContent = status.charAt(0).toUpperCase() + status.slice(1);
    
    // Update time
    const now = new Date();
    timeCell.textContent = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
}

function markAllPresent() {
    if (confirm('Mark all students as present?')) {
        const presentButtons = document.querySelectorAll('[onclick*="markAttendance"][onclick*="present"]');
        presentButtons.forEach(btn => btn.click());
    }
}

function markAllAbsent() {
    if (confirm('Mark all students as absent?')) {
        const absentButtons = document.querySelectorAll('[onclick*="markAttendance"][onclick*="absent"]');
        absentButtons.forEach(btn => btn.click());
    }
}

function showToast(message, type) {
    // Simple toast notification
    const toast = document.createElement('div');
    toast.className = `alert alert-${type === 'success' ? 'success' : 'danger'} position-fixed`;
    toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999;';
    toast.innerHTML = message;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}
</script>
@endpush
@endsection

@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Class Sessions</h3>
                    <p class="text-muted mb-0">Manage class schedules</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bulkSessionModal">
                        <i class="ti ti-calendar-plus"></i> Generate Monthly Sessions
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sessionModal" onclick="clearSessionForm()">
                        <i class="ti ti-plus"></i> Add Session
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 fw-bold">Filters</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.sessions.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Student Name, Email...">
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
                            <div class="col-md-3">
                                <label class="form-label small">Teacher</label>
                                <select class="form-select form-select-sm" name="teacher_id">
                                    <option value="">All Teachers</option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{ $teacher->id }}" {{ request('teacher_id') == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">&nbsp;</label>
                                <button type="submit" class="btn btn-sm btn-primary w-100">
                                    <i class="ti ti-filter me-1"></i>Apply
                                </button>
                            </div>
                            @php
                                $hasFilters = request()->filled('search') || request()->filled('course_id') || request()->filled('teacher_id');
                            @endphp
                            @if($hasFilters)
                            <div class="col-md-12">
                                <a href="{{ route('admin.sessions.index') }}" class="btn btn-sm btn-outline-secondary">
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

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 fw-bold"><i class="ti ti-users me-2"></i>Students & Courses</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0" id="studentsTable">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Student</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Enrollment Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $student)
                                    @forelse($student->enrollments->where('status', 'active') as $enrollment)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                                                    <span class="text-primary fw-bold">{{ strtoupper(substr($student->name ?? 'N', 0, 1)) }}</span>
                                                </div>
                                                <span class="fw-medium">{{ $student->name }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $student->email ?? '-' }}</td>
                                        <td>
                                            <div>
                                                <strong class="d-block">{{ $enrollment->course->name ?? 'N/A' }}</strong>
                                                @if($enrollment->course)
                                                    <small class="text-muted">{{ $enrollment->course->level ?? '' }}</small>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            @if($enrollment->classSession && $enrollment->classSession->teacher)
                                                <div class="d-flex align-items-center">
                                                    <iconify-icon icon="solar:user-id-bold-duotone" class="text-success me-1"></iconify-icon>
                                                    <span>{{ $enrollment->classSession->teacher->name }}</span>
                                                </div>
                                            @else
                                                <span class="text-muted">Not assigned</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $enrollment->status === 'active' ? 'success' : ($enrollment->status === 'completed' ? 'info' : 'secondary') }}">
                                                {{ ucfirst($enrollment->status) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.sessions.student', $student->id) }}" class="btn btn-sm btn-primary" title="View All Sessions">
                                                <i class="ti ti-eye me-1"></i>View Sessions
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    @if($loop->first)
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <iconify-icon icon="solar:user-id-bold-duotone" class="fs-2 text-muted"></iconify-icon>
                                            <p class="text-muted mb-0 mt-2">No active enrollments for {{ $student->name }}</p>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforelse
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">
                                        <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="fs-2 text-muted"></iconify-icon>
                                        <p class="text-muted mb-0 mt-2">No students with active enrollments found</p>
                                    </td>
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

<!-- Session Modal -->
<div class="modal fade" id="sessionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sessionModalTitle">Add Class Session</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="sessionForm">
                <div class="modal-body">
                    <input type="hidden" name="session_id" id="session_id">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="session_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Course *</label>
                            <select class="form-select" name="course_id" id="session_course_id" required>
                                <option value="">Select Course...</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teacher</label>
                            <select class="form-select" name="teacher_id" id="session_teacher_id">
                                <option value="">Select Teacher...</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Day of Week</label>
                            <select class="form-select" name="day_of_week" id="session_day">
                                <option value="">Select Day...</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Start Time</label>
                            <input type="time" class="form-control" name="start_time" id="session_start_time">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">End Time</label>
                            <input type="time" class="form-control" name="end_time" id="session_end_time">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Capacity</label>
                            <input type="number" class="form-control" name="capacity" id="session_capacity" value="10">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status *</label>
                            <select class="form-select" name="status" id="session_status" required>
                                <option value="scheduled">Scheduled</option>
                                <option value="ongoing">Ongoing</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bulk Session Generation Modal -->
<div class="modal fade" id="bulkSessionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title"><i class="ti ti-calendar-plus me-2"></i>Generate Monthly Sessions</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form id="bulkSessionForm">
                <div class="modal-body">
                    <div class="alert alert-info">
                        <i class="ti ti-info-circle me-2"></i>
                        <strong>Quick Setup:</strong> Select a student enrollment and generate all sessions for a month based on selected days and time.
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Student Enrollment *</label>
                            <select class="form-select" name="enrollment_id" id="bulk_enrollment_id" required>
                                <option value="">Select Enrollment...</option>
                                @foreach($enrollments as $enrollment)
                                    <option value="{{ $enrollment->id }}" 
                                        data-course="{{ $enrollment->course->name ?? '' }}"
                                        data-student="{{ $enrollment->student->name ?? '' }}"
                                        data-teacher="{{ $enrollment->classSession->teacher->name ?? '' }}">
                                        {{ $enrollment->student->name ?? 'N/A' }} - {{ $enrollment->course->name ?? 'N/A' }}
                                        @if($enrollment->classSession && $enrollment->classSession->teacher)
                                            (Teacher: {{ $enrollment->classSession->teacher->name }})
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Select the student enrollment to generate sessions for</small>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Month *</label>
                            <select class="form-select" name="month" id="bulk_month" required>
                                @php
                                    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                @endphp
                                @foreach($months as $index => $month)
                                    <option value="{{ $index + 1 }}" {{ ($index + 1) == date('n') ? 'selected' : '' }}>
                                        {{ $month }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Year *</label>
                            <select class="form-select" name="year" id="bulk_year" required>
                                <option value="{{ date('Y') }}" selected>{{ date('Y') }}</option>
                                <option value="{{ date('Y') + 1 }}">{{ date('Y') + 1 }}</option>
                            </select>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Days of Week *</label>
                            <div class="row">
                                @php
                                    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                                @endphp
                                @foreach($days as $day)
                                <div class="col-md-3 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="days_of_week[]" 
                                            value="{{ $day }}" id="day_{{ strtolower($day) }}">
                                        <label class="form-check-label" for="day_{{ strtolower($day) }}">
                                            {{ $day }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <small class="text-muted">Select one or more days for recurring sessions</small>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Start Time *</label>
                            <input type="time" class="form-control" name="start_time" id="bulk_start_time" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">End Time *</label>
                            <input type="time" class="form-control" name="end_time" id="bulk_end_time" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teacher</label>
                            <select class="form-select" name="teacher_id" id="bulk_teacher_id">
                                <option value="">Auto-assign from enrollment</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Leave empty to use enrollment's teacher</small>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Meeting Link (Optional)</label>
                            <input type="url" class="form-control" name="meeting_link" id="bulk_meeting_link" 
                                placeholder="https://meet.google.com/...">
                        </div>
                    </div>
                    
                    <div class="alert alert-warning">
                        <i class="ti ti-alert-triangle me-2"></i>
                        <strong>Note:</strong> This will create individual session records for each selected day in the month. 
                        Existing sessions for the same date and time will be skipped.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">
                        <i class="ti ti-calendar-check me-2"></i>Generate Sessions
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
let sessionModal;
let sessionForm;
let bulkSessionForm;

document.addEventListener('DOMContentLoaded', function() {
    sessionModal = new bootstrap.Modal(document.getElementById('sessionModal'));
    sessionForm = document.getElementById('sessionForm');
    bulkSessionForm = document.getElementById('bulkSessionForm');
    
    sessionForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveSession();
    });
    
    bulkSessionForm.addEventListener('submit', function(e) {
        e.preventDefault();
        generateBulkSessions();
    });
    
    // Auto-fill teacher from enrollment
    document.getElementById('bulk_enrollment_id').addEventListener('change', function() {
        const option = this.options[this.selectedIndex];
        // You can add logic here to auto-fill teacher if needed
    });
    
    // Initialize DataTable for students table
    if (document.getElementById('studentsTable')) {
        $('#studentsTable').DataTable({
            pageLength: 25,
            order: [[1, 'asc']],
            language: {
                search: "Search students:",
                lengthMenu: "Show _MENU_ students per page",
                info: "Showing _START_ to _END_ of _TOTAL_ students",
                paginate: {
                    previous: "<i class='ti ti-chevron-left'></i>",
                    next: "<i class='ti ti-chevron-right'></i>"
                }
            }
        });
    }
});

function clearSessionForm() {
    document.getElementById('sessionModalTitle').textContent = 'Add Class Session';
    document.getElementById('session_id').value = '';
    document.getElementById('session_name').value = '';
    document.getElementById('session_course_id').value = '';
    document.getElementById('session_teacher_id').value = '';
    document.getElementById('session_day').value = '';
    document.getElementById('session_start_time').value = '';
    document.getElementById('session_end_time').value = '';
    document.getElementById('session_capacity').value = '10';
    document.getElementById('session_status').value = 'scheduled';
}

function editSession(session) {
    document.getElementById('sessionModalTitle').textContent = 'Edit Class Session';
    document.getElementById('session_id').value = session.id;
    document.getElementById('session_name').value = session.name;
    document.getElementById('session_course_id').value = session.course_id;
    document.getElementById('session_teacher_id').value = session.teacher_id || '';
    document.getElementById('session_day').value = session.day_of_week || '';
    document.getElementById('session_start_time').value = session.start_time || '';
    document.getElementById('session_end_time').value = session.end_time || '';
    document.getElementById('session_capacity').value = session.capacity || '10';
    document.getElementById('session_status').value = session.status;
    
    sessionModal.show();
}

function saveSession() {
    const formData = new FormData(sessionForm);
    const sessionId = formData.get('session_id');
    const url = sessionId 
        ? '/admin/sessions/' + sessionId 
        : '/admin/sessions';
    const method = sessionId ? 'PUT' : 'POST';
    
    formData.append('_method', method);
    formData.append('_token', '{{ csrf_token() }}');
    
    fetch(url, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            sessionModal.hide();
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to save'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to save session');
    });
}

function generateBulkSessions() {
    const formData = new FormData(bulkSessionForm);
    
    // Validate days selection
    const daysChecked = formData.getAll('days_of_week[]');
    if (daysChecked.length === 0) {
        alert('Please select at least one day of the week');
        return;
    }
    
    // Validate time
    const startTime = formData.get('start_time');
    const endTime = formData.get('end_time');
    if (startTime >= endTime) {
        alert('End time must be after start time');
        return;
    }
    
    formData.append('_token', '{{ csrf_token() }}');
    
    // Show loading state
    const submitBtn = bulkSessionForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="ti ti-loader me-2"></i>Generating...';
    
    fetch('/admin/sessions/generate-monthly', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            bootstrap.Modal.getInstance(document.getElementById('bulkSessionModal')).hide();
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to generate sessions'));
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to generate sessions');
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
    });
}
</script>
@endpush
@endsection

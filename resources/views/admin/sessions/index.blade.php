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
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sessionModal" onclick="clearSessionForm()">
                    <i class="ti ti-plus"></i> Add Session
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                    <th>Capacity</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sessions as $session)
                                <tr>
                                    <td>{{ $session->id }}</td>
                                    <td class="fw-medium">{{ $session->name }}</td>
                                    <td>{{ $session->course->name ?? '-' }}</td>
                                    <td>{{ $session->teacher->name ?? 'TBA' }}</td>
                                    <td>{{ $session->day_of_week ?? '-' }}</td>
                                    <td>
                                        @if($session->start_time && $session->end_time)
                                            {{ \Carbon\Carbon::parse($session->start_time)->format('h:i A') }} - {{ \Carbon\Carbon::parse($session->end_time)->format('h:i A') }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $session->capacity ?? '-' }}</td>
                                    <td>
                                        <span class="badge bg-{{ str_replace(['scheduled', 'ongoing', 'completed', 'cancelled'], ['info', 'success', 'secondary', 'danger'], $session->status) }}">
                                            {{ ucfirst($session->status) }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-primary" onclick="editSession({{ $session->toJson() }})">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center py-4">
                                        <iconify-icon icon="solar:calendar-add-bold-duotone" class="fs-2 text-muted"></iconify-icon>
                                        <p class="text-muted mb-0 mt-2">No class sessions found</p>
                                        <button class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#sessionModal" onclick="clearSessionForm()">
                                            <i class="ti ti-plus"></i> Create First Session
                                        </button>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {!! $sessions->links() !!}
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

@push('scripts')
<script>
let sessionModal;
let sessionForm;

document.addEventListener('DOMContentLoaded', function() {
    sessionModal = new bootstrap.Modal(document.getElementById('sessionModal'));
    sessionForm = document.getElementById('sessionForm');
    
    sessionForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveSession();
    });
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
</script>
@endpush
@endsection

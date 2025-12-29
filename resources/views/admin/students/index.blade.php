@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Students</h3>
                    <p class="text-muted mb-0">Manage all students</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal" onclick="clearStudentForm()">
                    <i class="ti ti-plus"></i> Add Student
                </button>
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
                    <form method="GET" action="{{ route('admin.students.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Name, Email, Phone...">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="suspended" {{ request('status') == 'suspended' ? 'selected' : '' }}>Suspended</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Country</label>
                                <select class="form-select form-select-sm" name="country">
                                    <option value="">All Countries</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country }}" {{ request('country') == $country ? 'selected' : '' }}>{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Credentials</label>
                                <select class="form-select form-select-sm" name="has_credentials">
                                    <option value="">All</option>
                                    <option value="yes" {{ request('has_credentials') == 'yes' ? 'selected' : '' }}>Has Credentials</option>
                                    <option value="no" {{ request('has_credentials') == 'no' ? 'selected' : '' }}>No Credentials</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">Date From</label>
                                <input type="date" class="form-control form-control-sm" name="date_from" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">Date To</label>
                                <input type="date" class="form-control form-control-sm" name="date_to" value="{{ request('date_to') }}">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="ti ti-filter me-1"></i>Apply Filters
                                </button>
                                @php
                                    $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('country') || 
                                                 request()->filled('has_credentials') || request()->filled('date_from') || request()->filled('date_to');
                                @endphp
                                @if($hasFilters)
                                <a href="{{ route('admin.students.index') }}" class="btn btn-sm btn-outline-secondary">
                                    <i class="ti ti-x me-1"></i>Clear Filters
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs bg-primary bg-opacity-10 rounded">
                                                <span class="text-primary">{{ strtoupper(substr($student->name ?? 'N/A', 0, 1)) }}</span>
                                            </div>
                                            <span class="ms-2 fw-medium">{{ $student->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $student->email ?? '-' }}</td>
                                    <td>{{ $student->phone ?? '-' }}</td>
                                    <td>{{ $student->country ?? '-' }}</td>
                                    <td>
                                        <span class="badge bg-{{ $student->status === 'active' ? 'success' : ($student->status === 'inactive' ? 'secondary' : 'warning') }}">
                                            {{ ucfirst($student->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $student->created_at->format('d M Y') }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.students.show', $student) }}" class="btn btn-sm btn-outline-info" title="View Details">
                                                <i class="ti ti-eye"></i>
                                            </a>
                                            <button class="btn btn-sm btn-outline-primary" onclick="editStudent({{ $student }})" title="Edit">
                                                <i class="ti ti-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-warning" onclick="assignCourse({{ $student->id }})" title="Assign Course">
                                                <i class="ti ti-book"></i>
                                            </button>
                                            @if($student->email)
                                            <button type="button" class="btn btn-sm btn-outline-success" onclick="generateCredentials({{ $student->id }})" title="Generate Credentials">
                                                <i class="ti ti-key"></i>
                                            </button>
                                            @endif
                                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="deleteStudent({{ $student->id }}, '{{ $student->name }}')" title="Delete">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {!! $students->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Student Modal -->
<div class="modal fade" id="studentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalTitle">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="studentForm">
                <div class="modal-body">
                    <input type="hidden" name="student_id" id="student_id">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="student_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="student_email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="student_password" minlength="8" placeholder="Enter password or leave empty to auto-generate">
                            <small class="text-muted">Leave empty to auto-generate a password</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" name="generate_credentials" id="generate_credentials_modal" value="1">
                                <label class="form-check-label" for="generate_credentials_modal">
                                    Auto-generate Password (ignores password field above)
                                </label>
                            </div>
                            <small class="text-muted">If checked, a random password will be generated. Email is required.</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="student_phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" name="country" id="student_country">
                                <option value="">Select Country</option>
                                @foreach(config('countries.countries') as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status *</label>
                            <select class="form-select" name="status" id="student_status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="pending">Pending</option>
                                <option value="suspended">Suspended</option>
                            </select>
                        </div>
                    </div>
                    
                    <hr class="my-3">
                    <h6 class="mb-3"><i class="ti ti-clock me-2"></i>Class Schedule (For Bulk Session Generation)</h6>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Start Time</label>
                            <input type="time" class="form-control" name="start_time" id="student_start_time">
                            <small class="text-muted">Preferred class start time</small>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">End Time</label>
                            <input type="time" class="form-control" name="end_time" id="student_end_time">
                            <small class="text-muted">Preferred class end time</small>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Assigned Teacher</label>
                            <select class="form-select" name="teacher_id" id="student_teacher_id">
                                <option value="">No Teacher Assigned</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Default teacher for this student</small>
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

<!-- Assign Course Modal -->
<div class="modal fade" id="assignCourseModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignCourseModalTitle">Assign Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="assignCourseForm">
                <input type="hidden" name="student_id" id="assign_student_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Course <span class="text-danger">*</span></label>
                            <select class="form-select" name="course_id" id="assign_course_id" required>
                                <option value="">Select Course</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" data-price="{{ $course->price ?? 0 }}">
                                        {{ $course->name }} @if($course->level) ({{ $course->level }}) @endif
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Class Session (Optional)</label>
                            <select class="form-select" name="class_session_id" id="assign_class_session_id">
                                <option value="">Select Class Session</option>
                                @foreach($classSessions as $session)
                                    <option value="{{ $session->id }}" data-course="{{ $session->course_id }}">
                                        {{ $session->name }} - {{ $session->course->name ?? 'N/A' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Start Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="start_date" id="assign_start_date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date" id="assign_end_date">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Fee</label>
                            <input type="number" class="form-control" name="fee" id="assign_fee" step="0.01" min="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select" name="status" id="assign_status" required>
                                <option value="pending">Pending</option>
                                <option value="active" selected>Active</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="on_hold">On Hold</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Notes</label>
                            <textarea class="form-control" name="notes" id="assign_notes" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Assign Course</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Assign Course Modal -->
<div class="modal fade" id="assignCourseModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignCourseModalTitle">Assign Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="assignCourseForm">
                <input type="hidden" name="student_id" id="assign_student_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Course <span class="text-danger">*</span></label>
                            <select class="form-select" name="course_id" id="assign_course_id" required>
                                <option value="">Select Course</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" data-price="{{ $course->price ?? 0 }}">
                                        {{ $course->name }} @if($course->level) ({{ $course->level }}) @endif
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Class Session (Optional)</label>
                            <select class="form-select" name="class_session_id" id="assign_class_session_id">
                                <option value="">Select Class Session</option>
                                @foreach($classSessions as $session)
                                    <option value="{{ $session->id }}" data-course="{{ $session->course_id }}">
                                        {{ $session->name }} - {{ $session->course->name ?? 'N/A' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Start Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="start_date" id="assign_start_date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date" id="assign_end_date">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Fee</label>
                            <input type="number" class="form-control" name="fee" id="assign_fee" step="0.01" min="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select" name="status" id="assign_status" required>
                                <option value="pending">Pending</option>
                                <option value="active" selected>Active</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="on_hold">On Hold</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Notes</label>
                            <textarea class="form-control" name="notes" id="assign_notes" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Assign Course</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Credentials Modal -->
<div class="modal fade" id="credentialsModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">
                    <i class="ti ti-key me-2"></i>Login Credentials Generated
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info">
                    <i class="ti ti-info-circle me-2"></i>
                    <strong>Please save these credentials!</strong> The password will not be shown again.
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Email:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="credential_email" readonly>
                        <button class="btn btn-outline-secondary" type="button" onclick="copyToClipboard('credential_email')">
                            <i class="ti ti-copy"></i> Copy
                        </button>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Password:</label>
                    <div class="input-group">
                        <input type="text" class="form-control fw-bold text-success" id="credential_password" readonly>
                        <button class="btn btn-outline-secondary" type="button" onclick="copyToClipboard('credential_password')">
                            <i class="ti ti-copy"></i> Copy
                        </button>
                    </div>
                </div>
                <div class="alert alert-warning mb-0">
                    <i class="ti ti-alert-triangle me-2"></i>
                    <small>Make sure to share these credentials securely with the student.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="copyAllCredentials()">
                    <i class="ti ti-copy me-2"></i>Copy All
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
let studentModal;
let studentForm;

document.addEventListener('DOMContentLoaded', function() {
    studentModal = new bootstrap.Modal(document.getElementById('studentModal'));
    studentForm = document.getElementById('studentForm');
    
    studentForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveStudent();
    });
});

function clearStudentForm() {
    document.getElementById('studentModalTitle').textContent = 'Add Student';
    document.getElementById('student_id').value = '';
    document.getElementById('student_name').value = '';
    document.getElementById('student_email').value = '';
    document.getElementById('student_phone').value = '';
    document.getElementById('student_country').value = '';
    document.getElementById('student_status').value = 'active';
    document.getElementById('student_password').value = '';
    document.getElementById('generate_credentials_modal').checked = false;
    document.getElementById('student_start_time').value = '';
    document.getElementById('student_end_time').value = '';
    document.getElementById('student_teacher_id').value = '';
    if (document.getElementById('student_password')) {
        document.getElementById('student_password').disabled = false;
        document.getElementById('student_password').placeholder = 'Enter password or leave empty to auto-generate';
    }
}

// Toggle password field based on generate credentials checkbox
document.addEventListener('DOMContentLoaded', function() {
    const generateCheckbox = document.getElementById('generate_credentials_modal');
    const passwordField = document.getElementById('student_password');
    
    if (generateCheckbox && passwordField) {
        generateCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordField.disabled = true;
                passwordField.placeholder = 'Password will be auto-generated';
            } else {
                passwordField.disabled = false;
                passwordField.placeholder = 'Enter password or leave empty to auto-generate';
            }
        });
    }
});

function editStudent(student) {
    document.getElementById('studentModalTitle').textContent = 'Edit Student';
    document.getElementById('student_id').value = student.id;
    document.getElementById('student_name').value = student.name;
    document.getElementById('student_email').value = student.email || '';
    document.getElementById('student_phone').value = student.phone || '';
    document.getElementById('student_country').value = student.country || '';
    document.getElementById('student_status').value = student.status;
    document.getElementById('student_password').value = '';
    document.getElementById('student_password').placeholder = 'Leave empty to keep current password';
    document.getElementById('generate_credentials_modal').checked = false;
    
    // Set schedule fields
    if (student.start_time) {
        const startTime = new Date('1970-01-01T' + student.start_time);
        document.getElementById('student_start_time').value = startTime.toTimeString().slice(0, 5);
    } else {
        document.getElementById('student_start_time').value = '';
    }
    
    if (student.end_time) {
        const endTime = new Date('1970-01-01T' + student.end_time);
        document.getElementById('student_end_time').value = endTime.toTimeString().slice(0, 5);
    } else {
        document.getElementById('student_end_time').value = '';
    }
    
    document.getElementById('student_teacher_id').value = student.teacher_id || '';
    
    if (document.getElementById('student_password')) {
        document.getElementById('student_password').disabled = false;
    }
    
    studentModal.show();
}

function saveStudent() {
    const formData = new FormData(studentForm);
    const studentId = formData.get('student_id');
    const url = studentId 
        ? '/admin/students/' + studentId 
        : '/admin/students';
    const method = studentId ? 'PUT' : 'POST';
    
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
            // If credentials were generated, show them in modal
            if (data.credentials && data.credentials.password) {
                showCredentialsModal(data.credentials.email, data.credentials.password);
            } else {
                studentModal.hide();
                location.reload();
            }
        } else {
            showToast('Error: ' + (data.message || 'Failed to save'), 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('Failed to save student', 'error');
    });
}

window.generateCredentials = function(studentId) {
    showConfirm(
        'Generate New Credentials?',
        'This will generate new login credentials for this student. Continue?',
        'Yes, Generate',
        'Cancel'
    ).then((result) => {
        if (!result.isConfirmed) {
            return;
        }
        
        fetch(`/admin/students/${studentId}/generate-credentials`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success && data.credentials) {
                showCredentialsModal(data.credentials.email, data.credentials.password);
                // Reload page after a short delay to update the UI
                setTimeout(() => {
                    location.reload();
                }, 3000);
            } else {
                showToast('Error: ' + (data.message || 'Failed to generate credentials'), 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showToast('Failed to generate credentials', 'error');
        });
    });
}

function showCredentialsModal(email, password) {
    document.getElementById('credential_email').value = email;
    document.getElementById('credential_password').value = password;
    const modal = new bootstrap.Modal(document.getElementById('credentialsModal'));
    modal.show();
}

function copyToClipboard(elementId) {
    const element = document.getElementById(elementId);
    element.select();
    element.setSelectionRange(0, 99999); // For mobile devices
    
    // Use modern clipboard API if available
    if (navigator.clipboard) {
        navigator.clipboard.writeText(element.value).then(() => {
            showCopyFeedback(elementId);
        }).catch(() => {
            // Fallback to execCommand
            document.execCommand('copy');
            showCopyFeedback(elementId);
        });
    } else {
        // Fallback for older browsers
        document.execCommand('copy');
        showCopyFeedback(elementId);
    }
}

function showCopyFeedback(elementId) {
    const element = document.getElementById(elementId);
    const btn = element.nextElementSibling;
    if (btn && btn.tagName === 'BUTTON') {
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<i class="ti ti-check"></i> Copied!';
        btn.classList.add('btn-success');
        btn.classList.remove('btn-outline-secondary');
        
        setTimeout(() => {
            btn.innerHTML = originalHTML;
            btn.classList.remove('btn-success');
            btn.classList.add('btn-outline-secondary');
        }, 2000);
    }
}

function copyAllCredentials() {
    const email = document.getElementById('credential_email').value;
    const password = document.getElementById('credential_password').value;
    const text = `Email: ${email}\nPassword: ${password}`;
    
    navigator.clipboard.writeText(text).then(() => {
        const btn = event.target;
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<i class="ti ti-check me-2"></i>Copied!';
        btn.classList.add('btn-success');
        btn.classList.remove('btn-primary');
        
        setTimeout(() => {
            btn.innerHTML = originalHTML;
            btn.classList.remove('btn-success');
            btn.classList.add('btn-primary');
        }, 2000);
    }).catch(err => {
        showToast('Failed to copy to clipboard', 'error');
    });
}

// Assign Course Function
window.assignCourse = function(studentId) {
    document.getElementById('assign_student_id').value = studentId;
    document.getElementById('assignCourseModalTitle').textContent = 'Assign Course';
    // Clear form
    document.getElementById('assignCourseForm').reset();
    document.getElementById('assign_student_id').value = studentId;
    document.getElementById('assign_status').value = 'active';
    document.getElementById('assign_start_date').value = new Date().toISOString().split('T')[0];
    
    const modal = new bootstrap.Modal(document.getElementById('assignCourseModal'));
    modal.show();
}

// Handle assign course form submission
document.addEventListener('DOMContentLoaded', function() {
    const assignCourseForm = document.getElementById('assignCourseForm');
    if (assignCourseForm) {
        assignCourseForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const studentId = document.getElementById('assign_student_id').value;
            const formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            
            fetch(`/admin/students/${studentId}/assign-course`, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    bootstrap.Modal.getInstance(document.getElementById('assignCourseModal')).hide();
                    showToast(data.message || 'Course assigned successfully', 'success');
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                } else {
                    showToast(data.message || 'Failed to assign course', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('Failed to assign course', 'error');
            });
        });
    }
});

// Delete Student Function
window.deleteStudent = function(studentId, studentName) {
    showConfirm(
        'Delete Student?',
        `Are you sure you want to delete "${studentName}"? This action cannot be undone.`,
        'Yes, Delete',
        'Cancel'
    ).then((result) => {
        if (!result.isConfirmed) {
            return;
        }
        
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/students/${studentId}`;
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '{{ csrf_token() }}';
        form.innerHTML = `
            <input type="hidden" name="_token" value="${csrfToken}">
            <input type="hidden" name="_method" value="DELETE">
        `;
        document.body.appendChild(form);
        form.submit();
    });
}
</script>
@endpush
@endsection

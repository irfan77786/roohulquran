@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Student Details</h3>
                    <p class="text-muted mb-0">View and manage student information</p>
                </div>
                <div>
                    <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">
                        <i class="ti ti-arrow-left me-2"></i>Back to List
                    </a>
                    <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-primary">
                        <i class="ti ti-edit me-2"></i>Edit Student
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Student Information -->
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="avatar-lg bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 100px; height: 100px; font-size: 2.5rem; font-weight: 700;">
                            {{ strtoupper(substr($student->name, 0, 1)) }}
                        </div>
                        <h4 class="mb-1">{{ $student->name }}</h4>
                        <p class="text-muted mb-2">{{ $student->email ?? 'No email' }}</p>
                        <span class="badge bg-{{ $student->status === 'active' ? 'success' : ($student->status === 'pending' ? 'warning' : 'secondary') }}">
                            {{ ucfirst($student->status) }}
                        </span>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Phone</small>
                        <strong>{{ $student->phone ?? 'Not provided' }}</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Country</small>
                        <strong>{{ $student->country ?? 'Not provided' }}</strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">City</small>
                        <strong>{{ $student->city ?? 'Not provided' }}</strong>
                    </div>
                    @if($student->guardian_name)
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Guardian</small>
                        <strong>{{ $student->guardian_name }}</strong>
                        @if($student->guardian_phone)
                            <br><small class="text-muted">{{ $student->guardian_phone }}</small>
                        @endif
                    </div>
                    @endif
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Member Since</small>
                        <strong>{{ $student->created_at->format('M d, Y') }}</strong>
                    </div>
                    <div class="mt-4">
                        @if($student->password)
                            <div class="alert alert-success mb-3">
                                <i class="ti ti-check-circle me-2"></i>
                                <small>Login credentials are set for this student.</small>
                            </div>
                        @endif
                        <button type="button" class="btn btn-{{ $student->password ? 'warning' : 'success' }} w-100" onclick="generateCredentials({{ $student->id }})">
                            <i class="ti ti-key me-2"></i>{{ $student->password ? 'Regenerate' : 'Generate' }} Login Credentials
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrollments -->
        <div class="col-lg-8 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold"><i class="ti ti-book me-2"></i>Course Enrollments</h5>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#assignCourseModal">
                        <i class="ti ti-plus me-2"></i>Assign Course
                    </button>
                </div>
                <div class="card-body">
                    @if($student->enrollments->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Teacher</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Fee</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student->enrollments as $enrollment)
                                    <tr>
                                        <td>
                                            <strong>{{ $enrollment->course->name ?? 'N/A' }}</strong>
                                            @if($enrollment->course)
                                                <br><small class="text-muted">{{ $enrollment->course->level }}</small>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $enrollment->classSession->teacher->name ?? 'Not assigned' }}
                                        </td>
                                        <td>{{ $enrollment->start_date->format('M d, Y') }}</td>
                                        <td>{{ $enrollment->end_date ? $enrollment->end_date->format('M d, Y') : 'N/A' }}</td>
                                        <td>${{ number_format($enrollment->fee ?? 0, 2) }}</td>
                                        <td>
                                            <span class="badge bg-{{ $enrollment->status === 'active' ? 'success' : ($enrollment->status === 'completed' ? 'info' : ($enrollment->status === 'cancelled' ? 'danger' : 'warning')) }}">
                                                {{ ucfirst($enrollment->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.students.remove-enrollment', [$student, $enrollment]) }}" method="POST" class="d-inline" onsubmit="event.preventDefault(); showConfirm('Remove Enrollment?', 'Are you sure you want to remove this enrollment?', 'Yes, Remove', 'Cancel').then(result => { if (result.isConfirmed) { this.submit(); } }); return false;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <iconify-icon icon="solar:book-bookmark-bold-duotone" class="fs-1 text-muted"></iconify-icon>
                            <p class="text-muted mt-3">No enrollments yet. Assign a course to get started.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Assign Course Modal -->
<div class="modal fade" id="assignCourseModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Course to {{ $student->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('admin.students.assign-course', $student) }}" method="POST" id="assignCourseForm">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Course <span class="text-danger">*</span></label>
                            <select class="form-select" name="course_id" id="course_id" required>
                                <option value="">Select Course</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" data-price="{{ $course->price ?? 0 }}">
                                        {{ $course->name }} ({{ $course->level }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Class Session (Optional)</label>
                            <select class="form-select" name="class_session_id" id="class_session_id">
                                <option value="">Select Class Session</option>
                                @foreach($classSessions as $session)
                                    <option value="{{ $session->id }}" data-course="{{ $session->course_id }}" data-teacher="{{ $session->teacher->name ?? 'N/A' }}">
                                        {{ $session->name }} - {{ $session->course->name ?? 'N/A' }}
                                        @if($session->teacher)
                                            (Teacher: {{ $session->teacher->name }})
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Selecting a class session will automatically assign the course and teacher</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Start Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="start_date" value="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Fee</label>
                            <input type="number" class="form-control" name="fee" id="fee" step="0.01" min="0" placeholder="0.00">
                            <small class="text-muted">Leave empty to use course default price</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select" name="status" required>
                                <option value="pending">Pending</option>
                                <option value="active" selected>Active</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="on_hold">On Hold</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Notes</label>
                            <textarea class="form-control" name="notes" rows="3" placeholder="Additional notes about this enrollment"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Assign Course</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const courseSelect = document.getElementById('course_id');
    const classSessionSelect = document.getElementById('class_session_id');
    const feeInput = document.getElementById('fee');

    // When course is selected, update fee
    courseSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const price = selectedOption.getAttribute('data-price');
        if (price && !feeInput.value) {
            feeInput.value = price;
        }
    });

    // When class session is selected, auto-select the course
    classSessionSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const courseId = selectedOption.getAttribute('data-course');
        if (courseId) {
            courseSelect.value = courseId;
            courseSelect.dispatchEvent(new Event('change'));
        }
    });

    // Form submission
    document.getElementById('assignCourseForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                showToast('Error: ' + (data.message || 'Failed to assign course'), 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showToast('Failed to assign course', 'error');
        });
    });
});
</script>

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

<script>
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
    element.setSelectionRange(0, 99999);
    
    if (navigator.clipboard) {
        navigator.clipboard.writeText(element.value).then(() => {
            showCopyFeedback(elementId);
        }).catch(() => {
            document.execCommand('copy');
            showCopyFeedback(elementId);
        });
    } else {
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
</script>
@endpush
@endsection


@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Teachers</h3>
                    <p class="text-muted mb-0">Manage all teachers</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#teacherModal" onclick="clearTeacherForm()">
                    <i class="ti ti-plus"></i> Add Teacher
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
                    <form method="GET" action="{{ route('admin.teachers.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Name, Email, Phone, Qualifications...">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    <option value="on_leave" {{ request('status') == 'on_leave' ? 'selected' : '' }}>On Leave</option>
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
                            <div class="col-md-1">
                                <label class="form-label small">&nbsp;</label>
                                <button type="submit" class="btn btn-sm btn-primary w-100">
                                    <i class="ti ti-filter"></i>
                                </button>
                            </div>
                            @php
                                $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('date_from') || request()->filled('date_to');
                            @endphp
                            @if($hasFilters)
                            <div class="col-md-12">
                                <a href="{{ route('admin.teachers.index') }}" class="btn btn-sm btn-outline-secondary">
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs bg-primary bg-opacity-10 rounded">
                                                <span class="text-primary">{{ strtoupper(substr($teacher->name ?? 'N/A', 0, 1)) }}</span>
                                            </div>
                                            <span class="ms-2 fw-medium">{{ $teacher->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $teacher->email ?? '-' }}</td>
                                    <td>{{ $teacher->phone ?? '-' }}</td>
                                    <td>
                                        <span class="badge bg-{{ $teacher->status === 'active' ? 'success' : ($teacher->status === 'inactive' ? 'secondary' : 'warning') }}">
                                            {{ ucfirst($teacher->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $teacher->created_at->format('d M Y') }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-primary" onclick="editTeacher({{ $teacher }})">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {!! $teachers->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Teacher Modal -->
<div class="modal fade" id="teacherModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teacherModalTitle">Add Teacher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="teacherForm">
                <div class="modal-body">
                    <input type="hidden" name="teacher_id" id="teacher_id">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="teacher_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="teacher_email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="teacher_phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Qualifications</label>
                            <input type="text" class="form-control" name="qualifications" id="teacher_qualifications">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status *</label>
                            <select class="form-select" name="status" id="teacher_status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="on_leave">On Leave</option>
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
let teacherModal;
let teacherForm;

document.addEventListener('DOMContentLoaded', function() {
    teacherModal = new bootstrap.Modal(document.getElementById('teacherModal'));
    teacherForm = document.getElementById('teacherForm');
    
    teacherForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveTeacher();
    });
});

function clearTeacherForm() {
    document.getElementById('teacherModalTitle').textContent = 'Add Teacher';
    document.getElementById('teacher_id').value = '';
    document.getElementById('teacher_name').value = '';
    document.getElementById('teacher_email').value = '';
    document.getElementById('teacher_phone').value = '';
    document.getElementById('teacher_qualifications').value = '';
    document.getElementById('teacher_status').value = 'active';
}

function editTeacher(teacher) {
    document.getElementById('teacherModalTitle').textContent = 'Edit Teacher';
    document.getElementById('teacher_id').value = teacher.id;
    document.getElementById('teacher_name').value = teacher.name;
    document.getElementById('teacher_email').value = teacher.email || '';
    document.getElementById('teacher_phone').value = teacher.phone || '';
    document.getElementById('teacher_qualifications').value = teacher.qualifications || '';
    document.getElementById('teacher_status').value = teacher.status;
    
    teacherModal.show();
}

function saveTeacher() {
    const formData = new FormData(teacherForm);
    const teacherId = formData.get('teacher_id');
    const url = teacherId 
        ? '/admin/teachers/' + teacherId 
        : '/admin/teachers';
    const method = teacherId ? 'PUT' : 'POST';
    
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
            teacherModal.hide();
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to save'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to save teacher');
    });
}
</script>
@endpush
@endsection
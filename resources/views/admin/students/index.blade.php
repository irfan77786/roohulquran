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
                                        <button class="btn btn-sm btn-outline-primary" onclick="editStudent({{ $student }})">
                                            <i class="ti ti-edit"></i>
                                        </button>
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
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="student_phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" name="country" id="student_country">
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
}

function editStudent(student) {
    document.getElementById('studentModalTitle').textContent = 'Edit Student';
    document.getElementById('student_id').value = student.id;
    document.getElementById('student_name').value = student.name;
    document.getElementById('student_email').value = student.email || '';
    document.getElementById('student_phone').value = student.phone || '';
    document.getElementById('student_country').value = student.country || '';
    document.getElementById('student_status').value = student.status;
    
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
            studentModal.hide();
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to save'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to save student');
    });
}
</script>
@endpush
@endsection

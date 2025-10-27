@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Courses</h3>
                    <p class="text-muted mb-0">Manage all courses</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#courseModal" onclick="clearCourseForm()">
                    <i class="ti ti-plus"></i> Add Course
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
                                    <th>Level</th>
                                    <th>Duration</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td class="fw-medium">{{ $course->name }}</td>
                                    <td>
                                        <span class="badge bg-info">{{ ucfirst($course->level) }}</span>
                                    </td>
                                    <td>{{ $course->duration_weeks ?? '-' }} weeks</td>
                                    <td>${{ number_format($course->price, 2) }}</td>
                                    <td>
                                        <span class="badge bg-{{ $course->status === 'active' ? 'success' : 'secondary' }}">
                                            {{ ucfirst($course->status) }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-primary" onclick="editCourse({{ $course }})">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {!! $courses->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Course Modal -->
<div class="modal fade" id="courseModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseModalTitle">Add Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="courseForm">
                <div class="modal-body">
                    <input type="hidden" name="course_id" id="course_id">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="course_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Level *</label>
                            <select class="form-select" name="level" id="course_level" required>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="course_description" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Duration (weeks)</label>
                            <input type="number" class="form-control" name="duration_weeks" id="course_duration">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" step="0.01" class="form-control" name="price" id="course_price" value="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status *</label>
                            <select class="form-select" name="status" id="course_status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="draft">Draft</option>
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
let courseModal;
let courseForm;

document.addEventListener('DOMContentLoaded', function() {
    courseModal = new bootstrap.Modal(document.getElementById('courseModal'));
    courseForm = document.getElementById('courseForm');
    
    courseForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveCourse();
    });
});

function clearCourseForm() {
    document.getElementById('courseModalTitle').textContent = 'Add Course';
    document.getElementById('course_id').value = '';
    document.getElementById('course_name').value = '';
    document.getElementById('course_description').value = '';
    document.getElementById('course_level').value = 'beginner';
    document.getElementById('course_duration').value = '';
    document.getElementById('course_price').value = '0';
    document.getElementById('course_status').value = 'active';
}

function editCourse(course) {
    document.getElementById('courseModalTitle').textContent = 'Edit Course';
    document.getElementById('course_id').value = course.id;
    document.getElementById('course_name').value = course.name;
    document.getElementById('course_description').value = course.description || '';
    document.getElementById('course_level').value = course.level;
    document.getElementById('course_duration').value = course.duration_weeks || '';
    document.getElementById('course_price').value = course.price;
    document.getElementById('course_status').value = course.status;
    
    courseModal.show();
}

function saveCourse() {
    const formData = new FormData(courseForm);
    const courseId = formData.get('course_id');
    const url = courseId 
        ? '/admin/courses/' + courseId 
        : '/admin/courses';
    const method = courseId ? 'PUT' : 'POST';
    
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
            courseModal.hide();
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to save'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to save course');
    });
}
</script>
@endpush
@endsection
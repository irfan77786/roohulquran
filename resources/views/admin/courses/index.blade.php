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
                <div class="d-flex gap-2">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bulkSessionModal">
                        <i class="ti ti-calendar-plus"></i> Generate Monthly Sessions (All)
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#courseModal" onclick="clearCourseForm()">
                        <i class="ti ti-plus"></i> Add Course
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
                    <form method="GET" action="{{ route('admin.courses.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Name, Description, Level...">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Level</label>
                                <select class="form-select form-select-sm" name="level">
                                    <option value="">All Levels</option>
                                    @foreach($levels as $level)
                                        <option value="{{ $level }}" {{ request('level') == $level ? 'selected' : '' }}>{{ ucfirst($level) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Price Min</label>
                                <input type="number" step="0.01" class="form-control form-control-sm" name="price_min" value="{{ request('price_min') }}" placeholder="0.00">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Price Max</label>
                                <input type="number" step="0.01" class="form-control form-control-sm" name="price_max" value="{{ request('price_max') }}" placeholder="0.00">
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
                                    $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('level') || 
                                                 request()->filled('price_min') || request()->filled('price_max') || request()->filled('date_from') || request()->filled('date_to');
                                @endphp
                                @if($hasFilters)
                                <a href="{{ route('admin.courses.index') }}" class="btn btn-sm btn-outline-secondary">
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

<!-- Bulk Session Generation Modal -->
<div class="modal fade" id="bulkSessionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title"><i class="ti ti-calendar-plus me-2"></i>Generate Monthly Sessions (All Students & Courses)</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form id="bulkSessionForm">
                <div class="modal-body">
                    <div class="alert alert-info">
                        <i class="ti ti-info-circle me-2"></i>
                        <strong>Bulk Generation:</strong> This will generate monthly sessions for ALL active students enrolled in selected courses (or all courses if none selected). The job will run in the background.
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Month *</label>
                            <select class="form-select" name="month" id="bulk_month" required>
                                @for($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}" {{ $i == date('n') ? 'selected' : '' }}>{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                @endfor
                            </select>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Year *</label>
                            <select class="form-select" name="year" id="bulk_year" required>
                                @for($i = date('Y'); $i <= date('Y') + 1; $i++)
                                    <option value="{{ $i }}" {{ $i == date('Y') ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Days of Week *</label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="days_of_week[]" value="{{ $day }}" id="day_{{ strtolower($day) }}">
                                        <label class="form-check-label" for="day_{{ strtolower($day) }}">
                                            {{ $day }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <small class="text-muted">Select at least one day</small>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Start Time (Optional)</label>
                            <input type="time" class="form-control" name="start_time" id="bulk_start_time">
                            <small class="text-muted">Leave empty to use each student's preferred time</small>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">End Time (Optional)</label>
                            <input type="time" class="form-control" name="end_time" id="bulk_end_time">
                            <small class="text-muted">Leave empty to use each student's preferred time</small>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Courses (Optional)</label>
                            <select class="form-select" name="course_ids[]" id="bulk_course_ids" multiple size="5">
                                @foreach($allCourses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }} ({{ ucfirst($course->level) }})</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Hold Ctrl/Cmd (Windows) or Cmd (Mac) to select multiple courses. Leave empty to generate for all active courses.</small>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teacher (Optional)</label>
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
                        <strong>Note:</strong> This will create individual session records for each selected day in the month for all active enrollments. 
                        Existing sessions for the same date and time will be skipped. The process will run in the background using a queue job.
                        <br><br>
                        <strong>Time Priority:</strong> If a student has preferred start/end times configured, those will be used. Otherwise, the times specified above (if provided) will be used. If neither is available, that enrollment will be skipped.
                        <br><br>
                        <strong>Teacher Priority:</strong> Student's assigned teacher → Form's teacher → Enrollment's teacher
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
let courseModal;
let courseForm;
let bulkSessionForm;

document.addEventListener('DOMContentLoaded', function() {
    courseModal = new bootstrap.Modal(document.getElementById('courseModal'));
    courseForm = document.getElementById('courseForm');
    bulkSessionForm = document.getElementById('bulkSessionForm');
    
    courseForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveCourse();
    });
    
    if (bulkSessionForm) {
        bulkSessionForm.addEventListener('submit', function(e) {
            e.preventDefault();
            generateBulkSessions();
        });
    }
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
        showToast('Failed to save course', 'error');
    });
}

function generateBulkSessions() {
    const formData = new FormData(bulkSessionForm);
    
    // Validate days selection
    const daysChecked = formData.getAll('days_of_week[]');
    if (daysChecked.length === 0) {
        showToast('Please select at least one day of the week', 'warning');
        return;
    }
    
    // Validate time (only if both are provided)
    const startTime = formData.get('start_time');
    const endTime = formData.get('end_time');
    if (startTime && endTime && startTime >= endTime) {
        showToast('End time must be after start time', 'warning');
        return;
    }
    
    formData.append('_token', '{{ csrf_token() }}');
    
    // Show loading state
    const submitBtn = bulkSessionForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="ti ti-loader me-2"></i>Queuing Job...';
    
    fetch('{{ route("admin.courses.generate-bulk-sessions") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast(data.message || 'Bulk session generation job has been queued successfully', 'success');
            bootstrap.Modal.getInstance(document.getElementById('bulkSessionModal')).hide();
            bulkSessionForm.reset();
        } else {
            showToast('Error: ' + (data.message || 'Failed to queue session generation'), 'error');
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('Failed to queue session generation', 'error');
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
    });
}
</script>
@endpush
@endsection
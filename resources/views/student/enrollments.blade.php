@extends('student.main')

@section('title', 'My Enrollments')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>My Courses</h2>
                <p>View all your course enrollments and progress</p>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="ti ti-filter me-2"></i>Filters</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('student.enrollments') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Course Name...">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Course</label>
                                <select class="form-select form-select-sm" name="course_id">
                                    <option value="">All Courses</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}" {{ request('course_id') == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Start Date From</label>
                                <input type="date" class="form-control form-control-sm" name="date_from" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Start Date To</label>
                                <input type="date" class="form-control form-control-sm" name="date_to" value="{{ request('date_to') }}">
                            </div>
                            <div class="col-md-1">
                                <label class="form-label small">&nbsp;</label>
                                <button type="submit" class="btn btn-sm btn-primary w-100">
                                    <i class="ti ti-filter"></i>
                                </button>
                            </div>
                            @php
                                $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('course_id') || request()->filled('date_from') || request()->filled('date_to');
                            @endphp
                            @if($hasFilters)
                            <div class="col-md-12">
                                <a href="{{ route('student.enrollments') }}" class="btn btn-sm btn-outline-secondary">
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
            <div class="card">
                <div class="card-header">
                    <h5><i class="ti ti-book me-2"></i>Enrolled Courses</h5>
                </div>
                <div class="card-body">
                    @if($enrollments->count() > 0)
                        <div class="table-responsive">
                            <table class="table" id="enrollmentsTable">
                                <thead>
                                    <tr>
                                        <th>Course Details</th>
                                        <th>Teacher</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($enrollments as $enrollment)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                                    <iconify-icon icon="solar:book-bold-duotone" class="text-primary" style="font-size: 1.5rem;"></iconify-icon>
                                                </div>
                                                <div>
                                                    <strong class="d-block">{{ $enrollment->course->name ?? 'N/A' }}</strong>
                                                    @if($enrollment->course)
                                                        <small class="text-muted">
                                                            <i class="ti ti-tag me-1"></i>{{ $enrollment->course->level }}
                                                        </small>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                                                    <iconify-icon icon="solar:user-id-bold-duotone" class="text-success"></iconify-icon>
                                                </div>
                                                <span>{{ $enrollment->classSession->teacher->name ?? 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <small class="text-muted d-block">
                                                    Start: @if($enrollment->start_date)
                                                        {{ \App\Helpers\TimezoneHelper::formatForStudent($enrollment->start_date, $student->country ?? null, 'M d, Y') }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </small>
                                                <small class="text-muted">
                                                    End: @if($enrollment->end_date)
                                                        {{ \App\Helpers\TimezoneHelper::formatForStudent($enrollment->end_date, $student->country ?? null, 'M d, Y') }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $enrollment->status === 'active' ? 'success' : ($enrollment->status === 'completed' ? 'info' : 'secondary') }}">
                                                <i class="ti ti-{{ $enrollment->status === 'active' ? 'check-circle' : ($enrollment->status === 'completed' ? 'circle-check' : 'clock') }} me-1"></i>
                                                {{ ucfirst($enrollment->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('student.enrollments.show', $enrollment->id) }}" class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="ti ti-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <iconify-icon icon="solar:book-bookmark-bold-duotone"></iconify-icon>
                            <h5>No Enrollments Found</h5>
                            <p>You haven't enrolled in any courses yet. Contact the administration to get started.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        @php
            $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('course_id') || request()->filled('date_from') || request()->filled('date_to');
        @endphp
        
        @if(!$hasFilters)
        $('#enrollmentsTable').DataTable({
            pageLength: 10,
            order: [[0, 'desc']],
            language: {
                search: "Search courses:",
                lengthMenu: "Show _MENU_ courses per page",
                info: "Showing _START_ to _END_ of _TOTAL_ courses",
                paginate: {
                    previous: "<i class='ti ti-chevron-left'></i>",
                    next: "<i class='ti ti-chevron-right'></i>"
                }
            }
        });
        @else
        // If filters are applied, disable client-side search
        $('#enrollmentsTable').DataTable({
            pageLength: 10,
            searching: false,
            order: [[0, 'desc']],
            language: {
                lengthMenu: "Show _MENU_ courses per page",
                info: "Showing _START_ to _END_ of _TOTAL_ courses",
                paginate: {
                    previous: "<i class='ti ti-chevron-left'></i>",
                    next: "<i class='ti ti-chevron-right'></i>"
                }
            }
        });
        @endif
    });
</script>
@endpush
@endsection

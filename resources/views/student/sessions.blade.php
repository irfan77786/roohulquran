@extends('student.main')

@section('title', 'My Sessions')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>My Sessions</h2>
                <p>View all your scheduled class sessions</p>
            </div>
        </div>
    </div>

    <!-- Today's Session Card -->
    @if($todaySession)
    <div class="row mb-4">
        <div class="col-12">
            <div class="card live-session-card" style="border: 2px solid #5D87FF; background: linear-gradient(135deg, rgba(93, 135, 255, 0.1) 0%, rgba(93, 135, 255, 0.05) 100%); position: relative; overflow: hidden;">
                <div class="live-indicator"></div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-flex align-items-center gap-3 mb-3 mb-md-0">
                            <div class="live-badge">
                                <span class="live-dot"></span>
                                <strong>LIVE SESSION TODAY</strong>
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="text-muted small mb-1">Current Time</div>
                            <div class="fw-bold text-primary" id="currentTimeDisplay">
                                {{ $currentTime->format('h:i A') }}
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-3">
                    
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="session-detail-item">
                                <div class="text-muted small mb-1">
                                    <i class="ti ti-calendar me-1"></i>Date
                                </div>
                                <div class="fw-bold">
                                    {{ \App\Helpers\TimezoneHelper::formatForStudent($todaySession->start_date, $student->country ?? null, 'M d, Y') }}
                                </div>
                                @if($todaySession->day_of_week)
                                    <div class="text-muted small">{{ $todaySession->day_of_week }}</div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="session-detail-item">
                                <div class="text-muted small mb-1">
                                    <i class="ti ti-clock me-1"></i>Time
                                </div>
                                @if($todaySession->start_time && $todaySession->end_time)
                                    <div class="fw-bold">
                                        {{ \App\Helpers\TimezoneHelper::formatTimeForStudent($todaySession->start_date, $todaySession->start_time, $student->country ?? null, 'h:i A') }}
                                        - {{ \App\Helpers\TimezoneHelper::formatTimeForStudent($todaySession->start_date, $todaySession->end_time, $student->country ?? null, 'h:i A') }}
                                    </div>
                                @else
                                    <div class="text-muted">Time TBA</div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="session-detail-item">
                                <div class="text-muted small mb-1">
                                    <i class="ti ti-book me-1"></i>Course
                                </div>
                                <div class="fw-bold">{{ $todaySession->course->name ?? 'N/A' }}</div>
                                @if($todaySession->course)
                                    <div class="text-muted small">{{ $todaySession->course->level }}</div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="session-detail-item">
                                <div class="text-muted small mb-1">
                                    <i class="ti ti-user me-1"></i>Teacher
                                </div>
                                @if($todaySession->teacher)
                                    <div class="fw-bold">{{ $todaySession->teacher->name }}</div>
                                    @if($todaySession->teacher->email)
                                        <div class="text-muted small">{{ $todaySession->teacher->email }}</div>
                                    @endif
                                @else
                                    <div class="text-muted">Not assigned</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    @if($todaySession->meeting_link)
                    <div class="mt-4 text-center">
                        <a href="{{ $todaySession->meeting_link }}" target="_blank" class="btn btn-primary btn-lg px-5">
                            <i class="ti ti-video me-2"></i>Join Live Session
                        </a>
                    </div>
                    @else
                    <div class="mt-4 text-center">
                        <div class="alert alert-info mb-0">
                            <i class="ti ti-info-circle me-2"></i>Meeting link will be available soon
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="ti ti-filter me-2"></i>Filters</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('student.sessions') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Session name, course...">
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
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="scheduled" {{ request('status') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                    <option value="ongoing" {{ request('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Date From</label>
                                <input type="date" class="form-control form-control-sm" name="date_from" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-2">
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
                                $hasFilters = request()->filled('search') || request()->filled('course_id') || request()->filled('status') || request()->filled('date_from') || request()->filled('date_to');
                            @endphp
                            @if($hasFilters)
                            <div class="col-md-12">
                                <a href="{{ route('student.sessions') }}" class="btn btn-sm btn-outline-secondary">
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

    <!-- Sessions List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="ti ti-calendar me-2"></i>Scheduled Sessions</h5>
                </div>
                <div class="card-body">
                    @if($sessions->count() > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Course</th>
                                        <th>Teacher</th>
                                        <th>Meeting Link</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sessions as $session)
                                    <tr>
                                        <td>
                                            <div>
                                                <strong>{{ \App\Helpers\TimezoneHelper::formatForStudent($session->start_date, $student->country ?? null, 'M d, Y') }}</strong>
                                                @if($session->day_of_week)
                                                    <br><small class="text-muted">{{ $session->day_of_week }}</small>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            @if($session->start_time && $session->end_time)
                                                <div>
                                                    <strong>{{ \App\Helpers\TimezoneHelper::formatTimeForStudent($session->start_date, $session->start_time, $student->country ?? null, 'h:i A') }}</strong>
                                                    <br><small class="text-muted">to {{ \App\Helpers\TimezoneHelper::formatTimeForStudent($session->start_date, $session->end_time, $student->country ?? null, 'h:i A') }}</small>
                                                </div>
                                            @else
                                                <span class="text-muted">N/A</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                                                    <iconify-icon icon="solar:book-bold-duotone" class="text-primary"></iconify-icon>
                                                </div>
                                                <div>
                                                    <strong class="d-block">{{ $session->course->name ?? 'N/A' }}</strong>
                                                    @if($session->course)
                                                        <small class="text-muted">{{ $session->course->level }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if($session->teacher)
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-xs bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                                                        <iconify-icon icon="solar:user-bold-duotone" class="text-info"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <strong class="d-block">{{ $session->teacher->name }}</strong>
                                                        @if($session->teacher->email)
                                                            <small class="text-muted">{{ $session->teacher->email }}</small>
                                                        @endif
                                                    </div>
                                                </div>
                                            @else
                                                <span class="text-muted">Not assigned</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($session->meeting_link)
                                                <a href="{{ $session->meeting_link }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                    <i class="ti ti-external-link me-1"></i>Join Meeting
                                                </a>
                                            @else
                                                <span class="text-muted">Not available</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $session->status === 'scheduled' ? 'primary' : ($session->status === 'ongoing' ? 'info' : ($session->status === 'completed' ? 'success' : 'danger')) }}">
                                                <i class="ti ti-{{ $session->status === 'scheduled' ? 'clock' : ($session->status === 'ongoing' ? 'play' : ($session->status === 'completed' ? 'check' : 'x')) }} me-1"></i>
                                                {{ ucfirst($session->status) }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mt-4">
                            {{ $sessions->links() }}
                        </div>
                    @else
                        <div class="empty-state">
                            <iconify-icon icon="solar:calendar-mark-bold-duotone"></iconify-icon>
                            <h5>No Sessions Found</h5>
                            <p>You don't have any scheduled sessions yet</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    /* Live Session Card Styles */
    .live-session-card {
        animation: pulse-border 2s infinite;
        box-shadow: 0 8px 24px rgba(93, 135, 255, 0.2);
    }

    @keyframes pulse-border {
        0%, 100% {
            border-color: #5D87FF;
            box-shadow: 0 8px 24px rgba(93, 135, 255, 0.2);
        }
        50% {
            border-color: #4C6FD8;
            box-shadow: 0 8px 32px rgba(93, 135, 255, 0.4);
        }
    }

    .live-indicator {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #5D87FF, #4C6FD8, #5D87FF);
        background-size: 200% 100%;
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% {
            background-position: -200% 0;
        }
        100% {
            background-position: 200% 0;
        }
    }

    .live-badge {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(93, 135, 255, 0.15);
        border-radius: 50px;
        font-size: 0.875rem;
        color: #5D87FF;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .live-dot {
        width: 10px;
        height: 10px;
        background: #5D87FF;
        border-radius: 50%;
        animation: blink 1.5s infinite;
        box-shadow: 0 0 10px rgba(93, 135, 255, 0.8);
    }

    @keyframes blink {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.5;
            transform: scale(1.2);
        }
    }

    .session-detail-item {
        padding: 1rem;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .session-detail-item:hover {
        background: rgba(255, 255, 255, 0.8);
        transform: translateY(-2px);
    }

    #currentTimeDisplay {
        font-size: 1.5rem;
        font-family: 'Courier New', monospace;
    }
</style>
@endpush

@push('scripts')
<script>
    // Update current time every second
    @if(isset($timezone))
    function updateCurrentTime() {
        const timeElement = document.getElementById('currentTimeDisplay');
        if (timeElement) {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', { 
                hour: 'numeric', 
                minute: '2-digit',
                second: '2-digit',
                hour12: true,
                timeZone: '{{ $timezone }}'
            });
            timeElement.textContent = timeString;
        }
    }
    
    // Update immediately and then every second
    updateCurrentTime();
    setInterval(updateCurrentTime, 1000);
    @endif
</script>
@endpush
@endsection


@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Sessions for {{ $student->name }}</h3>
                    <p class="text-muted mb-0">View all class sessions for this student</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-success" id="markTodayAttendanceBtn" onclick="markTodayAttendance()">
                        <i class="ti ti-check me-2"></i>Mark Today's Attendance
                    </button>
                    <a href="{{ route('admin.sessions.index') }}" class="btn btn-outline-secondary">
                        <i class="ti ti-arrow-left me-2"></i>Back to Students
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Student Info Card -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-lg bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                            <span class="text-primary fw-bold fs-4">{{ strtoupper(substr($student->name ?? 'N', 0, 1)) }}</span>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1">{{ $student->name }}</h5>
                            <p class="text-muted mb-0">
                                <i class="ti ti-mail me-1"></i>{{ $student->email ?? 'No email' }}
                                @if($student->phone)
                                    | <i class="ti ti-phone me-1"></i>{{ $student->phone }}
                                @endif
                            </p>
                        </div>
                        <div>
                            <span class="badge bg-{{ $student->status === 'active' ? 'success' : 'secondary' }} fs-6">
                                {{ ucfirst($student->status) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Month Selector -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form id="monthFilterForm" method="GET" action="{{ route('admin.sessions.student', $student->id) }}">
                        <div class="row align-items-end">
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-bold">Select Month</label>
                                <select class="form-select" name="month" id="monthSelect" required>
                                    <option value="">-- Select Month --</option>
                                    @php
                                        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                    @endphp
                                    @foreach($months as $index => $month)
                                        <option value="{{ $index + 1 }}" {{ (isset($selectedMonth) && ($index + 1) == $selectedMonth) ? 'selected' : '' }}>
                                            {{ $month }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-bold">Select Year</label>
                                <select class="form-select" name="year" id="yearSelect" required>
                                    @for($year = date('Y') - 1; $year <= date('Y') + 1; $year++)
                                        <option value="{{ $year }}" {{ (isset($selectedYear) && $year == $selectedYear) ? 'selected' : (($year == date('Y') && !isset($selectedYear)) ? 'selected' : '') }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="ti ti-search me-2"></i>Load Sessions
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar View -->
    @if(isset($selectedMonth) && isset($selectedYear) && isset($calendarData))
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">
                        <i class="ti ti-calendar me-2"></i>
                        Sessions for {{ \Carbon\Carbon::create($selectedYear, $selectedMonth, 1)->format('F Y') }}
                    </h5>
                    <span class="badge bg-primary">{{ $sessions->count() ?? 0 }} Sessions</span>
                </div>
                <div class="card-body">
                    @if($sessions->count() > 0)
                    <!-- Calendar Grid -->
                    <div class="calendar-view">
                        <!-- Day Headers -->
                        <div class="calendar-header">
                            @php
                                $dayHeaders = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                            @endphp
                            @foreach($dayHeaders as $day)
                                <div class="calendar-day-header">{{ $day }}</div>
                            @endforeach
                        </div>
                        
                        <!-- Calendar Days -->
                        <div class="calendar-grid">
                            @foreach($calendarData as $dayData)
                                @php
                                    $sessionsData = [];
                                    foreach($dayData['sessions'] as $session) {
                                        $sessionData = [
                                            'id' => $session->id,
                                            'name' => $session->name,
                                            'start_date' => $session->start_date ? $session->start_date->format('Y-m-d') : null,
                                            'start_time' => $session->start_time,
                                            'end_time' => $session->end_time,
                                            'status' => $session->status,
                                            'day_of_week' => $session->day_of_week,
                                            'course' => $session->course ? ['name' => $session->course->name, 'level' => $session->course->level] : null,
                                            'teacher' => $session->teacher ? ['name' => $session->teacher->name] : null,
                                            'attendance' => $session->attendance ? [
                                                'status' => $session->attendance->status,
                                                'time' => $session->attendance->time,
                                                'remarks' => $session->attendance->remarks
                                            ] : null
                                        ];
                                        $sessionsData[] = $sessionData;
                                    }
                                @endphp
                                <div class="calendar-day {{ !$dayData['isCurrentMonth'] ? 'other-month' : '' }} {{ $dayData['isToday'] ? 'today' : '' }} {{ $dayData['hasAttendance'] ? 'has-attendance' : '' }}"
                                     @if(count($dayData['sessions']) > 0)
                                     data-date="{{ $dayData['date']->format('Y-m-d') }}"
                                     data-sessions-id="{{ $dayData['date']->format('Y-m-d') }}"
                                     onclick="handleCalendarDayClick(this)"
                                     style="cursor: pointer;"
                                     @else
                                     style="cursor: default;"
                                     @endif>
                                    <div class="calendar-day-number">
                                        {{ $dayData['date']->format('j') }}
                                        @if($dayData['isToday'])
                                            <span class="today-indicator"></span>
                                        @endif
                                    </div>
                                    @if($dayData['hasAttendance'] && count($dayData['sessions']) > 0)
                                        <span class="attendance-flag attendance-{{ $dayData['attendanceStatus'] }}" 
                                              title="Attendance: {{ ucfirst($dayData['attendanceStatus']) }}">
                                            <i class="ti ti-{{ $dayData['attendanceStatus'] === 'present' ? 'check-circle' : ($dayData['attendanceStatus'] === 'late' ? 'clock' : ($dayData['attendanceStatus'] === 'absent' ? 'x-circle' : 'checkbox')) }}"></i>
                                        </span>
                                    @endif
                                    <div class="calendar-sessions">
                                        @foreach($dayData['sessions'] as $session)
                                            <div class="session-item session-{{ $session->status }}" 
                                                 onclick="event.stopPropagation(); handleCalendarDayClick(this.closest('.calendar-day')); return false;"
                                                 data-bs-toggle="tooltip" 
                                                 data-bs-placement="top"
                                                 title="{{ $session->name }} - {{ $session->course->name ?? 'N/A' }} ({{ $session->start_date && $session->start_time ? \Carbon\Carbon::parse($session->start_date->format('Y-m-d') . ' ' . $session->start_time->format('H:i'), 'Asia/Karachi')->format('h:i A') : 'N/A' }})"
                                                 style="cursor: pointer;">
                                                <div class="session-time">
                                                    @if($session->start_time && $session->start_date)
                                                        {{ \Carbon\Carbon::parse($session->start_date->format('Y-m-d') . ' ' . $session->start_time->format('H:i'), 'Asia/Karachi')->format('h:i A') }}
                                                    @endif
                                                </div>
                                                <div class="session-course">
                                                    {{ strlen($session->course->name ?? 'N/A') > 15 ? substr($session->course->name ?? 'N/A', 0, 15) . '...' : ($session->course->name ?? 'N/A') }}
                                                </div>
                                                @if($session->teacher)
                                                    <div class="session-teacher">
                                                        <i class="ti ti-user me-1"></i>{{ strlen($session->teacher->name) > 12 ? substr($session->teacher->name, 0, 12) . '...' : $session->teacher->name }}
                                                    </div>
                                                @endif
                                                <div class="session-status">
                                                    <span class="badge badge-sm bg-{{ str_replace(['scheduled', 'ongoing', 'completed', 'cancelled'], ['info', 'success', 'secondary', 'danger'], $session->status) }}">
                                                        {{ ucfirst($session->status) }}
                                                    </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="text-center py-5">
                        <iconify-icon icon="solar:calendar-add-bold-duotone" class="fs-2 text-muted"></iconify-icon>
                        <p class="text-muted mb-0 mt-2">No sessions found for {{ \Carbon\Carbon::create($selectedYear, $selectedMonth, 1)->format('F Y') }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center py-5">
                    <iconify-icon icon="solar:calendar-bold-duotone" class="fs-1 text-muted mb-3"></iconify-icon>
                    <h5 class="text-muted">Select a Month to View Sessions</h5>
                    <p class="text-muted">Please select a month and year above to view class sessions for this student.</p>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<!-- Session Details Modal -->
<div class="modal fade" id="sessionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"><i class="ti ti-calendar me-2"></i>Session Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="sessionModalBody">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
.calendar-view {
    width: 100%;
}

.calendar-header {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 1px;
    background-color: #e9ecef;
    border: 1px solid #dee2e6;
    border-radius: 8px 8px 0 0;
    overflow: hidden;
}

.calendar-day-header {
    padding: 12px;
    text-align: center;
    font-weight: 600;
    font-size: 0.875rem;
    color: #495057;
    background-color: #f8f9fa;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 1px;
    background-color: #e9ecef;
    border: 1px solid #dee2e6;
    border-top: none;
    border-radius: 0 0 8px 8px;
    overflow: hidden;
}

.calendar-day {
    min-height: 120px;
    background-color: #fff;
    padding: 8px;
    position: relative;
    transition: all 0.2s ease;
}

.calendar-day:hover {
    background-color: #f8f9fa;
    z-index: 1;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.calendar-day.other-month {
    background-color: #f8f9fa;
    opacity: 0.6;
}

.calendar-day.today {
    background-color: #e7f3ff;
    border: 2px solid #5D87FF;
}

.calendar-day.today .calendar-day-number {
    color: #5D87FF;
    font-weight: 700;
}

.calendar-day-number {
    font-size: 0.9rem;
    font-weight: 600;
    color: #495057;
    margin-bottom: 4px;
    position: relative;
    display: inline-block;
}

.today-indicator {
    position: absolute;
    top: -2px;
    right: -2px;
    width: 6px;
    height: 6px;
    background-color: #5D87FF;
    border-radius: 50%;
}

.calendar-day.has-attendance {
    border-left: 3px solid #28a745;
}

.attendance-flag {
    position: absolute;
    bottom: 4px;
    right: 4px;
    font-size: 0.75rem;
    background: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
    z-index: 2;
}

.attendance-flag.attendance-present {
    color: #28a745;
    border: 2px solid #28a745;
}

.attendance-flag.attendance-late {
    color: #ffc107;
    border: 2px solid #ffc107;
}

.attendance-flag.attendance-absent {
    color: #dc3545;
    border: 2px solid #dc3545;
}

.attendance-flag.attendance-excused {
    color: #0dcaf0;
    border: 2px solid #0dcaf0;
}

.calendar-sessions {
    display: flex;
    flex-direction: column;
    gap: 4px;
    max-height: 90px;
    overflow-y: auto;
}

.session-item {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 6px 8px;
    border-radius: 6px;
    font-size: 0.75rem;
    cursor: pointer;
    transition: all 0.2s ease;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.session-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.session-item.session-scheduled {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
}

.session-item.session-ongoing {
    background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
}

.session-item.session-completed {
    background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
}

.session-item.session-cancelled {
    background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
}

.session-time {
    font-weight: 600;
    font-size: 0.7rem;
    margin-bottom: 2px;
}

.session-course {
    font-weight: 500;
    margin-bottom: 2px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.session-teacher {
    font-size: 0.65rem;
    opacity: 0.9;
    display: flex;
    align-items: center;
    margin-top: 2px;
}

.session-status {
    margin-top: 4px;
}

.session-status .badge {
    font-size: 0.6rem;
    padding: 2px 6px;
}

/* Scrollbar styling */
.calendar-sessions::-webkit-scrollbar {
    width: 4px;
}

.calendar-sessions::-webkit-scrollbar-track {
    background: transparent;
}

.calendar-sessions::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 2px;
}

.calendar-sessions::-webkit-scrollbar-thumb:hover {
    background: #999;
}

@media (max-width: 768px) {
    .calendar-day {
        min-height: 80px;
        padding: 4px;
    }
    
    .session-item {
        padding: 4px 6px;
        font-size: 0.65rem;
    }
    
    .calendar-day-number {
        font-size: 0.8rem;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Store sessions data in a global object
const sessionsDataMap = {};
@if(isset($calendarData) && count($calendarData) > 0)
    @php
        $first = true;
    @endphp
    @foreach($calendarData as $dayData)
        @if(count($dayData['sessions']) > 0)
            @php
                $sessionsData = [];
                foreach($dayData['sessions'] as $session) {
                    // Format times in Asia/Karachi timezone for admin display
                    $startTimeFormatted = null;
                    $endTimeFormatted = null;
                    if ($session->start_date && $session->start_time) {
                        $startDateTime = \Carbon\Carbon::parse($session->start_date->format('Y-m-d') . ' ' . $session->start_time->format('H:i'), 'Asia/Karachi');
                        $startTimeFormatted = $startDateTime->format('h:i A');
                    }
                    if ($session->start_date && $session->end_time) {
                        $endDateTime = \Carbon\Carbon::parse($session->start_date->format('Y-m-d') . ' ' . $session->end_time->format('H:i'), 'Asia/Karachi');
                        $endTimeFormatted = $endDateTime->format('h:i A');
                    }
                    
                    $sessionData = [
                        'id' => $session->id,
                        'name' => $session->name,
                        'start_date' => $session->start_date ? $session->start_date->format('Y-m-d') : null,
                        'start_time' => $startTimeFormatted,
                        'end_time' => $endTimeFormatted,
                        'status' => $session->status,
                        'day_of_week' => $session->day_of_week,
                        'course' => $session->course ? ['name' => $session->course->name, 'level' => $session->course->level] : null,
                        'teacher' => $session->teacher ? ['name' => $session->teacher->name] : null,
                        'attendance' => $session->attendance ? [
                            'status' => $session->attendance->status,
                            'time' => $session->attendance->time,
                            'remarks' => $session->attendance->remarks
                        ] : null
                    ];
                    $sessionsData[] = $sessionData;
                }
            @endphp
            sessionsDataMap['{{ $dayData['date']->format('Y-m-d') }}'] = @json($sessionsData);
        @endif
    @endforeach
@endif

// Handle calendar day click
function handleCalendarDayClick(element) {
    const date = element.getAttribute('data-date');
    
    if (!date) {
        console.error('Missing date');
        return;
    }
    
    const sessions = sessionsDataMap[date];
    
    if (!sessions || sessions.length === 0) {
        console.log('No sessions for this date');
        return;
    }
    
    openSessionModal(date, sessions);
}

// Make function globally accessible
window.openSessionModal = function(date, sessions) {
    console.log('openSessionModal called', date, sessions);
    
    if (!sessions || sessions.length === 0) {
        console.log('No sessions found');
        showToast('No sessions found for this date', 'warning');
        return;
    }
    
    const modalBody = document.getElementById('sessionModalBody');
    if (!modalBody) {
        console.error('Modal body not found');
        return;
    }
    
    // Parse date correctly
    let dateObj;
    if (date.includes('T')) {
        dateObj = new Date(date);
    } else {
        dateObj = new Date(date + 'T00:00:00');
    }
    
    if (isNaN(dateObj.getTime())) {
        console.error('Invalid date:', date);
        dateObj = new Date();
    }
    
    const formattedDate = dateObj.toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    
    let html = `<div class="mb-3">
        <h6 class="text-muted mb-2">Date: <strong>${formattedDate}</strong></h6>
    </div>`;
    
    sessions.forEach(session => {
        const sessionDate = session.start_date || date;
        // Times are already formatted in Asia/Karachi timezone from backend
        const startTime = session.start_time || 'N/A';
        const endTime = session.end_time || 'N/A';
        const attendance = session.attendance;
        
        html += `<div class="card mb-3 border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <strong>Session:</strong> ${session.name || 'N/A'}
                    </div>
                    <div class="col-md-6 mb-2">
                        <strong>Course:</strong> ${session.course ? session.course.name : 'N/A'}
                    </div>
                    <div class="col-md-6 mb-2">
                        <strong>Teacher:</strong> ${session.teacher ? session.teacher.name : 'TBA'}
                    </div>
                    <div class="col-md-6 mb-2">
                        <strong>Time:</strong> ${startTime} - ${endTime}
                    </div>
                    <div class="col-md-6 mb-2">
                        <strong>Status:</strong> 
                        <span class="badge bg-${session.status === 'scheduled' ? 'info' : (session.status === 'ongoing' ? 'success' : (session.status === 'completed' ? 'secondary' : 'danger'))}">
                            ${session.status ? session.status.charAt(0).toUpperCase() + session.status.slice(1) : 'N/A'}
                        </span>
                    </div>
                </div>`;
        
        if (attendance) {
            html += `<hr>
                <div class="alert alert-success mb-0">
                    <h6 class="mb-2"><i class="ti ti-check-circle me-2"></i>Attendance Marked</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Status:</strong> 
                            <span class="badge bg-${attendance.status === 'present' ? 'success' : (attendance.status === 'late' ? 'warning' : (attendance.status === 'absent' ? 'danger' : 'info'))}">
                                ${attendance.status ? attendance.status.charAt(0).toUpperCase() + attendance.status.slice(1) : 'N/A'}
                            </span>
                        </div>
                        <div class="col-md-6">
                            <strong>Time Marked:</strong> ${formatAttendanceTime(attendance.time)}
                        </div>
                        ${attendance.remarks ? `<div class="col-12 mt-2"><strong>Remarks:</strong> ${attendance.remarks}</div>` : ''}
                    </div>
                </div>`;
        } else {
            html += `<hr>
                <div class="alert alert-warning mb-0">
                    <h6 class="mb-3"><i class="ti ti-alert-circle me-2"></i>Attendance Not Marked</h6>
                    <div class="d-flex gap-2 flex-wrap">
                        <button class="btn btn-sm btn-success" onclick="markAttendance(${session.id}, '${sessionDate}', 'present')">
                            <i class="ti ti-check me-1"></i>Present
                        </button>
                        <button class="btn btn-sm btn-warning" onclick="markAttendance(${session.id}, '${sessionDate}', 'late')">
                            <i class="ti ti-clock me-1"></i>Late
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="markAttendance(${session.id}, '${sessionDate}', 'absent')">
                            <i class="ti ti-x me-1"></i>Absent
                        </button>
                        <button class="btn btn-sm btn-info" onclick="markAttendance(${session.id}, '${sessionDate}', 'excused')">
                            <i class="ti ti-checkbox me-1"></i>Excused
                        </button>
                    </div>
                </div>`;
        }
        
        html += `</div></div>`;
    });
    
    modalBody.innerHTML = html;
    const modalElement = document.getElementById('sessionModal');
    if (!modalElement) {
        console.error('Modal element not found');
        return;
    }
    const modal = new bootstrap.Modal(modalElement);
    modal.show();
    console.log('Modal should be showing now');
}

function formatTime(timeString) {
    if (!timeString) return 'N/A';
    const time = timeString.split(':');
    const hours = parseInt(time[0]);
    const minutes = time[1];
    const ampm = hours >= 12 ? 'PM' : 'AM';
    const displayHours = hours % 12 || 12;
    return `${displayHours}:${minutes} ${ampm}`;
}

function formatAttendanceTime(timeString) {
    if (!timeString) return 'N/A';
    
    // Handle ISO datetime format (2025-12-26T14:34:14.000000Z)
    if (timeString.includes('T')) {
        const date = new Date(timeString);
        if (isNaN(date.getTime())) {
            // If parsing fails, try to extract just the time part
            const timeMatch = timeString.match(/(\d{2}):(\d{2}):(\d{2})/);
            if (timeMatch) {
                const hours = parseInt(timeMatch[1]);
                const minutes = timeMatch[2];
                const ampm = hours >= 12 ? 'PM' : 'AM';
                const displayHours = hours % 12 || 12;
                return `${displayHours}:${minutes} ${ampm}`;
            }
            return timeString;
        }
        return date.toLocaleString('en-US', { 
            month: 'short', 
            day: 'numeric', 
            year: 'numeric',
            hour: 'numeric', 
            minute: '2-digit',
            hour12: true 
        });
    }
    
    // Handle simple time format (HH:MM:SS)
    if (timeString.includes(':')) {
        const time = timeString.split(':');
        const hours = parseInt(time[0]);
        const minutes = time[1];
        const ampm = hours >= 12 ? 'PM' : 'AM';
        const displayHours = hours % 12 || 12;
        return `${displayHours}:${minutes} ${ampm}`;
    }
    
    return timeString;
}

function markAttendance(sessionId, date, status) {
    const formData = new FormData();
    formData.append('class_session_id', sessionId);
    formData.append('date', date);
    formData.append('status', status);
    formData.append('_token', '{{ csrf_token() }}');
    
    fetch('{{ route("admin.sessions.mark-attendance", $student->id) }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast(data.message, 'success');
            bootstrap.Modal.getInstance(document.getElementById('sessionModal')).hide();
            // Reload page to update calendar
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        } else {
            showToast(data.message || 'Failed to mark attendance', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('An error occurred while marking attendance', 'error');
    });
}
function markTodayAttendance() {
    const btn = document.getElementById('markTodayAttendanceBtn');
    const originalText = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<i class="ti ti-loader me-2"></i>Processing...';
    
    fetch('{{ route("admin.sessions.mark-today-attendance", $student->id) }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        btn.disabled = false;
        btn.innerHTML = originalText;
        
        if (data.success) {
            showToast(data.message, 'success');
        } else {
            showToast(data.message || 'Failed to mark attendance', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        btn.disabled = false;
        btn.innerHTML = originalText;
        showToast('An error occurred while marking attendance', 'error');
    });
}

function showToast(message, type) {
    // Create toast element
    const toast = document.createElement('div');
    toast.className = `alert alert-${type === 'success' ? 'success' : 'danger'} position-fixed`;
    toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);';
    toast.innerHTML = `
        <div class="d-flex align-items-center">
            <i class="ti ti-${type === 'success' ? 'check-circle' : 'alert-circle'} me-2 fs-5"></i>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(toast);
    
    // Remove toast after 3 seconds
    setTimeout(() => {
        toast.style.transition = 'opacity 0.3s';
        toast.style.opacity = '0';
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3000);
}
</script>
@endpush
@endsection


@extends('student.main')

@section('title', 'Notifications')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>Notifications</h2>
                <p>View all your notifications</p>
            </div>
            @if($notifications->where('read', false)->count() > 0)
            <form action="{{ route('student.notifications.mark-all-read') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-primary">
                    <i class="ti ti-check me-2"></i>Mark All as Read
                </button>
            </form>
            @endif
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
                    <form method="GET" action="{{ route('student.notifications') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Title, Message...">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Read Status</label>
                                <select class="form-select form-select-sm" name="read_status">
                                    <option value="">All</option>
                                    <option value="read" {{ request('read_status') == 'read' ? 'selected' : '' }}>Read</option>
                                    <option value="unread" {{ request('read_status') == 'unread' ? 'selected' : '' }}>Unread</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Type</label>
                                <select class="form-select form-select-sm" name="type">
                                    <option value="">All Types</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>{{ ucfirst(str_replace('_', ' ', $type)) }}</option>
                                    @endforeach
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
                                $hasFilters = request()->filled('search') || request()->filled('read_status') || request()->filled('type') || request()->filled('date_from') || request()->filled('date_to');
                            @endphp
                            @if($hasFilters)
                            <div class="col-md-12">
                                <a href="{{ route('student.notifications') }}" class="btn btn-sm btn-outline-secondary">
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

    <!-- Notifications List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if($notifications->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($notifications as $notification)
                            <div class="list-group-item border-0 px-0 py-3 {{ $notification->read ? 'opacity-75' : '' }}">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar-xs bg-{{ $notification->color }}-subtle text-{{ $notification->color }} rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <iconify-icon icon="{{ $notification->icon ?? 'solar:bell-bold-duotone' }}" class="fs-4"></iconify-icon>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start mb-1">
                                            <h6 class="mb-0 fw-semibold">{{ $notification->title }}</h6>
                                            @if(!$notification->read)
                                                <span class="badge bg-primary rounded-pill" style="width: 10px; height: 10px;"></span>
                                            @endif
                                        </div>
                                        <p class="mb-2 text-muted">{{ $notification->message }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">
                                                <i class="ti ti-clock me-1"></i>
                                                @if(isset($student) && $student->country)
                                                    {{ \App\Helpers\TimezoneHelper::formatForStudent($notification->created_at, $student->country, 'M d, Y h:i A') }}
                                                    <span class="text-muted">({{ $notification->created_at->diffForHumans() }})</span>
                                                @else
                                                    {{ $notification->created_at->diffForHumans() }}
                                                @endif
                                            </small>
                                            @if(!$notification->read)
                                            <form action="{{ route('student.notifications.read', $notification->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-link text-primary p-0" style="font-size: 0.75rem;">
                                                    Mark as read
                                                </button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <div class="mt-4">
                            {{ $notifications->links() }}
                        </div>
                    @else
                        <div class="empty-state">
                            <iconify-icon icon="solar:bell-off-bold-duotone"></iconify-icon>
                            <h5>No Notifications</h5>
                            <p>You don't have any notifications yet</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


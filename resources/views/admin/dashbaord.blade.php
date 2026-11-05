@extends('admin.main')

@section('content')

<div class="container-fluid">
    {{-- Statistics Cards Row --}}
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-primary bg-opacity-10 rounded">
                            <iconify-icon icon="solar:book-bold-duotone" class="fs-1 text-primary"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Trial Classes</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_trial_classes'] }}</h3>
                            <small class="text-success">
                                <i class="ti ti-arrow-up"></i> {{ $stats['today_trial_classes'] }} today
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-success bg-opacity-10 rounded">
                            <iconify-icon icon="solar:document-bold-duotone" class="fs-1 text-success"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Blogs</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_blogs'] }}</h3>
                            <small class="text-primary">
                                <i class="ti ti-check"></i> {{ $stats['published_blogs'] }} published
                            </small>
                        </div>
                    </div>
        </div>
      </div>
    </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
        <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-warning bg-opacity-10 rounded">
                            <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="fs-1 text-warning"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Users</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['total_users'] }}</h3>
                            <small class="text-info">Registered users</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-info bg-opacity-10 rounded">
                            <iconify-icon icon="solar:calendar-bold-duotone" class="fs-1 text-info"></iconify-icon>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">This Week</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['recent_trial_classes'] }}</h3>
                            <small class="text-primary">
                                <i class="ti ti-calendar"></i> Last 7 days
                            </small>
                        </div>
                    </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Charts Row --}}
    <div class="row mb-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title mb-0">
                            <iconify-icon icon="solar:chart-line-bold-duotone" class="text-primary"></iconify-icon>
                            Trial Classes Over Time (Last 30 Days)
                        </h5>
            <div>
                            <button class="btn btn-sm btn-outline-primary" onclick="refreshChart()">
                                <i class="ti ti-refresh"></i> Refresh
                            </button>
                        </div>
              </div>
                    <div id="trialChart" style="height: 350px;"></div>
              </div>
            </div>
              </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">
                        <iconify-icon icon="solar:map-point-bold-duotone" class="text-success"></iconify-icon>
                        Top Countries
                    </h5>
                    <div id="countryChart" style="height: 350px;"></div>
          </div>
        </div>
      </div>
    </div>

    {{-- Recent Activity Row --}}
    <div class="row mb-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title mb-0">
                            <iconify-icon icon="solar:user-check-rounded-bold-duotone" class="text-primary"></iconify-icon>
                            Recent Trial Classes
                        </h5>
                        <a href="{{ route('admin.trial.classes') }}" class="btn btn-sm btn-outline-primary">
                            View All <i class="ti ti-arrow-right ms-1"></i>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recent_classes as $class)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs bg-primary bg-opacity-10 rounded">
                                                <span class="text-primary">{{ strtoupper(substr($class->name ?? 'N/A', 0, 1)) }}</span>
                                            </div>
                                            <span class="ms-2 fw-medium">{{ $class->name ?? 'N/A' }}</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">{{ $class->email ?? '-' }}</td>
                                    <td>
                                        @if($class->country)
                                            <span class="badge bg-light text-dark">{{ $class->country }}</span>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="text-muted">
                                        <small>{{ $class->created_at->format('M d, Y') }}</small>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#classModal{{ $class->id }}">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">
                                        <i class="ti ti-inbox fs-2"></i>
                                        <p class="mb-0 mt-2">No recent trial classes</p>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
        </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title mb-0">
                            <iconify-icon icon="solar:document-bold-duotone" class="text-success"></iconify-icon>
                            Recent Blogs
                        </h5>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-success">
                            View All <i class="ti ti-arrow-right ms-1"></i>
                        </a>
                    </div>
                    <div class="list-group list-group-flush">
                        @forelse($recent_blogs as $blog)
                        <div class="list-group-item border-0 px-0 py-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    @if($blog->image_url)
                                    <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="rounded" width="80" height="60" style="object-fit: cover;">
                                    @else
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 80px; height: 60px;">
                                        <iconify-icon icon="solar:gallery-bold-duotone" class="text-muted"></iconify-icon>
                                    </div>
                                    @endif
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 fw-semibold">{{ Str::limit($blog->title, 50) }}</h6>
                                    <p class="mb-1 text-muted small">{{ Str::limit($blog->excerpt ?? $blog->content, 60) }}</p>
                                    <div class="d-flex align-items-center gap-3">
                                        <small class="text-muted">
                                            <i class="ti ti-calendar"></i> {{ $blog->created_at->format('M d, Y') }}
                                        </small>
                                        <span class="badge bg-{{ $blog->status ? 'success' : 'secondary' }}">
                                            {{ $blog->status ? 'Published' : 'Draft' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="list-group-item border-0 text-center py-4">
                            <i class="ti ti-file-text fs-2 text-muted"></i>
                            <p class="mb-0 mt-2 text-muted">No recent blogs</p>
            </div>
                        @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Quick Actions --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">
                        <iconify-icon icon="solar:widget-4-bold-duotone" class="text-info"></iconify-icon>
                        Quick Actions
                    </h5>
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('admin.trial.classes') }}" class="text-decoration-none">
                                <div class="card border hover-shadow">
                                    <div class="card-body text-center p-4">
                                        <iconify-icon icon="solar:book-bold-duotone" class="fs-1 text-primary mb-3"></iconify-icon>
                                        <h6 class="fw-semibold mb-0">Manage Trial Classes</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('admin.blogs.index') }}" class="text-decoration-none">
                                <div class="card border hover-shadow">
                                    <div class="card-body text-center p-4">
                                        <iconify-icon icon="solar:document-bold-duotone" class="fs-1 text-success mb-3"></iconify-icon>
                                        <h6 class="fw-semibold mb-0">Manage Blogs</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('admin.blogs.create') }}" class="text-decoration-none">
                                <div class="card border hover-shadow">
                                    <div class="card-body text-center p-4">
                                        <iconify-icon icon="solar:add-circle-bold-duotone" class="fs-1 text-info mb-3"></iconify-icon>
                                        <h6 class="fw-semibold mb-0">Create New Blog</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ url('/') }}" target="_blank" class="text-decoration-none">
                                <div class="card border hover-shadow">
                                    <div class="card-body text-center p-4">
                                        <iconify-icon icon="solar:external-link-bold-duotone" class="fs-1 text-warning mb-3"></iconify-icon>
                                        <h6 class="fw-semibold mb-0">Visit Website</h6>
        </div>
            </div>
                            </a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>

{{-- Modal for Class Details --}}
@foreach($recent_classes as $class)
<div class="modal fade" id="classModal{{ $class->id }}" tabindex="-1" aria-labelledby="classModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="classModalLabel">Trial Class Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Name:</div>
                    <div class="col-sm-8">{{ $class->name ?? 'N/A' }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Email:</div>
                    <div class="col-sm-8">{{ $class->email ?? '-' }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Phone:</div>
                    <div class="col-sm-8">{{ $class->phone ?? '-' }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Country:</div>
                    <div class="col-sm-8">{{ $class->country ?? '-' }}</div>
                </div>
                @if($class->message)
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Message:</div>
                    <div class="col-sm-8">{{ $class->message }}</div>
                </div>
                @endif
                <div class="row">
                    <div class="col-sm-4 fw-semibold">Date:</div>
                    <div class="col-sm-8">{{ $class->created_at->format('F d, Y h:i A') }}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
    </div>
  </div>
@endforeach

@endsection

@push('page_libs')
<script src="{{ asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
@endpush

@push('scripts')
<script>
    // Chart data
    const chartData = @json($trial_over_time);
    const countryData = @json($trial_by_country);

    // Initialize Trial Chart
    document.addEventListener('DOMContentLoaded', function() {
        // Line Chart
        const trialOptions = {
            series: [{
                name: 'Trial Classes',
                data: Object.values(chartData)
            }],
            chart: {
                height: 350,
                type: 'line',
                toolbar: { show: false },
                zoom: { enabled: false }
            },
            dataLabels: { enabled: false },
            stroke: { curve: 'smooth', width: 3 },
            xaxis: {
                categories: Object.keys(chartData),
                labels: {
                    formatter: function(value) {
                        const date = new Date(value + 'T00:00:00');
                        return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
                    }
                }
            },
            colors: ['#5D87FF'],
            grid: { show: true, borderColor: '#E5E9EF', strokeDashArray: 5 },
            tooltip: {
                theme: 'light'
            }
        };

        const trialChart = new ApexCharts(document.querySelector("#trialChart"), trialOptions);
        trialChart.render();

        // Donut Chart for Countries
        const countryOptions = {
            series: countryData.map(item => item.total),
            chart: {
                type: 'donut',
                height: 350,
            },
            labels: countryData.map(item => item.country || 'Unknown'),
            colors: ['#5D87FF', '#13DEB9', '#FFAE1F', '#FA896B', '#733CFF', '#FF5858'],
            legend: {
                position: 'bottom',
                fontSize: '14px'
            },
            tooltip: {
                theme: 'light'
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '70%'
                    }
                }
            }
        };

        const countryChart = new ApexCharts(document.querySelector("#countryChart"), countryOptions);
        countryChart.render();
    });

    function refreshChart() {
        location.reload();
    }
</script>
@endpush

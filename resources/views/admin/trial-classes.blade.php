@extends('admin.main')

@section('content')
<div class="container-fluid">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Page Header --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Trial Classes</h3>
                    <p class="text-muted mb-0">Manage and view all trial class registrations</p>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <button type="button" class="btn btn-outline-danger" id="bulkDeleteBtn" disabled>
                        <i class="ti ti-trash"></i> Delete selected
                    </button>
                    <button class="btn btn-outline-primary" onclick="window.print()">
                        <i class="ti ti-printer"></i> Print
                    </button>
                    <a href="{{ route('admin.trial.classes.export') }}" class="btn btn-outline-success" id="exportBtn">
                        <i class="ti ti-download"></i> <span id="exportText">Export CSV</span>
                        <span id="exportSpinner" style="display: none;"><i class="ti ti-loader spin"></i> Exporting...</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Statistics Cards --}}
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-primary bg-opacity-10 rounded">
                            <i class="ti ti-users text-primary fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted mb-1 fw-normal">Total Registrations</h6>
                            <h3 class="mb-0 fw-bold" id="totalCount">{{ $classes->count() }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Filters --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form id="filterForm" class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Search</label>
                            <input type="text" class="form-control" id="searchInput" placeholder="Name, Email, Phone...">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" id="countryFilter">
                                <option value="">All Countries</option>
                                @foreach(\App\Models\TrialClass::select('country')->distinct()->whereNotNull('country')->orderBy('country')->pluck('country') as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Date From</label>
                            <input type="date" class="form-control" id="dateFrom">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Date To</label>
                            <input type="date" class="form-control" id="dateTo">
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button" class="btn btn-primary w-100" onclick="applyFilters()">
                                <i class="ti ti-filter"></i> Filter
                            </button>
                        </div>
                    </form>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clearFilters()">
                            <i class="ti ti-x"></i> Clear Filters
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
    <div class="table-responsive">
                        <table id="trialClassesTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead class="table-light">
                <tr>
                    <th class="text-center" style="width: 2.5rem;">
                        <input type="checkbox" class="form-check-input" id="selectAllTrialClasses" title="Select all">
                    </th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                                    <th>Country</th>
                    <th>Message</th>
                                    <th>Date</th>
                                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                                @foreach ($classes as $index => $class)
                                    <tr data-trial-id="{{ $class->id }}">
                                        <td class="text-center">
                                            <input type="checkbox" class="form-check-input trial-class-select" value="{{ $class->id }}">
                                        </td>
                                        <td>{{ $class->id }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-primary bg-opacity-10 rounded">
                                                    <span class="text-primary">{{ strtoupper(substr($class->name ?? 'N/A', 0, 1)) }}</span>
                                                </div>
                                                <span class="ms-2 fw-medium">{{ $class->name ?? 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="mailto:{{ $class->email }}" class="text-dark text-decoration-none">
                                                {{ $class->email ?? '-' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="tel:{{ $class->phone }}" class="text-dark text-decoration-none">
                                                {{ $class->phone ?? '-' }}
                                            </a>
                                        </td>
                                        <td>{{ $class->country ?? '-' }}</td>
                                        <td>
                                            @if($class->message)
                                                <button class="btn btn-sm btn-outline-info view-message" data-message="{{ $class->message }}" data-name="{{ $class->name }}">
                                                    View
                                                </button>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td data-order="{{ $class->created_at->format('Y-m-d H:i:s') }}">{{ $class->created_at->format('d M Y') }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-outline-primary view-details" 
                                                    data-id="{{ $class->id }}"
                                                    data-name="{{ $class->name }}"
                                                    data-email="{{ $class->email }}"
                                                    data-phone="{{ $class->phone }}"
                                                    data-country="{{ $class->country }}"
                                                    data-message="{{ $class->message }}"
                                                    data-date="{{ $class->created_at->format('F d, Y h:i A') }}">
                                                <i class="ti ti-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger btn-delete-trial"
                                                    data-id="{{ $class->id }}"
                                                    data-delete-url="{{ route('admin.trial.classes.destroy', $class) }}"
                                                    title="Delete">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </td>
                    </tr>
                                @endforeach
            </tbody>
        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

{{-- Modals --}}
<div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Trial Class Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="detailModalBody">
                <!-- Content will be loaded here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>
    
<div class="modal fade" id="messageModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="messageModalBody">
                <!-- Content will be loaded here -->
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .spin {
        animation: spin 1s linear infinite;
    }
    
    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px 10px;
    }
    
    .dataTables_wrapper .dataTables_length select {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px 10px;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize DataTable
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        const bulkDeleteUrl = @json(route('admin.trial.classes.bulk-delete'));

        const table = $('#trialClassesTable').DataTable({
            "processing": true,
            "pageLength": 10,
            "order": [[ 7, "desc" ]], // Newest date first (server list is already newest-first)
            "columnDefs": [
                { "orderable": false, "targets": [0, 6, 8] } // Checkbox, Message, Actions
            ],
            "language": {
                "search": "Search:",
                "lengthMenu": "Show _MENU_ entries",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries to show",
                "infoFiltered": "(filtered from _MAX_ total entries)"
            }
        });

        function getSelectedTrialIds() {
            return $('.trial-class-select:checked').map(function () { return this.value; }).get();
        }

        function updateBulkDeleteState() {
            const n = getSelectedTrialIds().length;
            $('#bulkDeleteBtn').prop('disabled', n === 0);
        }

        $('#selectAllTrialClasses').on('change', function () {
            const checked = $(this).prop('checked');
            $('.trial-class-select').prop('checked', checked);
            updateBulkDeleteState();
        });

        $(document).on('change', '.trial-class-select', function () {
            const total = $('.trial-class-select').length;
            const checked = $('.trial-class-select:checked').length;
            $('#selectAllTrialClasses').prop('checked', total > 0 && checked === total);
            updateBulkDeleteState();
        });

        $(document).on('click', '.btn-delete-trial', function () {
            const id = $(this).data('id');
            const url = $(this).data('delete-url');
            if (!confirm('Delete registration #' + id + '? This cannot be undone.')) return;

            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(function (r) {
                if (!r.ok) throw new Error('Delete failed');
                return r.json();
            }).then(function () {
                window.location.reload();
            }).catch(function () {
                alert('Could not delete. Please try again.');
            });
        });

        $('#bulkDeleteBtn').on('click', function () {
            const ids = getSelectedTrialIds();
            if (ids.length === 0) return;
            if (!confirm('Delete ' + ids.length + ' registration(s)? This cannot be undone.')) return;

            fetch(bulkDeleteUrl, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ ids: ids.map(function (x) { return parseInt(x, 10); }) })
            }).then(function (r) {
                if (!r.ok) throw new Error('Bulk delete failed');
                return r.json();
            }).then(function () {
                window.location.reload();
            }).catch(function () {
                alert('Could not delete selected rows. Please try again.');
            });
        });

        // Export button handler
        const exportBtn = document.getElementById('exportBtn');
        if (exportBtn) {
            exportBtn.addEventListener('click', function(e) {
                const text = document.getElementById('exportText');
                const spinner = document.getElementById('exportSpinner');
                
                if (text && spinner) {
                    text.style.display = 'none';
                    spinner.style.display = 'inline';
                    setTimeout(function() {
                        text.style.display = 'inline';
                        spinner.style.display = 'none';
                    }, 2000);
                }
            });
        }

        // View details modal
        $(document).on('click', '.view-details', function() {
            const data = {
                name: $(this).data('name') || 'N/A',
                email: $(this).data('email') || '-',
                phone: $(this).data('phone') || '-',
                country: $(this).data('country') || '-',
                message: $(this).data('message') || '',
                date: $(this).data('date')
            };

            let html = `
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Name:</div>
                    <div class="col-sm-8">${data.name}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Email:</div>
                    <div class="col-sm-8">${data.email}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Phone:</div>
                    <div class="col-sm-8">${data.phone}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Country:</div>
                    <div class="col-sm-8">${data.country}</div>
                </div>
            `;

            if (data.message) {
                html += `
                <div class="row mb-3">
                    <div class="col-sm-4 fw-semibold">Message:</div>
                    <div class="col-sm-8">${data.message}</div>
                </div>
                `;
            }

            html += `
                <div class="row">
                    <div class="col-sm-4 fw-semibold">Date:</div>
                    <div class="col-sm-8">${data.date}</div>
                </div>
            `;

            $('#detailModalBody').html(html);
            new bootstrap.Modal(document.getElementById('detailModal')).show();
        });

        // View message modal
        $(document).on('click', '.view-message', function() {
            const message = $(this).data('message');
            const name = $(this).data('name') || 'User';
            
            $('#messageModal .modal-title').text('Message from ' + name);
            $('#messageModalBody').html('<p>' + message + '</p>');
            new bootstrap.Modal(document.getElementById('messageModal')).show();
        });

        // Filter functions
        window.applyFilters = function() {
            const search = $('#searchInput').val().toLowerCase();
            const country = $('#countryFilter').val();
            const dateFrom = $('#dateFrom').val();
            const dateTo = $('#dateTo').val();

            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                let match = true;

                // Search filter (Name, Email, Phone columns)
                if (search) {
                    const name = data[2].toLowerCase();
                    const email = data[3].toLowerCase();
                    const phone = data[4].toLowerCase();
                    
                    if (!name.includes(search) && !email.includes(search) && !phone.includes(search)) {
                        match = false;
                    }
                }

                // Country filter
                if (country && data[5] !== country) {
                    match = false;
                }

                // Date range filter
                if (dateFrom || dateTo) {
                    const dateStr = data[7];
                    const rowDate = new Date(dateStr);
                    
                    if (dateFrom && rowDate < new Date(dateFrom)) {
                        match = false;
                    }
                    if (dateTo && rowDate > new Date(dateTo)) {
                        match = false;
                    }
                }

                return match;
            });

            table.draw();
        };

        window.clearFilters = function() {
            $('#searchInput').val('');
            $('#countryFilter').val('');
            $('#dateFrom').val('');
            $('#dateTo').val('');
            
            $.fn.dataTable.ext.search.pop();
            table.draw();
        };

        // Update count on filter
        table.on('draw', function() {
            const filteredCount = table.rows({ filter: 'applied' }).count();
            $('#totalCount').text(filteredCount);
        });

        // Search on Enter key
        $('#searchInput').on('keyup', function(e) {
            if (e.key === 'Enter') {
                applyFilters();
            }
        });
    });
</script>
@endpush
@endsection

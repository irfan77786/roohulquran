@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Permission Management</h3>
                    <p class="text-muted mb-0">Manage system permissions by module</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#permissionModal" onclick="clearPermissionForm()">
                    <i class="ti ti-plus"></i> Add Permission
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
                    <form method="GET" action="{{ route('admin.permissions.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Name, Description, Module...">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Module</label>
                                <select class="form-select form-select-sm" name="module">
                                    <option value="">All Modules</option>
                                    @foreach($modules as $module)
                                        <option value="{{ $module }}" {{ request('module') == $module ? 'selected' : '' }}>{{ ucfirst(str_replace('-', ' ', $module)) }}</option>
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
                            <div class="col-md-2">
                                <label class="form-label small">&nbsp;</label>
                                <button type="submit" class="btn btn-sm btn-primary w-100">
                                    <i class="ti ti-filter"></i>
                                </button>
                            </div>
                            @php
                                $hasFilters = request()->filled('search') || request()->filled('module') || request()->filled('date_from') || request()->filled('date_to');
                            @endphp
                            @if($hasFilters)
                            <div class="col-md-12">
                                <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-outline-secondary">
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
        @foreach($permissions as $module => $modulePermissions)
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0 text-capitalize">
                        <iconify-icon icon="solar:shield-key-bold-duotone" class="me-2"></iconify-icon>
                        {{ str_replace('-', ' ', $module) }} Permissions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Permission</th>
                                    <th>Description</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($modulePermissions as $permission)
                                <tr>
                                    <td>
                                        <code class="text-primary">{{ $permission->name }}</code>
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ $permission->description ?? 'No description' }}</small>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" onclick="editPermission({{ $permission->toJson() }})">
                                                <i class="ti ti-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" onclick="deletePermission({{ $permission->id }})">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Permission Modal -->
<div class="modal fade" id="permissionModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="permissionModalTitle">Add Permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="permissionForm">
                <div class="modal-body">
                    <input type="hidden" name="permission_id" id="permission_id">
                    
                    <div class="mb-3">
                        <label class="form-label">Permission Name *</label>
                        <input type="text" class="form-control" name="name" id="permission_name" required>
                        <small class="text-muted">Use lowercase with hyphens (e.g., users-create, posts-edit)</small>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Module *</label>
                        <select class="form-select" name="module" id="permission_module" required>
                            <option value="">Select Module...</option>
                            <option value="users">Users</option>
                            <option value="roles">Roles</option>
                            <option value="permissions">Permissions</option>
                            <option value="students">Students</option>
                            <option value="teachers">Teachers</option>
                            <option value="courses">Courses</option>
                            <option value="sessions">Class Sessions</option>
                            <option value="attendance">Attendance</option>
                            <option value="blogs">Blogs</option>
                            <option value="trial-classes">Trial Classes</option>
                            <option value="dashboard">Dashboard</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="permission_description" rows="3"></textarea>
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
let permissionModal;
let permissionForm;

document.addEventListener('DOMContentLoaded', function() {
    permissionModal = new bootstrap.Modal(document.getElementById('permissionModal'));
    permissionForm = document.getElementById('permissionForm');
    
    permissionForm.addEventListener('submit', function(e) {
        e.preventDefault();
        savePermission();
    });
});

function clearPermissionForm() {
    document.getElementById('permissionModalTitle').textContent = 'Add Permission';
    document.getElementById('permission_id').value = '';
    document.getElementById('permission_name').value = '';
    document.getElementById('permission_module').value = '';
    document.getElementById('permission_description').value = '';
}

function editPermission(permission) {
    document.getElementById('permissionModalTitle').textContent = 'Edit Permission';
    document.getElementById('permission_id').value = permission.id;
    document.getElementById('permission_name').value = permission.name;
    document.getElementById('permission_module').value = permission.module;
    document.getElementById('permission_description').value = permission.description || '';
    
    permissionModal.show();
}

function savePermission() {
    const formData = new FormData(permissionForm);
    const permissionId = formData.get('permission_id');
    const url = permissionId 
        ? '/admin/permissions/' + permissionId 
        : '/admin/permissions';
    const method = permissionId ? 'PUT' : 'POST';
    
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
            permissionModal.hide();
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to save'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to save permission');
    });
}

function deletePermission(permissionId) {
    if (confirm('Are you sure you want to delete this permission? This action cannot be undone.')) {
        fetch(`/admin/permissions/${permissionId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to delete permission');
        });
    }
}
</script>
@endpush
@endsection


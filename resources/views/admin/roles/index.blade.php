@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Role Management</h3>
                    <p class="text-muted mb-0">Manage user roles and their permissions</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roleModal" onclick="clearRoleForm()">
                    <i class="ti ti-plus"></i> Add Role
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
                                    <th>Permissions</th>
                                    <th>Users</th>
                                    <th>Created</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td class="fw-medium">
                                        <span class="badge bg-{{ $role->name === 'super-admin' ? 'danger' : 'primary' }} me-2">
                                            {{ $role->name }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($role->permissions->count() > 0)
                                            <div class="d-flex flex-wrap gap-1">
                                                @foreach($role->permissions->take(3) as $permission)
                                                    <span class="badge bg-light text-dark">{{ $permission->name }}</span>
                                                @endforeach
                                                @if($role->permissions->count() > 3)
                                                    <span class="badge bg-secondary">+{{ $role->permissions->count() - 3 }} more</span>
                                                @endif
                                            </div>
                                        @else
                                            <span class="text-muted">No permissions</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-info">{{ $role->users_count ?? 0 }} users</span>
                                    </td>
                                    <td>{{ $role->created_at->format('M d, Y') }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" onclick="editRole({{ $role->toJson() }})">
                                                <i class="ti ti-edit"></i>
                                            </button>
                                            @if($role->name !== 'super-admin')
                                            <button class="btn btn-sm btn-outline-danger" onclick="deleteRole({{ $role->id }})">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        <iconify-icon icon="solar:shield-user-bold-duotone" class="fs-2 text-muted"></iconify-icon>
                                        <p class="text-muted mb-0 mt-2">No roles found</p>
                                        <button class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#roleModal" onclick="clearRoleForm()">
                                            <i class="ti ti-plus"></i> Create First Role
                                        </button>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {!! $roles->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Role Modal -->
<div class="modal fade" id="roleModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalTitle">Add Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="roleForm">
                <div class="modal-body">
                    <input type="hidden" name="role_id" id="role_id">
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Role Name *</label>
                            <input type="text" class="form-control" name="name" id="role_name" required>
                        </div>
                    </div>

                    <h6 class="mb-3">Permissions</h6>
                    <div class="row">
                        @foreach($permissions as $module => $modulePermissions)
                        <div class="col-md-6 mb-4">
                            <div class="card border">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 text-capitalize">{{ str_replace('-', ' ', $module) }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($modulePermissions as $permission)
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="permission_{{ $permission->id }}">
                                                <label class="form-check-label" for="permission_{{ $permission->id }}">
                                                    {{ str_replace('-', ' ', $permission->name) }}
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
let roleModal;
let roleForm;

document.addEventListener('DOMContentLoaded', function() {
    roleModal = new bootstrap.Modal(document.getElementById('roleModal'));
    roleForm = document.getElementById('roleForm');
    
    roleForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveRole();
    });
});

function clearRoleForm() {
    document.getElementById('roleModalTitle').textContent = 'Add Role';
    document.getElementById('role_id').value = '';
    document.getElementById('role_name').value = '';
    
    // Clear permission checkboxes
    document.querySelectorAll('input[name="permissions[]"]').forEach(checkbox => {
        checkbox.checked = false;
    });
}

function editRole(role) {
    document.getElementById('roleModalTitle').textContent = 'Edit Role';
    document.getElementById('role_id').value = role.id;
    document.getElementById('role_name').value = role.name;
    
    // Set permission checkboxes
    document.querySelectorAll('input[name="permissions[]"]').forEach(checkbox => {
        checkbox.checked = role.permissions.some(permission => permission.id == checkbox.value);
    });
    
    roleModal.show();
}

function saveRole() {
    const formData = new FormData(roleForm);
    const roleId = formData.get('role_id');
    const url = roleId 
        ? '/admin/roles/' + roleId 
        : '/admin/roles';
    const method = roleId ? 'PUT' : 'POST';
    
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
            roleModal.hide();
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to save'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to save role');
    });
}

function deleteRole(roleId) {
    if (confirm('Are you sure you want to delete this role? This action cannot be undone.')) {
        fetch(`/admin/roles/${roleId}`, {
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
            alert('Failed to delete role');
        });
    }
}
</script>
@endpush
@endsection


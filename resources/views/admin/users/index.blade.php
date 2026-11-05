@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">User Management</h3>
                    <p class="text-muted mb-0">Manage system users and their permissions</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal" onclick="clearUserForm()">
                    <i class="ti ti-plus"></i> Add User
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
                    <form method="GET" action="{{ route('admin.users.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Name, Email, Phone...">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    <option value="suspended" {{ request('status') == 'suspended' ? 'selected' : '' }}>Suspended</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Role</label>
                                <select class="form-select form-select-sm" name="role_id">
                                    <option value="">All Roles</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ request('role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
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
                                $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('role_id') || request()->filled('date_from') || request()->filled('date_to');
                            @endphp
                            @if($hasFilters)
                            <div class="col-md-12">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-secondary">
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
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Roles</th>
                                    <th>Status</th>
                                    <th>Last Login</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}" class="rounded-circle" width="40" height="40">
                                    </td>
                                    <td class="fw-medium">{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone ?? '-' }}</td>
                                    <td>
                                        @if($user->roles->count() > 0)
                                            @foreach($user->roles as $role)
                                                <span class="badge bg-primary me-1">{{ $role->name }}</span>
                                            @endforeach
                                        @else
                                            <span class="text-muted">No roles</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $user->status === 'active' ? 'success' : ($user->status === 'inactive' ? 'secondary' : 'danger') }}">
                                            {{ ucfirst($user->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $user->last_login_at ? $user->last_login_at->diffForHumans() : 'Never' }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" onclick="editUser({{ $user->toJson() }})">
                                                <i class="ti ti-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-{{ $user->status === 'active' ? 'warning' : 'success' }}" 
                                                    onclick="toggleUserStatus({{ $user->id }})">
                                                <i class="ti ti-{{ $user->status === 'active' ? 'ban' : 'check' }}"></i>
                                            </button>
                                            @if($user->id !== auth()->id())
                                            <button class="btn btn-sm btn-outline-danger" onclick="deleteUser({{ $user->id }})">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center py-4">
                                        <iconify-icon icon="solar:user-plus-bold-duotone" class="fs-2 text-muted"></iconify-icon>
                                        <p class="text-muted mb-0 mt-2">No users found</p>
                                        <button class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#userModal" onclick="clearUserForm()">
                                            <i class="ti ti-plus"></i> Create First User
                                        </button>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- User Modal -->
<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalTitle">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="userForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="user_id">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="user_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" name="email" id="user_email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Password <span id="passwordRequired">*</span></label>
                            <input type="password" class="form-control" name="password" id="user_password">
                            <small class="text-muted" id="passwordHelp">Leave blank to keep current password</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="user_phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status *</label>
                            <select class="form-select" name="status" id="user_status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="suspended">Suspended</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Avatar</label>
                            <input type="file" class="form-control" name="avatar" id="user_avatar" accept="image/*">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Roles</label>
                            <div class="row">
                                @foreach($roles as $role)
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}" id="role_{{ $role->id }}">
                                        <label class="form-check-label" for="role_{{ $role->id }}">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
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
let userModal;
let userForm;

document.addEventListener('DOMContentLoaded', function() {
    userModal = new bootstrap.Modal(document.getElementById('userModal'));
    userForm = document.getElementById('userForm');
    
    userForm.addEventListener('submit', function(e) {
        e.preventDefault();
        saveUser();
    });
});

function clearUserForm() {
    document.getElementById('userModalTitle').textContent = 'Add User';
    document.getElementById('user_id').value = '';
    document.getElementById('user_name').value = '';
    document.getElementById('user_email').value = '';
    document.getElementById('user_password').value = '';
    document.getElementById('user_phone').value = '';
    document.getElementById('user_status').value = 'active';
    document.getElementById('user_avatar').value = '';
    document.getElementById('passwordRequired').textContent = '*';
    document.getElementById('passwordHelp').style.display = 'none';
    document.getElementById('user_password').required = true;
    
    // Clear role checkboxes
    document.querySelectorAll('input[name="roles[]"]').forEach(checkbox => {
        checkbox.checked = false;
    });
}

function editUser(user) {
    document.getElementById('userModalTitle').textContent = 'Edit User';
    document.getElementById('user_id').value = user.id;
    document.getElementById('user_name').value = user.name;
    document.getElementById('user_email').value = user.email;
    document.getElementById('user_password').value = '';
    document.getElementById('user_phone').value = user.phone || '';
    document.getElementById('user_status').value = user.status;
    document.getElementById('passwordRequired').textContent = '';
    document.getElementById('passwordHelp').style.display = 'block';
    document.getElementById('user_password').required = false;
    
    // Set role checkboxes
    document.querySelectorAll('input[name="roles[]"]').forEach(checkbox => {
        checkbox.checked = user.roles.some(role => role.id == checkbox.value);
    });
    
    userModal.show();
}

function saveUser() {
    const formData = new FormData(userForm);
    const userId = formData.get('user_id');
    const url = userId 
        ? '/admin/users/' + userId 
        : '/admin/users';
    const method = userId ? 'PUT' : 'POST';
    
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
            userModal.hide();
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to save'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to save user');
    });
}

function toggleUserStatus(userId) {
    if (confirm('Are you sure you want to toggle this user\'s status?')) {
        fetch(`/admin/users/${userId}/toggle-status`, {
            method: 'POST',
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
            alert('Failed to update user status');
        });
    }
}

function deleteUser(userId) {
    if (confirm('Are you sure you want to delete this user? This action cannot be undone.')) {
        fetch(`/admin/users/${userId}`, {
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
            alert('Failed to delete user');
        });
    }
}
</script>
@endpush
@endsection


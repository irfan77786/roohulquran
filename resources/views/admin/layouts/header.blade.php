<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light w-100">
        <a class="navbar-brand d-flex align-items-center py-0" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Rooh Ul Quran Academy">
        </a>

        <div class="collapse navbar-collapse" id="adminHeaderNav">
            <ul class="navbar-nav admin-top-nav mb-2 mb-lg-0 align-items-lg-center gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-inline-flex align-items-center gap-2 {{ Request::routeIs('admin.trial.classes') ? 'active' : '' }}"
                        href="{{ route('admin.trial.classes') }}">
                        Trial Classes
                        @php
                            $unreadCount = \App\Models\AdminNotification::where('type', 'trial_class')->where('read', false)->count();
                        @endphp
                        @if($unreadCount > 0)
                            <span class="admin-nav-badge" id="trial-badge">{{ $unreadCount }}</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('admin.blogs.*') ? 'active' : '' }}"
                        href="{{ route('admin.blogs.index') }}">
                        Blogs
                    </a>
                </li>

                @canany(['users-view', 'roles-view', 'permissions-view'])
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::routeIs('admin.users.*', 'admin.roles.*', 'admin.permissions.*') ? 'active' : '' }}"
                        href="javascript:void(0)" id="adminSettingsMenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Settings
                    </a>
                    <ul class="dropdown-menu admin-header-dropdown" aria-labelledby="adminSettingsMenu">
                        @can('users-view')
                        <li>
                            <a class="dropdown-item {{ Request::routeIs('admin.users.*') ? 'active' : '' }}"
                                href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                        @endcan
                        @can('roles-view')
                        <li>
                            <a class="dropdown-item {{ Request::routeIs('admin.roles.*') ? 'active' : '' }}"
                                href="{{ route('admin.roles.index') }}">Roles</a>
                        </li>
                        @endcan
                        @can('permissions-view')
                        <li>
                            <a class="dropdown-item {{ Request::routeIs('admin.permissions.*') ? 'active' : '' }}"
                                href="{{ route('admin.permissions.index') }}">Permissions</a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcanany

                <li class="nav-item">
                    <a class="nav-link admin-visit-link" href="{{ url('/') }}" target="_blank" rel="noopener">
                        Visit Website
                    </a>
                </li>
            </ul>
        </div>

        <div class="admin-header-actions d-flex align-items-center ms-auto">
            <ul class="navbar-nav flex-row align-items-center justify-content-end gap-2 mb-0">
                <li class="nav-item dropdown">
                    <a class="nav-link admin-icon-btn position-relative" href="javascript:void(0)" id="notificationDropdown" data-bs-toggle="dropdown">
                        <i class="ti ti-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" id="notificationCountBadge" style="font-size: 0.62rem; padding: 0.15rem 0.38rem; min-width: 16px; background: #FF5528; display: none;">
                            0
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end admin-header-dropdown" style="width: 350px; max-height: 400px; overflow-y: auto;">
                        <div class="message-body">
                            <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                <h6 class="mb-0">Notifications</h6>
                                <a href="javascript:void(0)" class="text-muted small" id="markAllReadBtn">Mark all as read</a>
                            </div>
                            <div class="p-2" id="notificationsList">
                                <div class="text-center py-3">
                                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary w-100">View All Notifications</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link admin-avatar-btn" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/img/ai/test-1.webp') }}" alt="Admin" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end admin-header-dropdown" aria-labelledby="drop2" style="width: 250px;">
                        <div class="message-body p-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-3 p-2 hover-bg-light rounded text-decoration-none text-dark">
                                <img src="{{ asset('assets/img/ai/test-1.webp') }}" alt="Admin" width="40" height="40" class="rounded-circle border">
                                <div>
                                    <h6 class="mb-0">{{ optional(Auth::guard('admin')->user())->name ?? 'Admin' }}</h6>
                                    <small class="text-muted">{{ optional(Auth::guard('admin')->user())->email }}</small>
                                </div>
                            </a>
                            <hr class="my-2">
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn w-100" style="background:#122F2A;color:#fff;">
                                    <i class="ti ti-logout"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>

            <button class="navbar-toggler border-0 px-2 d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#adminHeaderNav" aria-controls="adminHeaderNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="ti ti-menu-2 fs-5"></i>
            </button>
        </div>
    </nav>
</header>

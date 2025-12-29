<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <!-- MAIN NAVIGATION -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">MAIN</span>
      </li>
      <li class="sidebar-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Dashboard</span>
        </a>
      </li>
      
      <!-- ACADEMY MANAGEMENT -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">ACADEMY</span>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('admin.students.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.students.*') ? 'active' : '' }}" href="{{ route('admin.students.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Students</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('admin.teachers.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.teachers.*') ? 'active' : '' }}" href="{{ route('admin.teachers.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:user-id-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Teachers</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('admin.courses.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.courses.*') ? 'active' : '' }}" href="{{ route('admin.courses.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:book-bookmark-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Courses</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('admin.sessions.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.sessions.*') ? 'active' : '' }}" href="{{ route('admin.sessions.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:calendar-schedule-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Class Sessions</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('admin.attendance.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.attendance.*') ? 'active' : '' }}" href="{{ route('admin.attendance.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:clipboard-check-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Attendance</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('admin.invoices.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.invoices.*') ? 'active' : '' }}" href="{{ route('admin.invoices.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:receipt-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Invoices</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('admin.trial.classes') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.trial.classes') ? 'active' : '' }}" href="{{ route('admin.trial.classes') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:book-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Trial Classes</span>
          @php
            $unreadCount = \App\Models\AdminNotification::where('type', 'trial_class')->where('read', false)->count();
          @endphp
          @if($unreadCount > 0)
            <span class="badge bg-danger badge-sm ms-auto" id="trial-badge">{{ $unreadCount }}</span>
          @endif
        </a>
      </li>
      
      <!-- CONTENT MANAGEMENT -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">CONTENT</span>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('admin.blogs.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.blogs.*') ? 'active' : '' }}" href="{{ route('admin.blogs.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:document-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Blogs</span>
        </a>
      </li>
      
      <!-- SETTINGS & ADMINISTRATION -->
      @canany(['users-view', 'roles-view', 'permissions-view'])
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">SETTINGS</span>
      </li>
      
      @can('users-view')
      <li class="sidebar-item {{ Request::routeIs('admin.users.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Users</span>
        </a>
      </li>
      @endcan
      
      @can('roles-view')
      <li class="sidebar-item {{ Request::routeIs('admin.roles.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.roles.*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:shield-user-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Roles</span>
        </a>
      </li>
      @endcan
      
      @can('permissions-view')
      <li class="sidebar-item {{ Request::routeIs('admin.permissions.*') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.permissions.*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:shield-key-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Permissions</span>
        </a>
      </li>
      @endcan
      @endcanany
      
      <!-- UTILITIES -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">UTILITIES</span>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('/') }}" target="_blank" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:external-link-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Visit Website</span>
        </a>
      </li>
    </ul>
  </nav>

<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">MAIN NAVIGATION</span>
      </li>
      <li class="sidebar-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">ACADEMY MANAGEMENT</span>
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
      
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">QUICK ACTIONS</span>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.blogs.create') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:add-circle-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Create Blog</span>
        </a>
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
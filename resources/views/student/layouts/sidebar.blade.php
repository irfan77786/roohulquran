<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">STUDENT PORTAL</span>
      </li>
      <li class="sidebar-item {{ Request::routeIs('student.dashboard') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('student.dashboard') ? 'active' : '' }}" href="{{ route('student.dashboard') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">ACADEMY</span>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('student.enrollments') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('student.enrollments') ? 'active' : '' }}" href="{{ route('student.enrollments') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:book-bookmark-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">My Courses</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('student.payments') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('student.payments') ? 'active' : '' }}" href="{{ route('student.payments') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:wallet-money-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Payments</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('student.notifications') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('student.notifications') ? 'active' : '' }}" href="{{ route('student.notifications') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:bell-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Notifications</span>
          @php
            $unreadCount = auth('student')->check() ? auth('student')->user()->notifications()->unread()->count() : 0;
          @endphp
          @if($unreadCount > 0)
            <span class="badge bg-danger rounded-pill ms-auto" style="font-size: 0.65rem; padding: 0.2rem 0.4rem;">{{ $unreadCount > 99 ? '99+' : $unreadCount }}</span>
          @endif
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('student.attendance') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('student.attendance') ? 'active' : '' }}" href="{{ route('student.attendance') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:clipboard-check-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Attendance</span>
        </a>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('student.sessions') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('student.sessions') ? 'active' : '' }}" href="{{ route('student.sessions') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:calendar-mark-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">My Sessions</span>
        </a>
      </li>
      
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">ACCOUNT</span>
      </li>
      
      <li class="sidebar-item {{ Request::routeIs('student.profile') ? 'active' : '' }}">
        <a class="sidebar-link {{ Request::routeIs('student.profile') ? 'active' : '' }}" href="{{ route('student.profile') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:user-id-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">My Profile</span>
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

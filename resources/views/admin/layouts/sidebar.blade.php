<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
          <span>
            <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu">Dashboard</span>
        </a>
      </li>
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
        <span class="hide-menu">UI COMPONENTS</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.trial.classes') }}" aria-expanded="false">
          <span>
            <i class="fa-solid fa-address-card"></i>
          </span>
          <span class="hide-menu">Trial Classes</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('blogs.index') }}" aria-expanded="false">
          <span>
            <i class="fa-solid fa-address-card"></i>
          </span>
          <span class="hide-menu">Blogs</span>
        </a>
      </li>
    </ul>
  </nav>
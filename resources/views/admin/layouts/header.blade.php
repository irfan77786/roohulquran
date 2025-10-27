<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
      </ul>
      
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end gap-3">
          {{-- Search --}}
          <li class="nav-item d-flex align-items-center">
            <div class="input-group input-group-sm" style="max-width: 300px;">
              <input type="text" class="form-control" placeholder="Search..." id="globalSearch">
              <button class="btn btn-outline-secondary" type="button">
                <i class="ti ti-search"></i>
              </button>
            </div>
          </li>

          {{-- Notifications --}}
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon-hover position-relative" href="javascript:void(0)" id="notificationDropdown" data-bs-toggle="dropdown">
              <i class="ti ti-bell fs-5"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger notification-count-badge" id="notificationCountBadge" style="font-size: 10px; display: none;">
                0
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" style="width: 350px; max-height: 400px; overflow-y: auto;">
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

          {{-- User Profile --}}
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ asset('assets/img/ai/test-1.webp') }}" alt="Admin" width="40" height="40" class="rounded-circle border">
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2" style="width: 250px;">
              <div class="message-body p-2">
                <a href="javascript:void(0)" class="d-flex align-items-center gap-3 p-2 hover-bg-light rounded text-decoration-none text-dark">
                  <img src="{{ asset('assets/img/ai/test-1.webp') }}" alt="Admin" width="40" height="40" class="rounded-circle border">
                  <div>
                    <h6 class="mb-0">Admin User</h6>
                    <small class="text-muted">admin@example.com</small>
                  </div>
                </a>
                <hr class="my-2">
                <a href="javascript:void(0)" class="d-flex align-items-center gap-3 p-2 hover-bg-light rounded text-decoration-none text-dark">
                  <i class="ti ti-user"></i>
                  <span>My Profile</span>
                </a>
                <a href="javascript:void(0)" class="d-flex align-items-center gap-3 p-2 hover-bg-light rounded text-decoration-none text-dark">
                  <i class="ti ti-settings"></i>
                  <span>Settings</span>
                </a>
                <a href="javascript:void(0)" class="d-flex align-items-center gap-3 p-2 hover-bg-light rounded text-decoration-none text-dark">
                  <i class="ti ti-help"></i>
                  <span>Help & Support</span>
                </a>
                <hr class="my-2">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="ti ti-logout"></i> Logout
                    </button>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
</header>
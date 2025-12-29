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
          {{-- Notifications --}}
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon-hover position-relative" href="javascript:void(0)" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="position-relative d-inline-block">
                <i class="ti ti-bell fs-5"></i>
                <span class="position-absolute bottom-0 end-0 badge rounded-pill bg-danger border border-white" id="notificationCountBadge" style="font-size: 0.65rem; padding: 0.2rem 0.4rem; min-width: 18px; height: 18px; display: none; line-height: 1; transform: translate(25%, 25%);">
                  0
                </span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="notificationDropdown" style="width: 350px; max-height: 400px; overflow-y: auto;">
              <div class="message-body">
                <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                  <h6 class="mb-0 fw-bold">Notifications</h6>
                  <button class="btn btn-sm btn-link text-primary p-0" id="markAllReadBtn" style="font-size: 0.75rem;">Mark all as read</button>
                </div>
                <div id="notificationsList" class="p-2" style="min-height: 100px;">
                  <div class="text-center py-4">
                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                </div>
                <div class="text-center p-2 border-top">
                  <a href="{{ route('student.notifications') }}" class="btn btn-sm btn-outline-primary w-100">View All Notifications</a>
                </div>
              </div>
            </div>
          </li>

          {{-- User Profile --}}
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="avatar-xs bg-primary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; font-weight: 600; font-size: 0.9rem;">
                {{ strtoupper(substr(auth('student')->user()->name, 0, 1)) }}
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2" style="width: 250px;">
              <div class="message-body p-2">
                <a href="{{ route('student.profile') }}" class="d-flex align-items-center gap-3 p-2 hover-bg-light rounded text-decoration-none text-dark">
                  <div class="avatar-xs bg-primary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; font-weight: 600; font-size: 0.9rem;">
                    {{ strtoupper(substr(auth('student')->user()->name, 0, 1)) }}
                  </div>
                  <div>
                    <h6 class="mb-0">{{ auth('student')->user()->name }}</h6>
                    <small class="text-muted">{{ auth('student')->user()->email }}</small>
                  </div>
                </a>
                <hr class="my-2">
                <a href="{{ route('student.profile') }}" class="d-flex align-items-center gap-3 p-2 hover-bg-light rounded text-decoration-none text-dark">
                  <i class="ti ti-user"></i>
                  <span>My Profile</span>
                </a>
                <a href="{{ url('/') }}" target="_blank" class="d-flex align-items-center gap-3 p-2 hover-bg-light rounded text-decoration-none text-dark">
                  <i class="ti ti-external-link"></i>
                  <span>Visit Website</span>
                </a>
                <hr class="my-2">
                <form action="{{ route('student.logout') }}" method="POST">
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

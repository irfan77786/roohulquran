<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/tab-logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

    {{-- In your layout Blade file, inside <head> --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">



    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <style>
          .page-content {
              margin-left: 250px; /* Match your sidebar width if fixed */
              padding: 2rem;
              padding-top: 80px; /* Match your fixed header height */
          }
      
          @media (max-width: 1200px) {
              .page-content {
                  margin-left: 0; /* For mobile responsiveness */
              }
          }

          /* Enhanced Dashboard Styles */
          .card {
              border-radius: 10px;
              transition: all 0.3s ease;
          }

          .card:hover {
              box-shadow: 0 4px 15px rgba(0,0,0,0.08);
          }

          .shadow-sm {
              box-shadow: 0 2px 4px rgba(0,0,0,0.06) !important;
          }

          .hover-shadow {
              transition: all 0.3s ease;
          }

          .hover-shadow:hover {
              transform: translateY(-5px);
              box-shadow: 0 8px 20px rgba(0,0,0,0.12);
          }

          .bg-opacity-10 {
              background-color: rgba(var(--bs-primary-rgb), 0.1);
          }

          .avatar-xs {
              width: 48px;
              height: 48px;
              display: flex;
              align-items: center;
              justify-content: center;
              font-weight: 600;
              color: inherit;
          }

          .badge-sm {
              font-size: 0.75rem;
              padding: 0.25rem 0.5rem;
          }

          .sidebar-item.active .sidebar-link {
              background: linear-gradient(135deg, rgba(93, 135, 255, 0.1) 0%, rgba(93, 135, 255, 0.05) 100%);
              color: #5D87FF;
              border-left: 3px solid #5D87FF;
          }

          .sidebar-item .sidebar-link:hover {
              background: rgba(93, 135, 255, 0.05);
              color: #5D87FF;
          }

          .hover-bg-light:hover {
              background-color: rgba(0,0,0,0.03) !important;
          }

          /* Table Enhancements */
          .table tbody tr {
              transition: all 0.2s ease;
          }

          .table tbody tr:hover {
              background-color: rgba(93, 135, 255, 0.02);
              transform: scale(1.01);
          }

          /* Input Group */
          .input-group:focus-within {
              box-shadow: 0 0 0 0.2rem rgba(93, 135, 255, 0.25);
              border-radius: 0.375rem;
          }

          /* Responsive */
          @media (max-width: 768px) {
              .page-content {
                  padding: 1rem;
                  padding-top: 70px;
              }

              .navbar-nav.gap-3 {
                  gap: 0.5rem !important;
              }
          }

          /* Animation */
          @keyframes fadeIn {
              from {
                  opacity: 0;
                  transform: translateY(20px);
              }
              to {
                  opacity: 1;
                  transform: translateY(0);
              }
          }

          .card {
              animation: fadeIn 0.5s ease-out;
          }

          .card-body img {
              border-radius: 8px;
          }

          .text-gradient {
              background: linear-gradient(135deg, #5D87FF 0%, #13DEB9 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              background-clip: text;
          }

          /* Scrollbar */
          .scroll-sidebar::-webkit-scrollbar {
              width: 6px;
          }

          .scroll-sidebar::-webkit-scrollbar-track {
              background: #f1f1f1;
          }

          .scroll-sidebar::-webkit-scrollbar-thumb {
              background: #c1c1c1;
              border-radius: 10px;
          }

          .scroll-sidebar::-webkit-scrollbar-thumb:hover {
              background: #a1a1a1;
          }

          /* Notification styles */
          .unread-notification {
              background-color: rgba(93, 135, 255, 0.03) !important;
              border-left: 3px solid #5D87FF;
              font-weight: 500;
          }

          .notification-item {
              cursor: pointer;
              transition: all 0.2s ease;
          }

          .notification-item:hover {
              background-color: rgba(0, 0, 0, 0.05) !important;
          }
      </style>
      
      @stack('styles')
      

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.dashboard') }}" class="text-nowrap logo-img">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="roohul quran academy logo" height="70px" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            @include('admin.layouts.sidebar')
        </div>
    </aside>
    <!-- Sidebar End -->

    <!-- Main wrapper -->
    <div class="body-wrapper">
        <!-- Header Start -->
        @include('admin.layouts.header')
        <!-- Header End -->
    </div>

    <!-- ✅ Separate Content Section -->
    <div class="page-content">
        @yield('content')
    </div>

</div>

    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    @stack('page_libs')
    <script src="{{ asset('admin/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
    
    <script src="{{ asset('admin/assets/js/notifications.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    {{-- DataTables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    {{-- Before closing </body> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Global Toast and Alert Functions -->
<script>
// Global Toast Notification Function
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    let alertClass = 'alert-info';
    let icon = 'ti-info-circle';
    
    if (type === 'success') {
        alertClass = 'alert-success';
        icon = 'ti-check-circle';
    } else if (type === 'error' || type === 'danger') {
        alertClass = 'alert-danger';
        icon = 'ti-x-circle';
    } else if (type === 'warning') {
        alertClass = 'alert-warning';
        icon = 'ti-alert-triangle';
    }
    
    toast.className = `alert ${alertClass} position-fixed shadow-lg`;
    toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px; padding: 15px 20px; border-radius: 8px; animation: slideInRight 0.3s ease;';
    toast.innerHTML = `<i class="ti ${icon} me-2"></i>${message}`;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.style.transition = 'opacity 0.3s';
        toast.style.opacity = '0';
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3000);
}

// Global SweetAlert Confirmation Function
function showConfirm(title, text, confirmButtonText = 'Yes, continue', cancelButtonText = 'Cancel') {
    return Swal.fire({
        title: title,
        text: text,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: confirmButtonText,
        cancelButtonText: cancelButtonText
    });
}

// CSS Animation for toast
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
`;
document.head.appendChild(style);
</script>

@stack('scripts')

</body>

</html>

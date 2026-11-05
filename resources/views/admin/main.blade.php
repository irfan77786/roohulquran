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
          .left-sidebar {
              display: none !important;
          }

          .body-wrapper {
              margin-left: 0 !important;
          }

          #main-wrapper[data-layout=vertical][data-sidebartype=full] .body-wrapper {
              margin-left: 0 !important;
          }

          #main-wrapper[data-layout=vertical][data-header-position=fixed] .app-header {
              left: 0 !important;
              right: 0 !important;
              width: 100% !important;
              max-width: 100% !important;
          }

          .app-header {
              background: rgba(255, 255, 255, 0.92) !important;
              backdrop-filter: blur(16px);
              -webkit-backdrop-filter: blur(16px);
              border-bottom: none !important;
              padding: 0 28px;
              z-index: 1030 !important;
              box-shadow: 0 1px 0 rgba(18, 47, 42, 0.06), 0 10px 28px rgba(18, 47, 42, 0.05);
          }

          .app-header::after {
              content: "";
              position: absolute;
              left: 0;
              right: 0;
              bottom: 0;
              height: 2px;
              background: linear-gradient(90deg, #122F2A 0%, #1A685B 45%, #C4A35A 100%);
          }

          .app-header .navbar {
              min-height: 72px;
              flex-wrap: wrap;
              padding: 0;
          }

          .app-header .navbar-brand {
              padding: 0;
              margin-right: 8px;
          }

          .app-header .navbar-brand img {
              height: 46px;
              width: auto;
              display: block;
          }

          .admin-header-actions {
              order: 1;
          }

          #adminHeaderNav {
              order: 2;
          }

          @media (min-width: 992px) {
              #adminHeaderNav {
                  order: 1;
                  flex: 1 1 auto;
                  justify-content: center;
              }

              .admin-header-actions {
                  order: 2;
                  margin-left: 0 !important;
              }
          }

          #main-wrapper .app-header .navbar .navbar-nav .nav-item .nav-link {
              height: auto !important;
              line-height: 1.2 !important;
          }

          #main-wrapper .app-header .navbar .admin-top-nav .nav-item .nav-link,
          .admin-top-nav .nav-link {
              font-size: 0.84rem !important;
              font-weight: 600;
              letter-spacing: 0.04em;
              text-transform: uppercase;
              color: #122F2A !important;
              padding: 0.45rem 0.95rem !important;
              border-radius: 999px;
              background: transparent !important;
              position: relative;
              transition: color 0.2s ease, background 0.2s ease;
          }

          .admin-top-nav .nav-link:hover {
              color: #1A685B !important;
              background: rgba(26, 104, 91, 0.07) !important;
          }

          .admin-top-nav .nav-link.active {
              color: #1A685B !important;
              background: transparent !important;
          }

          .admin-top-nav .nav-link.active::after {
              content: "";
              position: absolute;
              left: 18px;
              right: 18px;
              bottom: 4px;
              height: 2px;
              border-radius: 2px;
              background: #C4A35A;
          }

          .admin-top-nav .nav-link .admin-nav-badge {
              min-width: 18px;
              height: 18px;
              padding: 0 5px;
              font-size: 0.65rem;
              font-weight: 700;
              letter-spacing: 0;
              text-transform: none;
              line-height: 18px;
              border-radius: 999px;
              background: #FF5528;
              color: #fff;
          }

          .admin-visit-link {
              border: 1px solid rgba(26, 104, 91, 0.28) !important;
              color: #1A685B !important;
              background: transparent !important;
          }

          .admin-visit-link:hover {
              background: #1A685B !important;
              color: #fff !important;
              border-color: #1A685B !important;
          }

          .admin-visit-link::after {
              display: none !important;
          }

          #main-wrapper .app-header .admin-icon-btn {
              width: 40px;
              height: 40px !important;
              border-radius: 50%;
              display: inline-flex !important;
              align-items: center;
              justify-content: center;
              color: #122F2A !important;
              background: #f3f7f6 !important;
              padding: 0 !important;
              line-height: 1 !important;
              font-size: 1.05rem !important;
              text-transform: none;
              letter-spacing: 0;
              transition: background 0.2s ease, color 0.2s ease;
          }

          #main-wrapper .app-header .admin-icon-btn:hover {
              background: rgba(26, 104, 91, 0.12) !important;
              color: #1A685B !important;
          }

          #main-wrapper .app-header .admin-avatar-btn {
              padding: 0 !important;
              height: auto !important;
              line-height: 0 !important;
              background: transparent !important;
          }

          .admin-avatar-btn img {
              width: 38px;
              height: 38px;
              object-fit: cover;
              border: 2px solid #1A685B;
              box-shadow: 0 0 0 3px rgba(26, 104, 91, 0.12);
          }

          .admin-header-dropdown {
              border: 0;
              border-radius: 14px;
              box-shadow: 0 16px 40px rgba(18, 47, 42, 0.14);
              padding: 8px;
          }

          .admin-header-dropdown .dropdown-item {
              border-radius: 8px;
              font-size: 0.9rem;
              padding: 0.55rem 0.85rem;
              color: #122F2A;
          }

          .admin-header-dropdown .dropdown-item:hover,
          .admin-header-dropdown .dropdown-item.active {
              background: rgba(26, 104, 91, 0.08);
              color: #1A685B;
          }

          .page-content {
              margin-left: 0;
              width: 100%;
              max-width: 100%;
              padding: 2rem;
              padding-top: 90px;
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

          @media (max-width: 991.98px) {
              #adminHeaderNav {
                  flex-basis: 100%;
                  padding: 8px 0 14px;
              }

              .admin-top-nav .nav-link {
                  display: block;
                  margin: 2px 0;
              }

              .admin-top-nav .nav-link.active::after {
                  left: 12px;
                  right: auto;
                  width: 28px;
                  bottom: 8px;
              }

              .page-content {
                  padding-top: 92px;
              }
          }

          @media (max-width: 768px) {
              .page-content {
                  padding: 1rem;
                  padding-top: 90px;
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

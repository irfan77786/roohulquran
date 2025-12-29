<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Student Dashboard') - Roohul Quran Academy</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/tab-logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --primary-color: #5D87FF;
            --primary-dark: #4C6FD8;
            --success-color: #13DEB9;
            --warning-color: #FFAE1F;
            --danger-color: #FA896B;
            --info-color: #539BFF;
            --dark-color: #2A3547;
            --light-bg: #F8F9FA;
            --border-color: #EBEDF3;
            --text-muted: #6C757D;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #F5F7FA;
            color: #2A3547;
        }

        .page-content {
            margin-left: 260px;
            padding: 2rem;
            padding-top: 90px;
            min-height: 100vh;
        }

        @media (max-width: 1200px) {
            .page-content {
                margin-left: 0;
                padding: 1.5rem;
                padding-top: 80px;
            }
        }

        /* Sidebar Styles */
        .left-sidebar {
            background: #FFFFFF;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }

        .sidebar-item.active .sidebar-link {
            background: linear-gradient(135deg, rgba(93, 135, 255, 0.1) 0%, rgba(93, 135, 255, 0.05) 100%);
            color: var(--primary-color);
            border-left: 4px solid var(--primary-color);
            font-weight: 600;
        }

        .sidebar-item .sidebar-link {
            transition: all 0.3s ease;
            border-radius: 8px;
            margin: 4px 8px;
        }

        .sidebar-item .sidebar-link:hover {
            background: rgba(93, 135, 255, 0.08);
            color: var(--primary-color);
            transform: translateX(4px);
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            transition: all 0.3s ease;
            background: #FFFFFF;
        }

        .card:hover {
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            transform: translateY(-2px);
        }

        .card-header {
            background: #FFFFFF;
            border-bottom: 2px solid var(--border-color);
            padding: 1.25rem 1.5rem;
            border-radius: 16px 16px 0 0 !important;
        }

        .card-header h5 {
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
            font-size: 1.1rem;
        }

        /* Stat Cards */
        .stat-card {
            border-radius: 20px;
            padding: 1.75rem;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -15%;
            width: 180px;
            height: 180px;
            background: rgba(255,255,255,0.15);
            border-radius: 50%;
            filter: blur(20px);
        }

        .stat-card::after {
            content: '';
            position: absolute;
            bottom: -20%;
            left: -10%;
            width: 120px;
            height: 120px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            filter: blur(15px);
        }

        .stat-card:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 16px 40px rgba(0,0,0,0.2);
        }

        .stat-card.primary {
            background: linear-gradient(135deg, #5D87FF 0%, #4C6FD8 50%, #3B5FC0 100%);
            box-shadow: 0 8px 24px rgba(93, 135, 255, 0.25);
        }

        .stat-card.success {
            background: linear-gradient(135deg, #13DEB9 0%, #0FC5A0 50%, #0BAE8A 100%);
            box-shadow: 0 8px 24px rgba(19, 222, 185, 0.25);
        }

        .stat-card.warning {
            background: linear-gradient(135deg, #FFAE1F 0%, #FF9A00 50%, #FF8500 100%);
            box-shadow: 0 8px 24px rgba(255, 174, 31, 0.25);
        }

        .stat-card.info {
            background: linear-gradient(135deg, #539BFF 0%, #3B7FFF 50%, #2563FF 100%);
            box-shadow: 0 8px 24px rgba(83, 155, 255, 0.25);
        }

        .stat-card .stat-icon {
            width: 70px;
            height: 70px;
            background: rgba(255,255,255,0.25);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.1) rotate(5deg);
            background: rgba(255,255,255,0.3);
        }

        .stat-card .stat-value {
            font-size: 2.25rem;
            font-weight: 800;
            color: white;
            margin: 0.75rem 0 0.5rem 0;
            text-shadow: 0 2px 8px rgba(0,0,0,0.15);
            letter-spacing: -0.5px;
        }

        .stat-card .stat-label {
            font-size: 0.875rem;
            color: rgba(255,255,255,0.95);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }

        .stat-card .stat-sublabel {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.85);
            margin-top: 0.5rem;
            font-weight: 500;
        }

        /* Table Styles */
        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: var(--light-bg);
            border: none;
            padding: 1rem;
            font-weight: 600;
            color: var(--dark-color);
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table tbody td {
            padding: 1.25rem 1rem;
            border-top: 1px solid var(--border-color);
            vertical-align: middle;
        }

        .table tbody tr {
            transition: all 0.2s ease;
        }

        .table tbody tr:hover {
            background: var(--light-bg);
            transform: scale(1.01);
        }

        /* Badge Styles */
        .badge {
            padding: 0.5rem 0.75rem;
            font-weight: 500;
            font-size: 0.75rem;
            border-radius: 6px;
        }

        /* Button Styles */
        .btn {
            border-radius: 8px;
            font-weight: 500;
            padding: 0.625rem 1.25rem;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(93, 135, 255, 0.4);
        }

        /* Page Header */
        .page-header {
            margin-bottom: 2rem;
        }

        .page-header h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .page-header p {
            color: var(--text-muted);
            margin: 0;
            font-size: 0.95rem;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
        }

        .empty-state iconify-icon {
            font-size: 4rem;
            color: var(--text-muted);
            opacity: 0.5;
        }

        .empty-state h5 {
            margin-top: 1rem;
            color: var(--dark-color);
            font-weight: 600;
        }

        .empty-state p {
            color: var(--text-muted);
            margin-top: 0.5rem;
        }

        /* Quick Actions */
        .quick-action-card {
            border: 2px dashed var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .quick-action-card:hover {
            border-color: var(--primary-color);
            background: rgba(93, 135, 255, 0.05);
            transform: translateY(-4px);
            text-decoration: none;
            color: inherit;
        }

        .quick-action-card iconify-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 0.75rem;
        }

        .quick-action-card h6 {
            font-weight: 600;
            margin: 0;
            color: var(--dark-color);
        }

        /* Progress Bar */
        .progress {
            height: 8px;
            border-radius: 10px;
            background: var(--light-bg);
        }

        .progress-bar {
            border-radius: 10px;
        }

        /* Alert Styles */
        .alert {
            border-radius: 12px;
            border: none;
            padding: 1rem 1.25rem;
        }

        /* Avatar Circle Fix */
        .avatar-xs {
            border-radius: 50% !important;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Notification Badge */
        #notificationCountBadge {
            font-size: 0.65rem;
            padding: 0.25rem 0.4rem;
            min-width: 18px;
            height: 18px;
            line-height: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Notification Dropdown */
        .notification-item {
            transition: all 0.2s ease;
        }

        .notification-item:hover {
            background-color: #f8f9fa !important;
        }

        .hover-bg-light:hover {
            background-color: #f8f9fa !important;
        }
    </style>

    @stack('styles')
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
        data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between p-3">
                    <a href="{{ route('student.dashboard') }}" class="text-nowrap logo-img">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="roohul quran academy logo" height="60px" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                @include('student.layouts.sidebar')
            </div>
        </aside>
        <!-- Sidebar End -->

        <!-- Main wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
            @include('student.layouts.header')
            <!-- Header End -->
        </div>

        <!-- Content Section -->
        <div class="page-content">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="ti ti-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="ti ti-alert-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @php
                if (auth('student')->check()) {
                    $student = auth('student')->user();
                    $timezone = \App\Helpers\TimezoneHelper::getTimezoneFromCountry($student->country);
                    $currency = \App\Helpers\CurrencyHelper::getCurrencyFromCountry($student->country);
                    $currencySymbol = \App\Helpers\CurrencyHelper::getCurrencySymbol($currency);
                    $currentTime = \Carbon\Carbon::now($timezone);
                }
            @endphp
            
            @if(isset($student) && $student->country)
                <div class="alert alert-info alert-dismissible fade show mb-3" role="alert" style="background: linear-gradient(135deg, rgba(93, 135, 255, 0.1) 0%, rgba(93, 135, 255, 0.05) 100%); border-left: 4px solid #5D87FF;">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-4">
                            <div>
                                <i class="ti ti-map-pin me-2"></i><strong>Country:</strong> {{ $student->country }}
                            </div>
                            <div>
                                <i class="ti ti-clock me-2"></i><strong>Time:</strong> <span id="studentCurrentTime">{{ $currentTime->format('h:i A') }}</span> ({{ $timezone }})
                            </div>
                            <div>
                                <i class="ti ti-currency-dollar me-2"></i><strong>Currency:</strong> {{ $currency }} ({{ $currencySymbol }})
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('admin/assets/js/student-notifications.js') }}"></script>

    @if(isset($student) && $student->country)
    <script>
        // Update current time every minute
        @php
            $timezone = \App\Helpers\TimezoneHelper::getTimezoneFromCountry($student->country);
        @endphp
        function updateStudentTime() {
            const timeElement = document.getElementById('studentCurrentTime');
            if (timeElement) {
                const now = new Date();
                const timeString = now.toLocaleTimeString('en-US', { 
                    hour: 'numeric', 
                    minute: '2-digit',
                    hour12: true,
                    timeZone: '{{ $timezone }}'
                });
                timeElement.textContent = timeString;
            }
        }
        
        // Update immediately and then every minute
        updateStudentTime();
        setInterval(updateStudentTime, 60000);
    </script>
    @endif

    @stack('scripts')
</body>

</html>

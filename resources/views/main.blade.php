<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'Rooh Ul Quran Academy - Online Quran Classes For Kids And Adults')</title>
    @yield('meta')

    <meta property="og:title" content="Roohul Quran Online Academy">
    <meta property="og:site_name" content="Roohul Quran Online Academy">
    <link rel="canonical" href="{{ url()->current() }}">


    <meta name="description"
        content="@yield('meta_description', 'Learn Quran online with Rooh Ul Quran Academy. We offer expert-led online Quran classes for kids and adults, including Tajweed, Hifz, and Quran translation. Start your spiritual journey today from the comfort of your home.')">

    <meta name="keywords"
        content="@yield('meta_keywords', 'Online Quran classes, Quran academy, Learn Quran online, Quran with Tajweed, Quran memorization, Online Hifz classes, Quran for kids, Quran teachers online, Islamic education, Rooh Ul Quran Academy')">

    <meta name="google-site-verification" content="LazU64-UPkWgAw4DYjqtS2HjCsUe6xVKjqjSUDB54SY">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/tab-logo.webp') }}" rel="icon">
    <link href="{{ asset('assets/img/tab-logo.webp') }}" rel="apple-touch-icon">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://img.youtube.com" crossorigin>

    <!-- CSS (deferred) -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="print"
        onload="this.media='all'">
    <link rel="preload" href="{{ asset('assets/css/main.css') }}" as="style">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons@6.6.6/css/flag-icons.min.css" media="print"
        onload="this.media='all'">

    <noscript>
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons@6.6.6/css/flag-icons.min.css">
    </noscript>

    <style>
        /* Your inline critical styles (valid in head) */
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NSTXB23J7J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-NSTXB23J7J');
    </script>

    <!-- Preload images -->
    <link rel="preload" href="{{ asset('assets/img/hero-bg-4.webp') }}" as="image" fetchpriority="high">
    <link rel="preload" href="{{ asset('assets/img/hero-bg-1.webp') }}" as="image" fetchpriority="high">
    <link rel="preload" href="{{ asset('assets/img/logo.svg') }}" as="image">
    <link rel="preload" href="{{ asset('assets/img/header-bg.webp') }}" as="image">


    <style>
        body {
            min-height: 100vh;
            /* Prevent layout shift */
        }

        body.index-page {
            min-height: 100vh;
        }

        #hero {
            min-height: 600px;
            /* Matches your existing CSS */
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 9999;
            /* background-color: #25D366; */
            padding: 10px;
            border-radius: 50%;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); */
            transition: transform 0.3s ease;
        }

        .whatsapp-float img {
            width: 60px;
            height: 60px;
        }

        /* Crisp WhatsApp brand icon using Bootstrap Icons */
        .whatsapp-float .wa-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #25D366;
            color: #ffffff;
        }

        .whatsapp-float .wa-icon svg {
            width: 34px;
            height: 34px;
            display: block;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        /* Critical hero + header/nav to avoid CLS before CSS loads */
        .header {
            background-color: #ffffff;
            padding: 0;
            z-index: 997;
            min-height: 80px;
            /* Prevent layout shift */
        }

        .header .btn-getstarted {
            color: #fff;
            background: linear-gradient(120deg, #44137c, #2bab6d);
            font-size: 14px;
            padding: 8px 25px;
            border-radius: 50px;
        }

        /* .navmenu ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center;
            } */

        .navmenu a {
            color: #272828;
            padding: 18px 15px;
            font-size: 20px;
            font-weight: 400;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .navmenu a i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
            width: 16px;
            height: 16px;
            display: inline-block;
        }

        .hero {
            width: 100%;
            min-height: 80vh;
            position: relative;
            padding: 80px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .hero img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            display: block;
        }

        .hero .container {
            position: relative;
            z-index: 3;
        }

        .hero h2 {
            margin: 0;
            font-size: 48px;
            font-weight: 700;
        }

        .hero p {
            margin: 10px 0 0 0;
            font-size: 24px;
        }

        .btn-get-started {
            background: #44137c;
            color: #fff;
            font-weight: 500;
            font-size: 15px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 8px 35px 10px;
            border-radius: 50px;
            margin-top: 30px;
            border: 2px solid #fff;
        }

        @media (max-width: 600px) {
            .whatsapp-float {
                bottom: 15px;
                left: 15px;
            }
        }

        /* loader */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        #preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .dots {
            display: flex;
            gap: 8px;
        }

        .dots span {
            width: 12px;
            height: 12px;
            background: #dc3545;
            border-radius: 50%;
            animation: bounce 0.6s infinite alternate;
        }

        .dots span:nth-child(2) {
            animation-delay: 0.2s;
            background: #343a40;
        }

        .dots span:nth-child(3) {
            animation-delay: 0.4s;
            background: #28a745;
        }

        @keyframes bounce {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-12px);
            }
        }
    </style>
</head>


<body class="index-page">
    <!-- Loader -->
    <div id="preloader">
        <div class="dots">
            <span></span><span></span><span></span>
        </div>
    </div>


    @include('layouts.header')

    @yield('content')


    @include('layouts.footer')


    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/923344066429" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <span class="wa-icon" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#ffffff" width="34" height="34">
                <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 8.006.001C3.604.001.03 3.575.03 7.977c0 1.405.37 2.776 1.07 3.985L0 16l4.13-1.08a7.93 7.93 0 0 0 3.876 1c4.402 0 7.976-3.574 7.976-7.976a7.93 7.93 0 0 0-2.381-5.618zM8.006 14.5a6.47 6.47 0 0 1-3.3-.9l-.236-.14-2.45.64.655-2.389-.153-.245a6.47 6.47 0 0 1-.99-3.489c0-3.573 2.907-6.48 6.474-6.48a6.43 6.43 0 0 1 4.588 1.896 6.43 6.43 0 0 1 1.896 4.584c0 3.568-2.907 6.483-6.484 6.483zm3.686-4.853c-.202-.101-1.192-.59-1.377-.658-.184-.067-.318-.101-.452.102-.133.202-.518.657-.635.792-.117.134-.234.151-.436.05-.202-.102-.851-.313-1.622-.997-.6-.534-1.005-1.194-1.123-1.396-.117-.202-.012-.311.089-.412.092-.091.202-.235.303-.352.101-.117.134-.201.202-.336.067-.134.034-.252-.017-.353-.05-.102-.452-1.087-.62-1.488-.163-.392-.329-.339-.452-.343l-.384-.007c-.134 0-.353.051-.537.252-.184.202-.704.69-.704 1.68s.72 1.951.82 2.085c.101.134 1.417 2.162 3.434 3.033.48.207.855.33 1.147.422.482.153.921.132 1.27.08.387-.058 1.192-.487 1.36-.957.168-.47.168-.873.118-.957-.05-.084-.185-.134-.387-.235z" />
            </svg>
        </span>
    </a>
    <script defer src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script> --}}
    <script defer src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.testimonial-slider', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            // Performance optimizations
            watchOverflow: true,       // Don’t reflow if only 1 slide
            updateOnWindowResize: true, // Debounced resize recalculations
            observer: true,             // Watch DOM mutations smartly
            observeParents: true,
        });

        // Reduce layout thrashing on resize
        window.addEventListener('resize', () => {
            requestAnimationFrame(() => swiper.update());
        });
    });
    </script>


    @yield('meta_script')
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    window.addEventListener("load", function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/68285e127a51e3190e056edf/1irequujd';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    });
    </script>

    {{-- loader --}}
    <script>
        window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    preloader.classList.add('hidden');
    setTimeout(() => {
        preloader.style.display = 'none';
    }, 500);
});
    </script>

    <!--End of Tawk.to Script-->

</body>

</html>
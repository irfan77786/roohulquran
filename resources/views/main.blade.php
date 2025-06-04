<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{-- <title>Rooh Ul Quran Academy - Online Quran Classes For Kids And Adults</title> --}}
    <title>@yield('title', 'Rooh Ul Quran Academy - Online Quran Classes For Kids And Adults')</title>
    @yield('meta')

    <meta property="og:title" content="Roohul Quran Online Academy">
    <meta property="og:site_name" content="Roohul Quran Online Academy">


    <meta name="description" content="@yield('meta_description', 'Learn Quran online with Rooh Ul Quran Academy. We offer expert-led online Quran classes for kids and adults, including Tajweed, Hifz, and Quran translation. Start your spiritual journey today from the comfort of your home.')">

    <meta name="keywords" content="@yield('meta_keywords', 'Online Quran classes, Quran academy, Learn Quran online, Quran with Tajweed, Quran memorization, Online Hifz classes, Quran for kids, Quran teachers online, Islamic education, Rooh Ul Quran Academy')">
    <meta name="google-site-verification" content="LazU64-UPkWgAw4DYjqtS2HjCsUe6xVKjqjSUDB54SY" />
    <!-- Favicons -->
    <link href="{{ asset('assets/img/tab-logo.png') }}" rel="icon">
    <linkf href="{{ asset('assets/img/tab-logo.png') }}" rel="apple-touch-icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Roohul Quran Online Academy",
      "url": "https://roohulquranacademy.com",
      "logo": "https://roohulquranacademy.com/assets/img/tab-logo.png",
      "sameAs": [
        "https://www.facebook.com/roohulquran",
      ]
    }
    </script>
    
</head>

<body class="index-page">

    @include('layouts.header')

    @yield('content')


    @include('layouts.footer')

    <!-- Scroll Top -->


    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/923344066429" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <img src="{{ asset('assets/img/icons/whatsapp.webp') }}" alt="WhatsApp" />
    </a>

    <style>
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

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        @media (max-width: 600px) {
            .whatsapp-float {
                bottom: 15px;
                left: 15px;
            }
        }
    </style>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.testimonial-slider', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                },
            });
        });
    </script>

@yield('meta_script')
</script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/68285e127a51e3190e056edf/1irequujd';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  {{-- <title>Rooh Ul Quran Academy - Online Quran Classes For Kids And Adults</title> --}}
  <title>@yield('title', 'Rooh Ul Quran Academy - Online Quran Classes For Kids And Adults')</title>
<meta name="google-site-verification" content="LazU64-UPkWgAw4DYjqtS2HjCsUe6xVKjqjSUDB54SY" />
<meta name="description" content="Learn Quran online with Rooh Ul Quran Academy. We offer expert-led online Quran classes for kids and adults, including Tajweed, Hifz, and Quran translation. Start your spiritual journey today from the comfort of your home.">

<meta name="keywords" content="Online Quran classes, Quran academy, Learn Quran online, Quran with Tajweed, Quran memorization, Online Hifz classes, Quran for kids, Quran teachers online, Islamic education, Rooh Ul Quran Academy">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/tab-logo.png" rel="icon">
  <linkf href="assets/img/tab-logo.png" rel="apple-touch-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

 @include('layouts.header')

 @yield('content')


 @include('layouts.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Rooh Ul Quran Academy",
  "url": "http://roohulquranacademy.com/",
  "logo": "http://roohulquranacademy.com/logo.png",
  "description": "Rooh Ul Quran Academy offers online Quran classes with expert male and female tutors. Learn Quran with Tajweed, Hifz, and Tafseer from the comfort of your home.",
  "sameAs": [
    "https://www.facebook.com/roohulquranacademy",
    "https://www.instagram.com/roohulquranacademy",
    "https://www.youtube.com/@roohulquranacademy"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1-234-567-8901",
    "contactType": "Customer Service",
    "areaServed": "Worldwide",
    "availableLanguage": ["English", "Urdu", "Arabic"]
  },
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "PK"
  }
}
</script>


</body>

</html>
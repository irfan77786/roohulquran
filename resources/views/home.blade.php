@extends('main')

@section('title', 'Online Quran Classes for Kids & Adults')

@section('meta_description',
'Rooh Ul Quran Academy offers online Quran classes with expert tutors — learn Tajweed, Hifz & Tafsir at your own pace, free trial available')

@section('meta_keywords',
'rooh ul quran academy, online quran classes, quran learning, tajweed, hifz, tafsir, learn quran online, quran courses, islamic education')

@push('styles')
@include('layouts.partials.hero-banner-styles')
<style>
    #about .card {
        background: #281c1c;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        height: 650px;
    }

    #about .card .nested-card {
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 16px;
    }

    @media (max-width: 1000px) {
        #about .card {
            height: 760px;
        }
    }

    #counts {
        color: #fff;
        /* Ensure text is readable on the background image */
        padding: 20px 0;
    }

    #counts h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    #counts p {
        font-size: 1.3rem;
    }

    .stats-item span {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .stats-item p {
        font-size: 10rem;
        margin-top: 10px;
    }

    .stats-item span,
    .stats-item p {
        color: white;
    }

    .video-section {
        background-color: #cfc6c6;
        padding: 50px 0;
    }

    .video-container iframe {
        border-radius: 10px;
        /* Optional: Add rounded corners to the video */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Optional: Add a subtle shadow */
    }

    #why-us {
        padding: 50px 0;
        color: #000000;
    }

    .icon-box img {
        width: 80px;
        height: 80px;
        object-fit: contain;
        margin-bottom: 15px;
    }

    #why-us {
        background-image: url('{{ asset('assets/img/about-bg.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px 0;
    }

    /* General Styling */
    /* General Styling */
    .bg-dark {
        background-color: #1c1c1c;
    }

    .bg-danger {
        background-color: #a63d2e;
    }

    .text-white {
        color: #ffffff;
    }

    .rounded-pill {
        border-radius: 50px !important;
    }

    .btn-dark {
        background-color: #000000;
        color: #ffffff;
        font-weight: bold;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #333333;
    }

    .form-label {
        color: black;
    }


    /* Responsive Adjustments */
    @media (min-width: 300px) and (max-width: 768px) {
        .w-lg-50 {
            width: 100% !important;
        }

        .d-lg-block {
            display: none !important;
            /* Hide thumbs-up image on mobile */
        }

        .rounded {
            border-radius: 10px !important;
        }

        .form-container {
            max-width: 100%;
            /* Adjust the width of the form inputs */
        }

        .form-label {
            display: none;
        }

        .hero p {
            font-size: 13px;
            text-align: center;
        }


    }

    @media (min-width: 300px) and (max-width: 400px) {
        #about .card {
            height: 800px;
        }
    }

    .form-container {
        max-width: 90%;
        /* Adjust the width of the form inputs */
    }

    .input-large {
        height: 40px;
        /* Adjust the height as needed */
        font-size: 1.1rem;
        /* Optional: Increase font size for better readability */
    }


    /* contact us  */
    .contact-section {
        position: relative;
        padding: 50px 0;
        color: white;
    }


    .contact-section .contact-form {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: 2px solid #122F2A;
    }

    .contact-section .contact-form input,
    .contact-section .contact-form select {
        border: 1px solid #ddd;
        padding: 10px 15px;
        font-size: 14px;
    }

    .contact-section .contact-form input:focus,
    .contact-section .contact-form select:focus {
        border-color: #122F2A;
        outline: none;
    }

    .contact-section .contact-form button {
        background-color: #36c47d;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }

    .contact-section .contact-form button:hover {
        background-color: #2a9f5d;
    }

    @media (max-width: 768px) {
        .contact-section .contact-form {
            padding: 20px;
        }
    }

    .hover-popout {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-popout:hover {
        transform: scale(1.05);
        /* Slightly enlarges the form */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        /* Adds a stronger shadow */
    }

    /* youtube style */

    .youtube-lazy-wrapper {
        position: relative;
        width: 100%;
        max-width: 100%;
        aspect-ratio: 16 / 9;
        /* Perfect for responsive height */
        border-radius: 10px;
        overflow: hidden;
        background-color: #000;
    }

    .youtube-thumbnail {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        cursor: pointer;
        transition: opacity 0.3s ease;
        z-index: 2;
    }

    .youtube-play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 64px;
        height: 64px;
        background: url('https://img.icons8.com/ios-filled/100/ffffff/play--v1.png') no-repeat center;
        background-size: contain;
        opacity: 0.9;
        z-index: 3;
    }

    .youtube-lazy-wrapper iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .add-plus::after {
        content: "+";
        margin-left: 4px;
    }
</style>
@endpush

@section('content')
@include('layouts.partials.hero-banner')

<!-- New Content Section -->
<section id="academy-intro" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">

        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color:#122F2A; font-size:2rem;">
                Rooh ul Quran Academy Learn Quran Online with Expert Teachers
            </h2>
            {{-- <p class="lead text-muted">
                Welcome to Rooh ul Quran Academy, your trusted online Quran school where learning the Holy Quran becomes
                <span class="fw-semibold">simple, interactive, and rewarding</span>.
            </p> --}}
        </div>

        <!-- Intro + Features -->
        <div class="row align-items-center g-5">
            <!-- Left Content -->
            <div class="col-lg-10 mx-auto text-center">
                <p>
                    Whether you are a beginner starting with <strong>Noorani Qaida Online</strong>, a student aiming to
                    <strong>learn Quran with Tajweed</strong>, or someone dedicated to <strong>Quran Memorization
                        Online</strong>,
                    we provide structured and personalized classes for all ages.
                </p>
                <p>
                    With highly qualified teachers, including experienced <strong>female Quran tutors</strong> for
                    sisters and
                    kids, our mission is to make Quran learning accessible to every Muslim across the globe.
                </p>
                <p class="fw-bold text-success">Enroll Now and Begin Your Online Quran Journey!</p>
            </div>

            <!-- Right Features List -->
            {{-- <div class="col-lg-6">
                <h4 class="fw-bold mb-4" style="color:#1A685B;">Why Choose Us?</h4>
                <ul class="list-unstyled fs-6">
                    <li class="mb-3 d-flex align-items-start">
                        <span class="me-2 text-success fs-5">✔</span> One-to-one Online Quran Classes
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <span class="me-2 text-success fs-5">✔</span> Flexible Timings for Kids and Adults
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <span class="me-2 text-success fs-5">✔</span> Interactive Learning with Tajweed Rules
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <span class="me-2 text-success fs-5">✔</span> Special Courses for Hifz Quran Online
                    </li>
                </ul>
            </div> --}}
        </div>

        <!-- Tajweed + Hifz -->
        <div class="row mt-5">
            <div class="col-lg-10 mx-auto text-center">
                <h2 class="fw-bold mb-3" style="color:#122F2A;">Quran Memorization and Tajweed Made Easy</h2>
                <p>
                    If your goal is to <strong>memorize the Quran</strong>, our step-by-step
                    <strong>Online Hifz Course</strong> is perfect for you. Students can
                    <strong>Read and Memorize Quran Online</strong> under the supervision of expert tutors who ensure
                    accuracy and
                    discipline.
                </p>
                <p>
                    We also specialize in <strong>Learn Quran with Tajweed</strong>, helping students perfect their
                    recitation with
                    correct pronunciation. Whether you are a beginner or want to polish your skills, our academy
                    provides
                    structured and easy-to-follow programs.
                </p>
            </div>
        </div>
    </div>
</section>



<!-- About Section -->
<section id="about" class="about section"
    style="background-image: url('{{ asset('assets/img/about-bg.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <!-- Image on the Left -->
            <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/img/about.webp') }}" loading="lazy" class="img-fluid rounded shadow"
                    alt="about roohul quran" width="600" height="400">
            </div>

            <!-- Card for About Us Description -->
            <div class="col-lg-6 order-2 order-lg-2" data-aos="fade-up" data-aos-delay="200" style="opacity: 1; transform: none;">
                <div class="card p-4 shadow"
                    style="position: relative; top: -12px; background: #ffffff; border-radius: 10px;">
                    <!-- Increased height -->
                    <h2 style="color:#122F2A;">Who we are</h2>
                    <h2 style="color:#122F2A;"><b>About</b> Us ?</h2>
                    <p>

                        Roohul Quran addresses this need by offering accessible Islamic education globally to those who
                        lack
                        resources.
                    </p>

                    <!-- Nested Card 1 -->
                    <div class="nested-card p-3 mb-3 nt-5" style="background-color: #f3d8d8; border-radius: 8px;">
                        <h3><b>Our Mission</b></h3>
                        <p>
                            Our mission is to make Islamic education accessible to everyone by connecting students with
                            highly qualified
                            instructors — including native Arabic teachers — and removing the limitations of distance
                            and location.
                            We aim to deliver an engaging and world-class learning experience to every learner.
                        </p>
                    </div>

                    <!-- Nested Card 2 -->
                    <div class="nested-card p-3" style="background-color: #cad4dd; border-radius: 8px;">
                        <h3><b>Our Vision</b></h3>
                        <p>
                            Our vision is to uplift Muslim communities worldwide by offering affordable, high-quality
                            Islamic education
                            through innovative technology. We aspire to build a global platform where learning the deen
                            becomes simple,
                            flexible, and impactful for every age group.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About Section -->

<!-- Counts Section -->
<section id="counts" class="section counts light-background"
    style="background-image: url('{{ asset('assets/img/choos-us.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <!-- Title -->
            <div class="col-12 text-center">
                <h2 style="color: #36c47d">Start Your Quran Learning Journey Today</h2>
                <p class="col-lg-6 mx-auto" style="text-align:inherit;line-height: 1.8;">
                    Rooh ul Quran Academy is more than an online Quran school – it is a place where students grow
                    spiritually and strengthen their connection with Allah (SWT).
                </p>
            </div>

            <!-- Stats Items -->
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                        class="purecounter add-plus" style="color: white;">
                    </span>
                    <p style="color: white;">Years</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                        class="purecounter add-plus" style="color: white;">
                    </span>
                    <p style="color: white;">Tutors</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1"
                        class="purecounter add-plus" style="color: white;">
                    </span>
                    <p style="color: white;">Graduates</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1"
                        class="purecounter add-plus" style="color: white;">
                    </span>
                    <p style="color: white;">Students</p>
                </div>
            </div><!-- End Stats Item -->

            <!-- End Stats Item -->
            <!-- End Stats Item -->
        </div>
    </div>
</section>
<!-- /Counts Section -->
<!-- Video Section -->
@include('layouts.youtube')

<!-- Why Us Section -->
<section id="why-us" class="section why-us"
    style="background-image: url('{{ asset('assets/img/about-bg.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
    <div class="container">
        <div class="row gy-4">
            <!-- New Content -->
            <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100">
                <h2 class=" mb-4" style="color:#122F2A;">Why Choose Roohul Quran Academy?</h2>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">

                            <ul class="list-unstyled text-start">
                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-success">✔</span>
                                    <span><strong class="text-primary">Qualified Online Quran Teachers</strong> –
                                        Experienced scholars and tutors to guide you every step of the way.</span>
                                </li>

                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-success">✔</span>
                                    <span><strong class="text-danger">Female Quran Tutors</strong> – Dedicated for
                                        sisters and kids, offering a comfortable and supportive environment.</span>
                                </li>

                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-success">✔</span>
                                    <span><strong class="text-warning">Flexible Schedules</strong> – Learn at your own
                                        time and pace, making it easy to fit Quran study into your daily routine.</span>
                                </li>

                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-success">✔</span>
                                    <span><strong class="text-success">Affordable Packages</strong> – Quality Quran
                                        education at reasonable and competitive prices.</span>
                                </li>

                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-success">✔</span>
                                    <span><strong class="text-purple">Worldwide Access</strong> – Join from anywhere in
                                        the world and study from the comfort of your home.</span>
                                </li>

                                <li class="mb-3 d-flex">
                                    <span class="me-2 text-success">✔</span>
                                    <span><strong class="text-teal">Step-by-Step Learning</strong> – From Noorani Qaida
                                        for beginners to advanced Tajweed and Hifz, we cater to all levels.</span>
                                </li>
                            </ul>

                            <p class="mt-4 text-center" style="color: #2c3e50; font-size: 1.1rem;">
                                At <strong>Roohul Quran Academy</strong>, we strive to make Quran learning accessible,
                                effective, and enjoyable for everyone. Whether you're starting from scratch or looking
                                to advance your skills, we are here to support you.
                                <br><br>
                                <span class="text-black">Start your journey today with a <strong>free trial
                                        class</strong> and experience the difference!</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Icon Boxes -->

        </div>
    </div>
</section>

<section id="why-choose-us" class="py-5 bg-white">
    <div class="container" data-aos="fade-up">
        <!-- Heading -->
        <div class="text-center mb-2">
            <h2 class="fw-bold" style="color:#122F2A;">Learn Quran Online with Trusted Teachers</h2>
            <p class="text-muted">
                At Rooh ul Quran Academy, we understand that every student learns differently. That’s why we offer
                <strong>personalized online Quran classes</strong> with both male and female tutors to suit your needs.
                From <strong>Learn Noorani Qaida Online</strong> for kids to advanced Tajweed lessons for adults, our
                courses are designed to meet the needs of beginners, children, and advanced learners.
            </p>
        </div>

        <!-- Features List -->
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <span class="fs-2 text-success mb-3">📖</span>
                    <h5 class="fw-bold">One-to-one Classes</h5>
                    <p class="text-muted mb-0">Personalized attention for effective Quran learning.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <span class="fs-2 text-primary mb-3">⏰</span>
                    <h5 class="fw-bold">Flexible Timings</h5>
                    <p class="text-muted mb-0">Convenient schedules for kids and adults worldwide.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <span class="fs-2 text-warning mb-3">🎙️</span>
                    <h5 class="fw-bold">Interactive Tajweed</h5>
                    <p class="text-muted mb-0">Learn with Tajweed rules for accurate recitation.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <span class="fs-2 text-danger mb-3">⭐</span>
                    <h5 class="fw-bold">Special Hifz Courses</h5>
                    <p class="text-muted mb-0">Step-by-step guidance for Quran memorization.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <span class="fs-2 text-info mb-3">👨‍🏫</span>
                    <h5 class="fw-bold">Expert Quran Tutors</h5>
                    <p class="text-muted mb-0">Highly trained and certified teachers with years of experience.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <span class="fs-2 mb-3" style="color:#e83e8c;">👩‍🏫</span>
                    <h5 class="fw-bold">Female Quran Tutors</h5>
                    <p class="text-muted mb-0">Dedicated female instructors for sisters and kids in a comfortable
                        setting.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- /Why Us Section -->


<!-- Courses Section -->
<section id="courses" class="courses section" style="background-color: #fdf1dd; padding: 10px 0;">

    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
        {{-- <h2 class="text-black">Highlighted Program</h2> --}}
        <p class="fw-bold" style="color:#122F2A;">Our Featured Courses</p>
        {{-- <h5 class="col-lg-8 mx-auto text-black">
            Explore our expertly designed Quran courses, including Tajweed, Hifz, and Quran translation. Each course is
            tailored to help you achieve your learning goals with ease and excellence.
        </h5> --}}
        <span style="color: #212529;">Explore our expertly designed Quran courses, including Tajweed, Hifz, and Quran
            translation. Each course is
            tailored to help you achieve your learning goals with ease and excellence.</span>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row">

            <div class="course-wrapper " data-aos="fade-up">
                <div class="course-card " data-aos="fade-up">
                    <div class="course-image">
                        <span class="badge-level">Intermediate</span>
                        <img src="{{ asset('assets/img/ai/course-1.webp') }}" srcset="{{ asset('assets/img/ai/course-1.webp') }} 480w,
          {{ asset('assets/img/ai/course-1.webp') }} 768w,
          {{ asset('assets/img/ai/course-1.webp') }} 1024w"
                            sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 25vw" alt="memorize quran online"
                            loading="lazy" width="400" height="260" />

                    </div>
                    <div class="course-info">
                        {{-- <div class="meta">
                            <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
                            <span><i class="bi bi-clock"></i> 24/7 Available</span>
                        </div> --}}
                        <h3 class="title"><a href="{{ route('quran.memorization') }}">Hifz Quran Online</a></h3>
                        <p class="description">Memorizing the Holy Quran is a spiritual and physical program. It’s a
                            miracle.</p>
                        {{-- <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(39 Reviews)</span>
                        </div>
                        <div class="footer-course">
                            <span class="price">30 USD / 20 POUNDS</span>
                            <span style="color: #212529;" class="enroll"><i class="bi bi-mortarboard"></i> 120+
                                Enroll</span>
                        </div> --}}
                    </div>
                </div>
                <div class="course-card" data-aos="fade-up">
                    <div class="course-image">
                        <span class="badge-level">Beginner</span>
                        <img src="{{ asset('assets/img/ai/course-2.webp') }}" srcset="{{ asset('assets/img/ai/course-2.webp') }} 480w,
          {{ asset('assets/img/ai/course-2.webp') }} 768w,
          {{ asset('assets/img/ai/course-2.webp') }} 1024w"
                            sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 33vw" alt="noorani qaidah class online"
                            loading="lazy" width="400" height="260" />

                    </div>
                    <div class="course-info">
                        {{-- <div class="meta">
                            <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
                            <span><i class="bi bi-clock"></i> 24/7 Available</span>
                        </div> --}}
                        <h3 class="title"><a href="{{ route('quran.recitation') }}">Learn Noorani Qaida Online</a></h3>
                        <p class="description">For the purpose of learning the basics of tajweed rules, one has to
                            learn this
                            booklet</p>
                        {{-- <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(24 Reviews)</span>
                        </div>
                        <div class="footer-course">
                            <span class="price">30 USD / 20 POUNDS</span>
                            <span style="color: #212529;" class="enroll"><i class="bi bi-mortarboard"></i> 378+
                                Enroll</span>
                        </div> --}}
                    </div>
                </div>
                <div class="course-card" data-aos="fade-up">
                    <div class="course-image">
                        <span class="badge-level">Advance</span>
                        <img src="{{ asset('assets/img/ai/course-3.webp') }}" srcset="{{ asset('assets/img/ai/course-3.webp') }} 480w,
          {{ asset('assets/img/ai/course-3.webp') }} 768w,
          {{ asset('assets/img/ai/course-3.webp') }} 1024w"
                            sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 33vw"
                            alt="Quran reading with Tajweed" loading="lazy" width="400" height="260" />

                    </div>
                    <div class="course-info">
                        {{-- <div class="meta">
                            <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
                            <span><i class="bi bi-clock"></i> 24/7 Available</span>
                        </div> --}}
                        <h3 class="title"><a href="{{ route('quran.tajweed') }}">Quran with Tajweed Course</a></h3>
                        <p class="description">Quran reading with Tajweed has immense significance in preservation of
                            Quran</p>
                        {{-- <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(32 Reviews)</span>
                        </div>
                        <div class="footer-course">
                            <span class="price">30 USD / 20 POUNDS</span>
                            <span style="color: #212529;" class="enroll"><i class="bi bi-mortarboard"></i> 360+
                                Enroll</span>
                        </div> --}}
                    </div>
                </div>
                <div class="course-card" data-aos="fade-up">
                    <div class="course-image">
                        <span class="badge-level">Advance</span>
                        <img src="{{ asset('assets/img/ai/course-4.webp') }}" srcset="{{ asset('assets/img/ai/course-4.webp') }} 480w,
          {{ asset('assets/img/ai/course-4.webp') }} 768w,
          {{ asset('assets/img/ai/course-4.webp') }} 1024w"
                            sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 33vw"
                            alt="Tafseer ul Quran course" loading="lazy" width="400" height="260" />

                    </div>
                    <div class="course-info">
                        {{-- <div class="meta">
                            <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
                            <span><i class="bi bi-clock"></i> 24/7 Available</span>
                        </div> --}}
                        <h3 class="title"><a href="{{ route('quran.tafseer') }}">Online Quran Classes for Kids</a></h3>
                        <p class="description">
                            Engaging and easy Quran lessons for kids with step-by-step guidance and Tajweed.
                        </p>

                        {{-- <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(82 Reviews)</span>
                        </div>
                        <div class="footer-course">
                            <span class="price">30 USD / 20 POUNDS</span>
                            <span style="color: #212529;" class="enroll"><i class="bi bi-mortarboard"></i> 300+
                                Enroll</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- End Course Item-->

        </div>

    </div>

</section><!-- /Courses Section -->

{{-- start of faq --}}

<section id="faq" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#122F2A;">Frequently Asked Questions</h2>
            <p class="text-muted">Find answers to the most common questions about our online Quran classes.</p>
        </div>

        <!-- FAQ Accordion -->
        <div class="accordion" id="faqAccordion">

            <!-- Item 1 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-1">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-1" aria-expanded="false" aria-controls="faq-collapse-1">
                        Can beginners start Quran classes online?
                    </button>
                </h2>
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-heading-1"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes! We have special Quran classes for beginners starting with <strong>Noorani Qaida</strong>.
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-2">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                        Do you provide female Quran teachers?
                    </button>
                </h2>
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we provide <strong>female Quran tutors online</strong> for sisters and young kids.
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-3">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                        What if I want to memorize the Quran?
                    </button>
                </h2>
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can join our <strong>Online Hifz Course</strong>, specially designed for both kids and
                        adults.
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-4">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                        Can I learn Tajweed online?
                    </button>
                </h2>
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely! Our expert teachers provide <strong>step-by-step guidance</strong> to help you learn
                        Quran with Tajweed.
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-5">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                        What devices can I use for online Quran classes?
                    </button>
                </h2>
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can use a <strong>laptop, tablet, or even a mobile phone</strong> with internet access to
                        attend our
                        classes.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- end of faq --}}


{{-- start testimonial --}}

@include('layouts.testimonial')

{{-- contact us --}}

<section id="contact" class="contact-section position-relative"
    style="background: url('{{ asset('assets/img/ai/contact-us.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
    <!-- Transparent Black Box -->
    <div class="overlay"></div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-6 col-md-12 text-white" data-aos="fade-up">
                <h2 class="mb-4" style="font-weight: bold; color: #f8f8f8;">Register Your Free Online Quran Classes
                </h2>
                <ul class="list-unstyled">
                    <li class="mb-4 d-flex align-items-start">
                        <img src="{{ asset('assets/img/icons/pointing-up.avif') }}" alt="registration" class="me-3"
                            style="width: 40px; height: 40px;" loading="lazy" decoding="async">
                        <div>
                            <h2 style="color: #1bd634; font-weight: bold;">Simple and Convenient Registration</h2>
                            <p>Sign up easily for free Quran classes with experienced teachers. Just provide your name
                                and contact to
                                start learning!</p>
                        </div>
                    </li>
                    <li class="mb-4 d-flex align-items-start">
                        <img src="{{ asset('assets/img/icons/schedule.avif') }}" alt="Schedule" class="me-3"
                            style="width: 40px; height: 40px;" loading="lazy" decoding="async">
                        <div>
                            <h5 style="color: #1bd634; font-weight: bold;">Schedule Your Free Trial</h5>
                            <p>After you register, we will reach out to you to arrange a convenient time for your free
                                Quran trial
                                classes.</p>
                        </div>
                    </li>
                    <li class="mb-4 d-flex align-items-start">
                        <img src="{{ asset('assets/img/icons/koran.avif') }}" alt="Start quran Class" class="me-3"
                            style="width: 40px; height: 40px;" loading="lazy" decoding="async">
                        <div>
                            <h5 style="color: #1bd634; font-weight: bold;">Start Your First Class</h5>
                            <p>We’ll quickly connect you with one of our expert Quran teachers, allowing you to schedule
                                your first
                                class at a time that works best for you.</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start">
                        <img src="{{ asset('assets/img/icons/quality.avif') }}" alt="Certificate quran teachers" class="me-3"
                            style="width: 40px; height: 40px;" loading="lazy" decoding="async">
                        <div>
                            <h5 style="color: #1bd634; font-weight: bold;">Get Your Certificate from Us</h5>
                            <p>Get your certificate after successfully completing the course. Start your learning
                                journey with us
                                today!</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Right Form -->
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200" style="opacity: 1; transform: none;">
                <div class="contact-form bg-white p-4 shadow hover-popout"
                    style="border: 2px solid #122F2A; border-radius: 20px;">
                    <h3 class="mb-4 text-center" style="color: #122F2A; font-weight: bold;">FREE TRIAL CLASS</h3>
                    <form id="trial-form-submit">
                        @csrf
                        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="form_started_at" value="{{ time() }}">
                        @include('layouts.partials.public-form-fields', ['rounded' => true])
                        @include('layouts.partials.form-turnstile')
                        <!-- Button with loading spinner -->
                        <button type="submit" class="btn w-100 rounded-pill" id="submit-btn"
                            style="background-color: #FF5528; font-weight: bold;">
                            <span id="btn-text">Get Free Trial Class</span>
                            <span id="btn-loading" class="spinner-border spinner-border-sm d-none"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "EducationalOrganization",
      "@id": "https://roohulquranacademy.com/#organization",
      "name": "Rooh Ul Quran Academy",
      "url": "https://roohulquranacademy.com/",
      "logo": "https://roohulquranacademy.com/assets/img/tab-logo.webp",
      "description": "Rooh Ul Quran Academy offers online Quran classes for kids and adults worldwide, including Noorani Qaida, Tajweed, Quran Memorization (Hifz), and Tafseer courses with qualified male and female Quran tutors.",
      "email": "info@roohulquranacademy.com",
      "telephone": ["+92-334-4066429", "+92-344-6781539"],
      "sameAs": [
        "https://www.facebook.com/roohulquran"
      ],
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "PK"
      },
      "founder": {
        "@type": "Person",
        "name": "Rooh Ul Quran Academy Team"
      }
    },
    {
      "@type": "Course",
      "@id": "https://roohulquranacademy.com/#tajweed-course",
      "url": "{{ url('/quran-reading-with-tajweed') }}",
      "name": "Online Quran Classes with Tajweed",
      "description": "Learn Quran online with proper Tajweed rules, guided by expert tutors.",
      "provider": { "@id": "https://roohulquranacademy.com/#organization" }
      @include('layouts.partials.course-schema-extras')
    },
    {
      "@type": "Course",
      "@id": "https://roohulquranacademy.com/#hifz-course",
      "url": "{{ url('/memorize-quran-online') }}",
      "name": "Quran Memorization (Hifz) Online",
      "description": "Structured online Hifz course to help students memorize the Holy Quran with discipline.",
      "provider": { "@id": "https://roohulquranacademy.com/#organization" }
      @include('layouts.partials.course-schema-extras')
    },
    {
      "@type": "Course",
      "@id": "https://roohulquranacademy.com/#qaida-course",
      "url": "{{ url('/qaida-by-roohulquran') }}",
      "name": "Learn Noorani Qaida Online",
      "description": "Beginner-friendly Noorani Qaida course for kids and adults to learn Quran reading basics.",
      "provider": { "@id": "https://roohulquranacademy.com/#organization" }
      @include('layouts.partials.course-schema-extras')
    },
    {
      "@type": "Course",
      "@id": "https://roohulquranacademy.com/#tafseer-course",
      "url": "{{ url('/tafseer-course-online') }}",
      "name": "Tafseer Course Online",
      "description": "Comprehensive Tafseer ul Quran lessons to understand the meaning and context of the Quran.",
      "provider": { "@id": "https://roohulquranacademy.com/#organization" }
      @include('layouts.partials.course-schema-extras')
    },
    {
      "@type": "FAQPage",
      "@id": "https://roohulquranacademy.com/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Do you offer a free trial class?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Rooh Ul Quran Academy offers a free trial class so students can experience our teaching method before enrolling."
          }
        },
        {
          "@type": "Question",
          "name": "Can kids join your online Quran classes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our online Quran classes are designed for both kids and adults. We have specialized beginner-friendly courses for children such as Noorani Qaida."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide female Quran tutors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we have qualified female Quran tutors available for students who prefer to learn from a female teacher."
          }
        },
        {
          "@type": "Question",
          "name": "What courses do you offer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We offer Online Quran Classes with Tajweed, Noorani Qaida, Quran Memorization (Hifz), and Tafseer courses for all levels."
          }
        },
        {
          "@type": "Question",
          "name": "What are your class timings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide flexible class timings to accommodate students across different time zones worldwide."
          }
        },
        {
          "@type": "Question",
          "name": "How much do online Quran classes cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The fee structure varies depending on the course and number of classes per week. Please contact us directly for detailed pricing."
          }
        }
      ]
    }
  ]
}
    </script>


</section>

@if(env('TURNSTILE_SITE_KEY'))
<script>
(function () {
    var forms = document.querySelectorAll('#trial-form, #trial-form-submit');
    if (!forms.length || !('IntersectionObserver' in window)) return;
    var loaded = false;
    function loadTurnstile() {
        if (loaded) return;
        loaded = true;
        var s = document.createElement('script');
        s.src = 'https://challenges.cloudflare.com/turnstile/v0/api.js';
        s.async = true;
        s.defer = true;
        document.head.appendChild(s);
    }
    var obs = new IntersectionObserver(function (entries) {
        if (entries.some(function (e) { return e.isIntersecting; })) {
            obs.disconnect();
            loadTurnstile();
        }
    }, { rootMargin: '100px' });
    forms.forEach(function (f) { obs.observe(f); });
})();
</script>
@endif
<script>
    (function(){
        var swalPromise = null;
        function loadSwal() {
            if (window.Swal) return Promise.resolve(window.Swal);
            if (swalPromise) return swalPromise;
            swalPromise = new Promise(function (resolve, reject) {
                var css = document.createElement('link');
                css.rel = 'stylesheet';
                css.href = '{{ asset('assets/vendor/sweetalert2/sweetalert2.min.css') }}';
                document.head.appendChild(css);
                var s = document.createElement('script');
                s.src = '{{ asset('assets/vendor/sweetalert2/sweetalert2.min.js') }}';
                s.onload = function () { resolve(window.Swal); };
                s.onerror = reject;
                document.head.appendChild(s);
            });
            return swalPromise;
        }

        const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function handleSubmit(formId) {
            const form = document.getElementById(formId);
            if (!form) return;
            form.addEventListener('submit', async function(e){
                e.preventDefault();
                const submitBtn = this.querySelector('#submit-btn');
                const btnText = this.querySelector('#btn-text');
                const btnLoading = this.querySelector('#btn-loading');
                if (btnText) btnText.classList.add('d-none');
                if (btnLoading) btnLoading.classList.remove('d-none');
                if (submitBtn) submitBtn.disabled = true;

                try {
                    const Swal = await loadSwal();
                    const formData = new FormData(this);
                    const response = await fetch('{{ route('trial-class.store') }}', {
                        method: 'POST',
                        headers: { 'X-CSRF-TOKEN': csrf },
                        body: new URLSearchParams([...formData])
                    });
                    if (!response.ok) throw response;
                    const data = await response.json();
                    Swal.fire('JazakAllah', data.message || 'Submitted successfully', 'success');
                    this.reset();
                    const startedAtField = this.querySelector('input[name="form_started_at"]');
                    if (startedAtField) startedAtField.value = Math.floor(Date.now() / 1000);
                    const turnstileWidget = this.querySelector('.cf-turnstile');
                    if (window.turnstile && turnstileWidget) turnstile.reset(turnstileWidget);
                } catch (err) {
                    let message = 'Something went wrong.';
                    try {
                        const json = await err.json();
                        if (json && json.errors) {
                            message = Object.values(json.errors).flat().join('\n');
                        }
                    } catch(_) {}
                    loadSwal().then(function (Swal) {
                        Swal.fire('Error', message, 'error');
                    });
                } finally {
                    if (btnText) btnText.classList.remove('d-none');
                    if (btnLoading) btnLoading.classList.add('d-none');
                    if (submitBtn) submitBtn.disabled = false;
                }
            });
        }

        handleSubmit('trial-form');
        handleSubmit('trial-form-submit');
    })();
</script>

@endsection
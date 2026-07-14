@extends('main')

@section('title', 'Online Quran Classes for Kids & Adults')

@section('meta_description',
'Rooh Ul Quran Academy offers online Quran classes with expert tutors — learn Tajweed, Hifz & Tafsir at your own pace, free trial available')

@section('meta_keywords',
'rooh ul quran academy, online quran classes, quran learning, tajweed, hifz, tafsir, learn quran online, quran courses, islamic education')

@push('styles')
@include('layouts.partials.hero-banner-styles')
@include('layouts.partials.teacher-highlights-styles')
@include('layouts.partials.academy-intro-styles')
@include('layouts.partials.counts-section-styles')
@include('layouts.partials.why-us-styles')
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
        padding: 70px 0;
    }

    .stats-item span {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .stats-item p {
        font-size: 1rem;
        margin-top: 10px;
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

<!-- Teacher Highlights — Tauheed style -->
<section id="teacher-highlights">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <article class="teacher-card"
                    style="background-image: url('{{ asset('assets/img/ai/about.webp') }}');">
                    <div class="teacher-card-body">
                        <h3>Professional Quran Teachers</h3>
                        <p>
                            Learn the Holy Quran with highly qualified and experienced Quran teachers. We offer Tajweed,
                            Nazra, Hifz, and Islamic Studies classes for students of all ages with personalized online
                            sessions.
                        </p>
                        <a href="{{ route('teachers') }}" class="teacher-card-btn teacher-card-btn--accent">
                            Learn More
                            <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="180">
                <article class="teacher-card"
                    style="background-image: url('{{ asset('assets/img/ai/teachers.webp') }}');">
                    <div class="teacher-card-body">
                        <h3>Female Quran Teachers</h3>
                        <p>
                            Our dedicated female Quran tutors provide comfortable and interactive learning environments
                            for sisters and kids. Flexible timings and one-on-one online classes are available worldwide.
                        </p>
                        <a href="{{ route('home.contact.us') }}" class="teacher-card-btn teacher-card-btn--light">
                            Enroll Now
                            <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- New Content Section -->
<section id="academy-intro">
    <div class="container">
        <div class="row align-items-stretch g-4 g-lg-5">
            <!-- Left: Image -->
            <div class="col-lg-5 intro-image-col" data-aos="fade-right" data-aos-delay="100">
                <span class="intro-image-dot" aria-hidden="true"></span>
                <span class="intro-image-accent" aria-hidden="true"></span>
                <div class="intro-image-frame">
                    <img src="{{ asset('assets/img/child-reading-quran.png') }}" alt="Child reading Quran at Rooh ul Quran Academy"
                        loading="lazy" width="600" height="480">
                    <div class="intro-image-badge">
                        <i class="bi bi-journal-richtext" aria-hidden="true"></i>
                        <div>
                            <strong>Online Quran Classes</strong>
                            <span>Kids & Adults Welcome</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Content (text unchanged) -->
            <div class="col-lg-7 intro-content" data-aos="fade-left" data-aos-delay="150">
                <span class="intro-eyebrow">About Our Academy</span>

                <div class="intro-panel">
                    <h2 class="fw-bold">
                        Rooh ul Quran Academy Learn Quran Online with Expert Teachers
                    </h2>
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
                    <a href="#contact" class="intro-enroll">
                        Enroll Now and Begin Your Online Quran Journey!
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="intro-panel intro-block-secondary">
                    <h2 class="fw-bold">Quran Memorization and Tajweed Made Easy</h2>
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

                <div class="intro-actions">
                    <a href="#contact" class="intro-discover-btn">
                        Discover More
                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                    </a>
                    <div class="intro-phone-block">
                        <span class="intro-phone-icon" aria-hidden="true">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                        <div class="intro-phone-text">
                            <span class="intro-phone-label">Call us any time:</span>
                            <a href="tel:+923344066429" class="intro-phone-number">+92-334-4066429</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@include('layouts.partials.featured-courses')


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

<!-- Counts Section — help-people-v1-shape1 abstract brushstroke background -->
<section id="counts" class="section counts counts-tauheed counts-help-people-v1-shape1"
    aria-labelledby="counts-heading">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 stats-row">
            <!-- Title -->
            <div class="col-12 text-center">
                <h2 id="counts-heading" class="counts-heading">Start Your Quran Learning Journey Today</h2>
                <p class="col-lg-6 mx-auto counts-lead">
                    Rooh ul Quran Academy is more than an online Quran school – it is a place where students grow
                    spiritually and strengthen their connection with Allah (SWT).
                </p>
            </div>

            <!-- Stats Items -->
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="stats-item text-center w-100 h-100">
                    <span class="stats-icon" aria-hidden="true"><i class="bi bi-calendar-check"></i></span>
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                        class="purecounter add-plus stats-number">
                    </span>
                    <p class="stats-label">Years</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="stats-item text-center w-100 h-100">
                    <span class="stats-icon" aria-hidden="true"><i class="bi bi-person-workspace"></i></span>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                        class="purecounter add-plus stats-number">
                    </span>
                    <p class="stats-label">Tutors</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="stats-item text-center w-100 h-100">
                    <span class="stats-icon" aria-hidden="true"><i class="bi bi-mortarboard"></i></span>
                    <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1"
                        class="purecounter add-plus stats-number">
                    </span>
                    <p class="stats-label">Graduates</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stats-item text-center w-100 h-100">
                    <span class="stats-icon" aria-hidden="true"><i class="bi bi-people"></i></span>
                    <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1"
                        class="purecounter add-plus stats-number">
                    </span>
                    <p class="stats-label">Students</p>
                </div>
            </div><!-- End Stats Item -->
        </div>
    </div>
</section>
<!-- /Counts Section -->
<!-- Video Section -->
@include('layouts.youtube')

<!-- Why Us Section -->
<section id="why-us" class="section why-us why-us-split">
    <div class="container">
        <div class="row align-items-start g-4 g-lg-5">
            <!-- Left: Content -->
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <span class="why-eyebrow">Why Choose Us</span>
                <h2 class="why-heading">Why Choose Roohul Quran Academy?</h2>

                <ul class="why-list">
                    <li>
                        <span class="check-icon" aria-hidden="true">✔</span>
                        <span><strong>Qualified Online Quran Teachers</strong> –
                            Experienced scholars and tutors to guide you every step of the way.</span>
                    </li>

                    <li>
                        <span class="check-icon" aria-hidden="true">✔</span>
                        <span><strong>Female Quran Tutors</strong> – Dedicated for
                            sisters and kids, offering a comfortable and supportive environment.</span>
                    </li>

                    <li>
                        <span class="check-icon" aria-hidden="true">✔</span>
                        <span><strong>Flexible Schedules</strong> – Learn at your own
                            time and pace, making it easy to fit Quran study into your daily routine.</span>
                    </li>

                    <li>
                        <span class="check-icon" aria-hidden="true">✔</span>
                        <span><strong>Affordable Packages</strong> – Quality Quran
                            education at reasonable and competitive prices.</span>
                    </li>

                    <li>
                        <span class="check-icon" aria-hidden="true">✔</span>
                        <span><strong>Worldwide Access</strong> – Join from anywhere in
                            the world and study from the comfort of your home.</span>
                    </li>

                    <li>
                        <span class="check-icon" aria-hidden="true">✔</span>
                        <span><strong>Step-by-Step Learning</strong> – From Noorani Qaida
                            for beginners to advanced Tajweed and Hifz, we cater to all levels.</span>
                    </li>
                </ul>

                <p class="why-closing">
                    At <strong>Roohul Quran Academy</strong>, we strive to make Quran learning accessible,
                    effective, and enjoyable for everyone. Whether you're starting from scratch or looking
                    to advance your skills, we are here to support you.
                    <br><br>
                    <span class="trial-note">Start your journey today with a <strong>free trial
                            class</strong> and experience the difference!</span>
                </p>
            </div>

            <!-- Right: Courses list -->
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="180">
                <aside class="why-courses-panel">
                    <h3>Our Quran Courses</h3>
                    <ul class="why-course-list">
                        <li>
                            <a href="{{ route('quran.recitation') }}" class="why-course-link is-active">
                                <span>Madani &amp; Noorani Qaida Course</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('beginner.classes') }}" class="why-course-link">
                                <span>Quran Reading Course</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('quran.tajweed') }}" class="why-course-link">
                                <span>Learn Quran With Tajweed</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('quran.memorization') }}" class="why-course-link">
                                <span>Quran Memorization</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('quran.tafseer') }}" class="why-course-link">
                                <span>Quran Translation And Tafseer</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home.contact.us') }}" class="why-course-link">
                                <span>Online Ijazah Course</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
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

@include('layouts.partials.trial-form-scripts')

@endsection
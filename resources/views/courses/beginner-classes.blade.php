@extends('main')

@section('title', 'Quran Classes for Beginners - Online Quran Classes')
@section('meta_description' , 'Begin your Quran journey with beginner Quran classes at Rooh Ul Quran — learn reading,
Tajweed & basics with friendly tutors.')
@section('meta_keywords' , 'beginner quran classes, learn quran online, quran basics course, quran reading for
beginners, online quran for beginners, quran study beginners')
@section('content')

<style>
    #hero {
        padding: 50px 0;
    }

    #hero .form-container {
        max-width: 100%;
        margin: 0 auto;
    }

    .desktop-image {
        display: block;
    }

    #hero .mobile-image {
        display: none;
    }

    @media (max-width: 768px) {
        #hero .desktop-image {
            display: none !important;
        }

        #hero .mobile-image {
            display: block;
            width: 100%;
            max-width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #hero {
            text-align: center;
            padding: 0px 0px;
            min-height: 500px;
            height: 500px;
        }

        .hero-heading {
            font-size: 2.2rem;
            font-weight: 600;
        }

        .hero-subtext {
            font-size: large;
        }

        .btn-get-started {
            font-size: 1rem;
            padding: 10px 25px;
        }

    }

    .card {
        border: none;
        border-radius: 10px;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .card-body ul li {
        font-size: 1rem;
        line-height: 1.6;
    }

    .card-body ul li i {
        font-size: 1.5rem;
        color: #44137c;
    }

    .btn-danger {
        background-color: #e74c3c;
        border: none;
        font-weight: bold;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }

    .card-text {
        font-size: 1rem;
        line-height: 1.6;
    }

    .btn-success {
        background-color: #36c47d;
        border: none;
        font-weight: bold;
    }

    .btn-success:hover {
        background-color: #2a9f5d;
    }

    .badge {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.9rem;
        float: left;

    }

    /* VIDEO SECTION */


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
</style>
<section id="hero" class="hero section dark-background">
    <img src="assets/img/hero-bg-3.webp" alt="noorani qaida course" class="desktop-image" data-aos="fade-in">
    <img src="assets/img/hero-bg-1.webp" alt="online noorani qaida course" class="mobile-image" data-aos="fade-in">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <h1 class="hero-heading" style="font-size: 2.6rem !important">
                    <b>Online Noorani Qaida Course – Learn Noorani Qaida for Kids & Beginners</b>
                </h1>
                <p class="mt-3" style="font-size: 18px; line-height: 1.8rem;">
                    Build a strong foundation in Quran recitation with our step-by-step Online Noorani Qaida Course <br>
                    for
                    kids, adults, and new learners.
                </p>
                <a href="{{ route('home.contact.us') }}" class="btn-get-started text-bold">Free Trial</a>
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

<section class="py-2 px-1 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">

            <!-- Left: Image -->
            {{-- <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                <img src="your-image-here.jpg" alt="Noorani Qaida Course" class="img-fluid rounded shadow-lg">
            </div> --}}

            <!-- Right: Content -->
            <div class="col-lg-7">
                <h3 class="fw-bold mb-4" style="color:#44137c; font-size: 28px;">
                    About the Noorani Qaida Course
                </h3>
                <p style="font-size: 17px; line-height: 1.8rem; color:#555;">
                    The <strong>Online Noorani Qaida Course</strong> at <b>Rooh ul Quran Academy</b> is the foundation
                    for every beginner who wishes to
                    learn the Holy Quran. Our qualified online Quran teachers help kids, adults, and new learners start
                    their journey in a
                    <span class="fw-semibold">simple, step-by-step manner</span>.
                </p>
                <p style="font-size: 17px; line-height: 1.8rem; color:#555;">
                    Whether you are a child beginning your first lesson, a new Muslim, or someone looking to refresh
                    your basics,
                    our Noorani Qaida program builds a <strong>strong base for Quran with Tajweed</strong>.
                    With <span class="text-primary">interactive one-to-one classes</span>, flexible timings, and
                    dedicated female Quran tutors for sisters and children,
                    we make Quran learning accessible to everyone worldwide.
                </p>

            </div>
        </div>
    </div>
</section>



<section id="course-details" class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="row">
            <!-- Left Side -->
            <div class="col-lg-8 col-md-12">

                <!-- Learn Noorani Qaida Step by Step -->
                <div class="card mb-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #44137c; font-weight: bold;">Learn Noorani Qaida Online –
                            Step by Step for Beginners</h4>
                        <p class="card-text">Our Noorani Qaida Online Course is designed for:</p>
                        <ul>
                            <li>Kids who are learning Quran for the first time.</li>
                            <li>Beginners who want to understand the basics of Arabic letters and pronunciation.</li>
                            <li>Adults who missed Quran learning in their childhood.</li>
                            <li>New Muslims who wish to start their journey of learning Quran online.</li>
                        </ul>
                        <p>This course helps students:</p>
                        <ul>
                            <li>Recognize Arabic letters correctly.</li>
                            <li>Learn proper pronunciation (Makharij).</li>
                            <li>Practice joining letters and forming words.</li>
                            <li>Develop fluency in reading short verses.</li>
                        </ul>
                        <p>
                            After completing this course, students are ready to move towards Quran classes for
                            beginners, Tajweed rules,
                            and eventually Hifz Quran Online if they wish.
                        </p>
                    </div>
                </div>

                <!-- Noorani Qaida for Kids and Adults -->
                <div class="card shadow-sm" style="border: none; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #44137c; font-weight: bold;">Noorani Qaida for Kids and
                            Adults – A Strong Quran Foundation</h4>
                        <p class="card-text">
                            At Rooh ul Quran Academy, we believe that Noorani Qaida is the key to reading the Quran
                            correctly.
                            Our tutors ensure that children enjoy learning through engaging lessons and repetition,
                            while adults benefit from patient, step-by-step teaching.
                        </p>
                        <ul>
                            <li>Kids Classes – Fun and interactive sessions for children.</li>
                            <li>Adult Classes – Flexible timing for working professionals.</li>
                            <li>Female Quran Tutors – Available for sisters and young girls.</li>
                            <li>Progress Tracking – Parents get regular updates about their child’s learning progress.
                            </li>
                        </ul>
                        <p>
                            Once you master Noorani Qaida, you can easily continue with our Learn Quran Online with
                            Tajweed
                            and Quran Memorization Online Courses.
                        </p>
                    </div>
                </div>

                <!-- Why Choose -->
                <div class="card mt-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #44137c; font-weight: bold;">Why Choose Our Online Noorani
                            Qaida Course?</h4>
                        <ul>
                            <li>Qualified Noorani Qaida Tutors – Skilled in teaching kids & beginners.</li>
                            <li>Flexible Timings – Learn at your convenience.</li>
                            <li>Affordable Packages – Quality education at reasonable prices.</li>
                            <li>Worldwide Access – Learn from any country.</li>
                            <li>Step-by-Step Learning – From letters to fluent reading.</li>
                            <li>Interactive Classes – Focused one-to-one teaching.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-lg-4 col-md-12">
                <!-- Pricing -->
                <div class="card shadow-sm" style="border: none; border-radius: 10px; background-color: #44137c;">
                    <div class="card-body text-center">
                        <div class="badge bg-dark text-white mb-3" style="font-size: 0.9rem;">Starting From</div>
                        <div class="container d-flex flex-column align-items-center">
                            <h3 style="color: #36c47d; font-weight: bold; margin-bottom: 0.3rem;">0 USD</h3>
                            <h6 style="color: #ccc; font-weight: bold; text-decoration: line-through; font-size: 1rem;">
                                80 USD</h6>
                        </div>
                        <p class="text-white mt-3">Affordable packages with expert tutors.</p>
                        <a href="{{ route('home.contact.us') }}" class="btn btn-danger rounded-pill px-4"
                            style="background-color: #e74c3c; border: none;">Free Trial</a>
                    </div>
                </div>

                <!-- Quick Info -->
                <div class="card mb-4 shadow-sm" style="border: none; border-radius: 10px; background-color: #fff;">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-person-video me-2" style="font-size: 1.5rem; color: #44137c;"></i>
                                <span><strong>Sessions:</strong> 1 on 1</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-clock me-2" style="font-size: 1.5rem; color: #44137c;"></i>
                                <span><strong>Availability:</strong> 24/7</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-people me-2" style="font-size: 1.5rem; color: #44137c;"></i>
                                <span><strong>Instructors:</strong> Male & Female</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-globe me-2" style="font-size: 1.5rem; color: #44137c;"></i>
                                <span><strong>Worldwide:</strong> Available in all countries</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Course Levels -->
                <div class="card mb-4 shadow-sm" style="border: none; border-radius: 10px; background-color: #fff8f0;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #44137c; font-weight: bold;">Course Overview</h4>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill me-2" style="color: #36c47d;"></i> Level 1: Learn
                                Arabic Letters</li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: #36c47d;"></i> Level 2: Join
                                Letters & Words</li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: #36c47d;"></i> Level 3: Reading
                                with Tajweed</li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color: #36c47d;"></i> Level 4: Quran
                                Fluency & Hifz Prep</li>
                        </ul>
                    </div>
                </div>

                <!-- Contact -->
                <div class="card shadow-sm"
                    style="border: none; border-radius: 10px; background-color: #000; color: #fff;">
                    <div class="card-body text-center">
                        <p>If you have any further query then you can contact our helpline:</p>
                        <h5 class="mb-0" style="color: #36c47d !important">Call Us</h5>
                        <p style="font-size: 1.25rem; font-weight: bold;">+92 334 4066429</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial -->
        </div>
    </div>
</section>




@include('layouts.youtube')

<!-- Courses Section -->
<section id="courses" class="courses section" style="background-color: #fdf1dd; padding: 50px 0;">


    <!-- Courses Section -->
    <section id="courses" class="courses section" style="background-color: #fdf1dd; padding: 50px 0;">

        <!-- Section Title -->
        <div class="container section-title text-center" data-aos="fade-up">
            <h2 class="text-black">Highlighted Program</h2>
            <p class="text-black">Our <b>Featured</b> Courses</p>
            <h4 class="col-lg-8 mx-auto text-black">
                Explore our expertly designed Quran courses, including Tajweed, Hifz, and Quran translation. Each course
                is
                tailored to help you achieve your learning goals with ease and excellence.
            </h4>
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
                                sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 25vw" alt="memorize quran"
                                loading="lazy" width="400" height="260" />

                        </div>
                        <div class="course-info">
                            <div class="meta">
                                <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
                                <span><i class="bi bi-clock"></i> 24/7 Available</span>
                            </div>
                            <h3 class="title"><a href="{{ route('quran.memorization') }}">Online Hifz Course</a></h3>
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
                                sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 33vw"
                                alt="noorani qaidah class" loading="lazy" width="400" height="260" />

                        </div>
                        <div class="course-info">
                            <div class="meta">
                                <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
                                <span><i class="bi bi-clock"></i> 24/7 Available</span>
                            </div>
                            <h3 class="title"><a href="{{ route('quran.tajweed') }}">Learn Quran Online
                                    With Tajweed</a></h3>
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
                            <span class="badge-level">Beginner</span>
                            <img src="{{ asset('assets/img/ai/course-3.webp') }}" srcset="{{ asset('assets/img/ai/course-3.webp') }} 480w,
          {{ asset('assets/img/ai/course-3.webp') }} 768w,
          {{ asset('assets/img/ai/course-3.webp') }} 1024w"
                                sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 33vw"
                                alt="Quran reading with Tajweed" loading="lazy" width="400" height="260" />

                        </div>
                        <div class="course-info">
                            <div class="meta">
                                <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
                                <span><i class="bi bi-clock"></i> 24/7 Available</span>
                            </div>
                            <h3 class="title"><a href="{{ route('beginner.classes') }}">Quran Classes for Beginners</a>
                            </h3>
                            <p class="description">Quran reading with Tajweed has immense significance in preservation
                                of
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
                            <div class="meta">
                                <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
                                <span><i class="bi bi-clock"></i> 24/7 Available</span>
                            </div>
                            <h3 class="title"><a href="{{ route('quran.tafseer') }}">Tafseer ul Quran</a></h3>
                            <p class="description">Learn Quran by understanding with translation</p>
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

</section><!-- /Courses Section -->

@include('layouts.testimonial')

<section id="faq-noorani" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#44137c;">Noorani Qaida – Frequently Asked Questions</h2>
            <p class="text-muted">Find answers about our Online Noorani Qaida Course for kids and adults.</p>
        </div>

        <!-- FAQ Accordion -->
        <div class="accordion" id="faqNooraniAccordion">

            <!-- Item 1 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-noorani-heading-1">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-noorani-collapse-1" aria-expanded="false"
                        aria-controls="faq-noorani-collapse-1">
                        Who should join the Online Noorani Qaida Course?
                    </button>
                </h2>
                <div id="faq-noorani-collapse-1" class="accordion-collapse collapse"
                    aria-labelledby="faq-noorani-heading-1" data-bs-parent="#faqNooraniAccordion">
                    <div class="accordion-body">
                        Anyone who is a <strong>beginner—kids, adults, or new Muslims—</strong> can join this course.
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-noorani-heading-2">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-noorani-collapse-2" aria-expanded="false"
                        aria-controls="faq-noorani-collapse-2">
                        Do you offer female Quran teachers for Noorani Qaida?
                    </button>
                </h2>
                <div id="faq-noorani-collapse-2" class="accordion-collapse collapse"
                    aria-labelledby="faq-noorani-heading-2" data-bs-parent="#faqNooraniAccordion">
                    <div class="accordion-body">
                        Yes, we provide <strong>female Quran tutors</strong> for sisters and kids.
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-noorani-heading-3">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-noorani-collapse-3" aria-expanded="false"
                        aria-controls="faq-noorani-collapse-3">
                        How long does it take to complete Noorani Qaida?
                    </button>
                </h2>
                <div id="faq-noorani-collapse-3" class="accordion-collapse collapse"
                    aria-labelledby="faq-noorani-heading-3" data-bs-parent="#faqNooraniAccordion">
                    <div class="accordion-body">
                        It depends on the student’s pace. On average, <strong>kids complete it in 3–6 months</strong>.
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-noorani-heading-4">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-noorani-collapse-4" aria-expanded="false"
                        aria-controls="faq-noorani-collapse-4">
                        Is this course only for children?
                    </button>
                </h2>
                <div id="faq-noorani-collapse-4" class="accordion-collapse collapse"
                    aria-labelledby="faq-noorani-heading-4" data-bs-parent="#faqNooraniAccordion">
                    <div class="accordion-body">
                        No, this course is for <strong>both kids and adults</strong>. Many adults also start with
                        Noorani Qaida to refresh their basics.
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-noorani-heading-5">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-noorani-collapse-5" aria-expanded="false"
                        aria-controls="faq-noorani-collapse-5">
                        What will I learn after Noorani Qaida?
                    </button>
                </h2>
                <div id="faq-noorani-collapse-5" class="accordion-collapse collapse"
                    aria-labelledby="faq-noorani-heading-5" data-bs-parent="#faqNooraniAccordion">
                    <div class="accordion-body">
                        After Noorani Qaida, you can continue with <strong>Learn Quran with Tajweed</strong> and then
                        move to <strong>Quran Memorization Online</strong> if you wish.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Online Noorani Qaida Course",
  "description": "Rooh Ul Quran Academy's Noorani Qaida course helps beginners, kids, and adults learn the basics of Quran reading. Students will learn Arabic letters, pronunciation, and Tajweed rules in a structured, step-by-step format.",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Rooh Ul Quran Academy",
    "url": "http://roohulquranacademy.com",
    "logo": "https://roohulquranacademy.com/assets/img/logo.png",
    "sameAs": [
      "https://www.facebook.com/roohulquran"
    ]
  },
  "url": "http://roohulquranacademy.com/qaida-by-roohulquran",
  "hasCourseInstance": {
    "@type": "CourseInstance",
    "courseMode": "online",
    "instructor": [
      {
        "@type": "Person",
        "name": "Hafiz Muhammad Irfan"
      }
    ]
  }
}
</script>



@endsection
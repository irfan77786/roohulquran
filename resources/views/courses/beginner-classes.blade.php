@extends('main')

@section('title', 'Quran Reading Course Online - Beginner Quran Classes')
@section('meta_description' , 'Join our Quran Reading Course at Rooh Ul Quran — learn accurate reading, Tajweed basics
& translation with friendly one-to-one tutors.')
@section('meta_keywords' , 'quran reading course, beginner quran classes, learn quran online, quran basics course,
quran reading for beginners, online quran for beginners')
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
            padding: 0;
            min-height: 0;
            height: auto;
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
        color: #122F2A;
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
@include('layouts.partials.hero-banner-styles')
@include('layouts.partials.hero-banner', [
    'heroTitle' => 'Quran Reading Course – For All Ages & Levels',
    'heroSubtitle' => 'Learn accurate Quran reading, core Tajweed, and basic meanings through translation with personal attention from caring instructors.',
    'heroFeatures' => [
        'Reading foundations & correct recitation',
        'Kids, adults & new learners welcome',
        'One-on-one flexible classes',
        'Start with a free trial class',
    ],
    'heroCtaText' => 'Free Trial',
    'heroCtaUrl' => route('home.contact.us'),
])

<section class="py-2 px-1 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <h3 class="fw-bold mb-4" style="color:#122F2A; font-size: 28px;">
                    About the Quran Reading Course
                </h3>
                <p style="font-size: 17px; line-height: 1.8rem; color:#555;">
                    The <strong>Online Quran Reading Course</strong> at <b>Rooh Ul Quran Academy</b> is made for people
                    of all ages and backgrounds. It helps you learn the basics, read the Quran correctly, understand
                    core Tajweed rules, and discover meanings through translation in a
                    <span class="fw-semibold">simple, step-by-step manner</span>.
                </p>
                <p style="font-size: 17px; line-height: 1.8rem; color:#555;">
                    Enjoy flexible schedules with personal attention from our caring instructors, and learn from
                    anywhere. Beyond reading, this course supports spiritual and moral growth, whether you are new to
                    Quran reading or want to get better.
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

                <div class="card mb-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Quran Reading Course Online –
                            Step by Step for All Ages</h4>
                        <p class="card-text">Our Quran Reading Course is designed for:</p>
                        <ul>
                            <li>Kids building fluent Quran reading after Qaida.</li>
                            <li>Beginners who want accurate recitation and basic Tajweed.</li>
                            <li>Adults returning to Quran reading after a long break.</li>
                            <li>New Muslims ready to read the Quran with confidence.</li>
                        </ul>
                        <p>This course helps students:</p>
                        <ul>
                            <li>Read Quran verses with correct pronunciation.</li>
                            <li>Apply foundational Tajweed rules while reading.</li>
                            <li>Understand meanings through simple translation.</li>
                            <li>Build fluency and confidence with live practice.</li>
                        </ul>
                        <p>
                            After completing this course, students can continue with Learn Quran With Tajweed,
                            Online Quran Memorization, or Online Quran Tafsir - Translation.
                        </p>
                    </div>
                </div>

                <div class="card shadow-sm" style="border: none; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Quran Reading for Kids and
                            Adults – Accurate &amp; Meaningful Recitation</h4>
                        <p class="card-text">
                            At Rooh Ul Quran Academy, Quran reading is more than fluency. It is a journey of spiritual
                            and moral growth. Our tutors keep children engaged through clear lessons and repetition,
                            while adults benefit from patient, flexible teaching.
                        </p>
                        <ul>
                            <li>Kids Classes – Engaging sessions focused on correct reading.</li>
                            <li>Adult Classes – Flexible timing for working professionals.</li>
                            <li>Female Quran Tutors – Available for sisters and young girls.</li>
                            <li>Progress Tracking – Parents get regular updates about their child’s learning progress.
                            </li>
                        </ul>
                        <p>
                            Once you are confident in Quran reading, you can continue with Learn Quran With Tajweed
                            and Online Quran Memorization courses.
                        </p>
                    </div>
                </div>

                <div class="card mt-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Why Choose Our Quran Reading
                            Course?</h4>
                        <ul>
                            <li>Qualified Quran tutors – Skilled with kids, adults &amp; beginners.</li>
                            <li>Flexible Timings – Learn at your convenience.</li>
                            <li>Affordable Packages – Quality education at reasonable prices.</li>
                            <li>Worldwide Access – Learn from any country.</li>
                            <li>Reading + Tajweed basics + translation support.</li>
                            <li>Interactive Classes – Focused one-to-one teaching.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-lg-4 col-md-12">
                <!-- Pricing -->
                <div class="card shadow-sm" style="border: none; border-radius: 10px; background-color: #122F2A;">
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
                                <i class="bi bi-person-video me-2" style="font-size: 1.5rem; color: #122F2A;"></i>
                                <span><strong>Sessions:</strong> 1 on 1</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-clock me-2" style="font-size: 1.5rem; color: #122F2A;"></i>
                                <span><strong>Availability:</strong> 24/7</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="bi bi-people me-2" style="font-size: 1.5rem; color: #122F2A;"></i>
                                <span><strong>Instructors:</strong> Male & Female</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-globe me-2" style="font-size: 1.5rem; color: #122F2A;"></i>
                                <span><strong>Worldwide:</strong> Available in all countries</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Course Levels -->
                <div class="card mb-4 shadow-sm" style="border: none; border-radius: 10px; background-color: #fff8f0;">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Course Overview</h4>
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

@include('layouts.partials.featured-courses')

@include('layouts.testimonial')

<section id="faq-noorani" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#122F2A;">Quran Reading Course – Frequently Asked Questions</h2>
            <p class="text-muted">Find answers about our Online Quran Reading Course for kids and adults.</p>
        </div>

        <div class="accordion" id="faqReadingAccordion">

            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-reading-heading-1">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-reading-collapse-1" aria-expanded="false"
                        aria-controls="faq-reading-collapse-1">
                        Who should join the Quran Reading Course?
                    </button>
                </h2>
                <div id="faq-reading-collapse-1" class="accordion-collapse collapse"
                    aria-labelledby="faq-reading-heading-1" data-bs-parent="#faqReadingAccordion">
                    <div class="accordion-body">
                        Anyone who wants to read the Quran correctly (<strong>kids, adults, or new Muslims</strong>) can
                        join this course.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-reading-heading-2">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-reading-collapse-2" aria-expanded="false"
                        aria-controls="faq-reading-collapse-2">
                        Do you offer female Quran teachers for Quran Reading?
                    </button>
                </h2>
                <div id="faq-reading-collapse-2" class="accordion-collapse collapse"
                    aria-labelledby="faq-reading-heading-2" data-bs-parent="#faqReadingAccordion">
                    <div class="accordion-body">
                        Yes, we provide <strong>female Quran tutors</strong> for sisters and kids.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-reading-heading-3">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-reading-collapse-3" aria-expanded="false"
                        aria-controls="faq-reading-collapse-3">
                        Do I need Madani Qaida before this course?
                    </button>
                </h2>
                <div id="faq-reading-collapse-3" class="accordion-collapse collapse"
                    aria-labelledby="faq-reading-heading-3" data-bs-parent="#faqReadingAccordion">
                    <div class="accordion-body">
                        Basic letter recognition helps, but we assess each student live and place them at the right
                        starting point.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-reading-heading-4">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-reading-collapse-4" aria-expanded="false"
                        aria-controls="faq-reading-collapse-4">
                        Is this course only for children?
                    </button>
                </h2>
                <div id="faq-reading-collapse-4" class="accordion-collapse collapse"
                    aria-labelledby="faq-reading-heading-4" data-bs-parent="#faqReadingAccordion">
                    <div class="accordion-body">
                        No, this course is for <strong>both kids and adults</strong>. Many adults also join to improve
                        fluency and Tajweed basics.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-reading-heading-5">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-reading-collapse-5" aria-expanded="false"
                        aria-controls="faq-reading-collapse-5">
                        What can I study after Quran Reading?
                    </button>
                </h2>
                <div id="faq-reading-collapse-5" class="accordion-collapse collapse"
                    aria-labelledby="faq-reading-heading-5" data-bs-parent="#faqReadingAccordion">
                    <div class="accordion-body">
                        After Quran Reading, you can continue with <strong>Learn Quran With Tajweed</strong> and then
                        move to <strong>Online Quran Memorization</strong> if you wish.
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
  "name": "Quran Reading Course",
  "description": "Rooh Ul Quran Academy's Quran Reading Course helps learners of all ages read the Quran correctly, apply basic Tajweed, and understand meanings through translation with flexible one-to-one online classes.",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Rooh Ul Quran Academy",
    "url": "https://roohulquranacademy.com",
    "logo": "https://roohulquranacademy.com/assets/img/logo.png",
    "sameAs": [
      "https://www.facebook.com/roohulquran"
    ]
  },
  "url": "https://roohulquranacademy.com/beginner-quran-classes",
  "hasCourseInstance": {
    "@type": "CourseInstance",
    "courseMode": "online",
    "instructor": [
      {
        "@type": "Person",
        "name": "Hafiz Muhammad Irfan"
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "url": "{{ route('home.pricing') }}",
    "price": "40",
    "priceCurrency": "USD",
    "availability": "https://schema.org/InStock"
  }
}
</script>



@include('layouts.partials.trial-form-scripts')

@endsection
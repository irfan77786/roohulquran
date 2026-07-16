@extends('main')
@section('title', 'Online Quran Teachers - Rooh Ul Quran Academy')
@section('meta_description' , 'Meet the expert male & female Quran teachers at Rooh Ul Quran — certified, caring tutors
guiding your learning every step')
@section('meta_keywords' , 'quran teachers, online quran tutors, certified quran teachers, male & female quran tutors,
expert teachers roohulquran, Quran instructors online, learn from quran teachers')


<style>
    .quran-teacher img {
        width: 100%;
        height: 100%;
        max-height: 100%;
        object-fit: cover;
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
            display: none;
        }

        #hero .mobile-image {
            display: block;
            width: 100%;
        }
    }

    /* Teachers page — same visual polish as About (content unchanged) */
    #quran-teacher.teachers-refined {
        background: #ffffff;
        padding: 80px 0 40px;
    }

    #quran-teacher.teachers-refined .teacher-media {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 18px 40px rgba(18, 47, 42, 0.12);
    }

    #quran-teacher.teachers-refined .teacher-media img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        display: block;
    }

    #quran-teacher.teachers-refined h4.fw-semibold {
        color: #122F2A;
        font-weight: 800;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    #quran-teacher.teachers-refined .text-muted {
        color: #5f6670 !important;
        line-height: 1.75;
    }

    #quran-teacher.teachers-refined .teacher-checklist {
        list-style: none;
        padding: 0;
        margin: 1.25rem 0 0;
    }

    #quran-teacher.teachers-refined .teacher-checklist li {
        display: flex;
        align-items: flex-start;
        gap: 0.65rem;
        padding: 0.55rem 0.85rem;
        margin-bottom: 0.45rem;
        background: #F6F3EE;
        border-radius: 10px;
        color: #122F2A;
        font-weight: 600;
        font-size: 0.95rem;
        line-height: 1.45;
    }

    #quran-teacher.teachers-refined .teacher-checklist li i {
        color: #1A685B;
        margin-top: 0.15rem;
        flex-shrink: 0;
    }

    #quran-teacher.teachers-refined .types-section {
        margin-top: 70px;
    }

    #quran-teacher.teachers-refined .why-card {
        height: 100%;
        background: #fff;
        border: 1px solid rgba(18, 47, 42, 0.08);
        border-radius: 16px;
        padding: 1.75rem 1.5rem;
        text-align: center;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    #quran-teacher.teachers-refined .why-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(18, 47, 42, 0.1);
    }

    #quran-teacher.teachers-refined .why-card .why-icon {
        width: 54px;
        height: 54px;
        border-radius: 14px;
        background: #F6F3EE;
        color: #1A685B;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.45rem;
        margin-bottom: 1rem;
    }

    #quran-teacher.teachers-refined .why-card h6 {
        font-size: 1.05rem;
        font-weight: 700;
        color: #122F2A;
    }

    #quran-teacher.teachers-refined .why-card p {
        margin: 0;
        color: #6b7280;
        font-size: 0.92rem;
        line-height: 1.6;
    }

    #teachers-benefits.teachers-refined {
        background: #ffffff;
        padding: 40px 0 60px;
    }

    #teachers-benefits.teachers-refined h4.fw-semibold {
        color: #122F2A;
        font-weight: 800;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    #teachers-benefits.teachers-refined .benefits-list {
        list-style: none;
        padding: 0;
        margin: 0;
        background: #F6F3EE;
        border-radius: 18px;
        overflow: hidden;
        border: 1px solid rgba(18, 47, 42, 0.06);
    }

    #teachers-benefits.teachers-refined .benefits-list li {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        padding: 1rem 1.25rem;
        color: #122F2A;
        font-weight: 600;
        font-size: 0.98rem;
        line-height: 1.5;
        border-bottom: 1px solid rgba(18, 47, 42, 0.06);
    }

    #teachers-benefits.teachers-refined .benefits-list li:last-child {
        border-bottom: none;
    }

    #teachers-benefits.teachers-refined .benefits-list li i {
        color: #1A685B;
        margin-top: 0.15rem;
        flex-shrink: 0;
    }

    @media (max-width: 991px) {
        #quran-teacher.teachers-refined {
            padding: 60px 0 20px;
        }

        #quran-teacher.teachers-refined .teacher-media img {
            height: 320px;
        }

        #quran-teacher.teachers-refined .types-section {
            margin-top: 50px;
        }
    }
</style>

@section('content')

<section id="hero" class="hero section tauheed-page-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="tauheed-banner-panel">
                    <h1 class="fw-bold mb-3" style="font-size: 2.2rem !important">Online Quran Teacher <span>Learn Anytime,
                            Anywhere</span></h1>
                    <p style="font-size: larger" class="col-lg-10 col-md-12 col-sm-12">
                        Learning the Quran with a professional teacher is the most effective way to build strong Tajweed,
                        fluency, and understanding.
                        At <strong>Rooh ul Quran Academy</strong>, we provide certified online Quran teachers who guide
                        students step by step with patience and dedication.
                    </p>
                    <a href="{{ route('home.contact.us') }}" class="btn-get-started text-bold">Free Trial</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="quran-teacher" class="py-5 quran-teacher teachers-refined">
    <div class="container">

        {{-- About Teachers --}}
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="teacher-media">
                    <img src="{{ asset('assets/img/ai/teachers.webp') }}"
                        alt="Online Quran Teacher" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h4 class="fw-semibold">Why You Need an Online Quran Teacher</h4>
                <p class="text-muted">Learning Quran online without guidance can lead to mistakes in Tajweed and
                    recitation. A professional teacher helps you:</p>
                <ul class="teacher-checklist">
                    <li><i class="bi bi-check-circle-fill"></i> Pronounce letters correctly</li>
                    <li><i class="bi bi-check-circle-fill"></i> Understand Tajweed rules in detail</li>
                    <li><i class="bi bi-check-circle-fill"></i> Build fluency in recitation</li>
                    <li><i class="bi bi-check-circle-fill"></i> Memorize Quran effectively</li>
                    <li><i class="bi bi-check-circle-fill"></i> Stay motivated with proper feedback</li>
                </ul>
            </div>
        </div>

        {{-- Types of Teachers --}}
        <div class="types-section">
            <div class="row">
                <div class="col-12 text-center mb-4" data-aos="fade-up">
                    <h4 class="fw-semibold">Types of Online Quran Teachers We Provide</h4>
                </div>

                <div class="col-md-4 mb-4" data-aos="zoom-in">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-person-badge"></i></div>
                        <h6 class="fw-bold">Male Quran Teachers</h6>
                        <p class="small">Certified in Tajweed & Qiraat, ideal for boys, men, and advanced
                            students. Experienced in Hifz and Tafsir.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-person-fill"></i></div>
                        <h6 class="fw-bold">Female Quran Teachers</h6>
                        <p class="small">Perfect for sisters & young children. Patient, gentle, and fluent in
                            English, Urdu, and Arabic.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-mortarboard"></i></div>
                        <h6 class="fw-bold">Specialist Tutors</h6>
                        <p class="small">Experts for Tajweed, Hifz, and Ijazah Programs. Advanced teachers
                            with years of experience.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="teachers-benefits" class="teachers-refined">
    <div class="container">
        {{-- Benefits --}}
        <div class="row">
            <div class="col-12 text-center mb-4" data-aos="fade-up">
                <h4 class="fw-semibold">Benefits of Learning with Our Teachers</h4>
            </div>
            <div class="col-lg-10 mx-auto" data-aos="fade-up">
                <ul class="benefits-list">
                    <li><i class="bi bi-check-circle-fill"></i> One-on-one live sessions for maximum attention</li>
                    <li><i class="bi bi-check-circle-fill"></i> Qualified Hafiz, Qari, and Islamic scholars</li>
                    <li><i class="bi bi-check-circle-fill"></i> Flexible timings for international students</li>
                    <li><i class="bi bi-check-circle-fill"></i> Male and female Quran tutors available</li>
                    <li><i class="bi bi-check-circle-fill"></i> Step-by-step progress tracking</li>
                    <li><i class="bi bi-check-circle-fill"></i> Free trial class before you enroll</li>
                    <li><i class="bi bi-check-circle-fill"></i> Affordable fees with family packages</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Courses + Testimonials --}}
@include('layouts.partials.featured-courses')
@include('layouts.testimonial')

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
                        How do online Quran teachers teach?
                    </button>
                </h2>
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-heading-1"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        They use <strong>Zoom or Teams</strong> for live one-on-one sessions, guiding you step by step.
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-2">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                        Can kids learn with online teachers?
                    </button>
                </h2>
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, our teachers specialize in teaching <strong>Quran classes for kids</strong> with
                        interactive methods.
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-3">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                        Do you provide female Quran teachers?
                    </button>
                </h2>
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we provide <strong>certified female Quran tutors</strong> for sisters and children.
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-4">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                        What is the class duration?
                    </button>
                </h2>
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Each session is usually <strong>30–60 minutes</strong>, depending on the course.
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="accordion-item mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faq-heading-5">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                        How do I start?
                    </button>
                </h2>
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Simply <strong>register for a free trial</strong>, and we’ll connect you with the best Quran
                        teacher for your needs.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@type": "WebPage",
  "url": "https://roohulquranacademy.com/teachers",
  "name": "Online Quran Teachers - Rooh Ul Quran Academy",
  "description": "Meet our certified male and female Quran teachers at Rooh Ul Quran Academy. We provide Hafiz, Qari, and Islamic scholars specializing in Tajweed, Hifz, and Tafseer. Learn Quran online with one-on-one classes, flexible timings, and a free trial.",
  "publisher": {
    "@type": "EducationalOrganization",
    "name": "Rooh Ul Quran Academy",
    "url": "https://roohulquranacademy.com"
  },
  "mainEntity": [
    {
      "@type": "Person",
      "name": "Male Quran Teachers",
      "description": "Certified in Tajweed & Qiraat, experienced in Hifz and Tafseer. Suitable for boys, men, and advanced learners."
    },
    {
      "@type": "Person",
      "name": "Female Quran Teachers",
      "description": "Patient and experienced tutors for sisters and children. Fluent in English, Urdu, and Arabic."
    },
    {
      "@type": "Person",
      "name": "Specialist Tutors",
      "description": "Experts in Tajweed, Hifz, and Ijazah programs with years of teaching experience."
    }
  ]
}
    </script>

</section>

@endsection

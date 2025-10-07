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
            display: none;
            /* Hide desktop image on mobile */
        }

        #hero .mobile-image {
            display: block;
            /* Show mobile-specific image */
            width: 100%;
            /* Ensure it spans the full width */
        }

        #hero {
            text-align: center;
            padding: 0px 0px;
            min-height: 500px;
        }

        .hero-heading {
            font-size: 2.2rem;
            /* Increase heading size on mobile */
            font-weight: 600;
        }

        .hero-subtext {
            font-size: 1.2rem;
        }

        .btn-get-started {
            font-size: 1rem;
            padding: 10px 25px;
        }

    }
</style>

@section('content')

<section id="hero" class="hero section dark-background">
    <img src="{{ asset('assets/img/ai/teacher-1.webp') }}" alt="roohul quran academy teacher 1" class="desktop-image"
        data-aos="fade-in">


    <img src="assets/img/hero-bg-1.webp" alt="roohul quran academy teacher hero section" class="mobile-image"
        data-aos="fade-in">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <h1 class="fw-bold mb-3" style="font-size: 2.2rem !important">Online Quran Teacher <span>Learn Anytime,
                        Anywhere</span></h1>
                <p style="font-size: larger" class="col-lg-10 col-md-7 col-sm-12">
                    Learning the Quran with a professional teacher is the most effective way to build strong Tajweed,
                    fluency, and understanding.
                    At <strong>Rooh ul Quran Academy</strong>, we provide certified online Quran teachers who guide
                    students step by step with patience and dedication.
                </p>
                <a href="{{ route('home.contact.us') }}" class="btn-get-started text-bold">Free Trial</a>
            </div>

            <!-- Right Form -->
            {{-- <div class="col-lg-4 col-md-5 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                <div class="form-container p-4 bg-light rounded shadow">
                    <h3 class="mb-3 text-center" style="color: #44137c; font-weight: bold;">
                        Free Trial Class
                    </h3>

                    <form action="/" method="POST">
                        @csrf
                        <div class="mb-1">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                required>
                        </div>
                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" required>
                        </div>
                        <div class="mb-1">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country" required>
                                <option value="" disabled selected>Select your country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <!-- Add more countries as needed -->
                            </select>
                        </div>
                        <button type="submit" class="w-100 p-2 rounded-2"
                            style="background-color: #44137c;color:white">Get Free
                            Trial Class</button>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<section id="quran-teacher" class="py-5 bg-light quran-teacher">
    <div class="container">


        {{-- About Teachers --}}
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('assets/img/ai/teachers.webp') }}" class="img-fluid rounded shadow"
                    alt="Online Quran Teacher" loading="lazy" style="height: 400px; ">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h4 class="fw-semibold">Why You Need an Online Quran Teacher</h4>
                <p class="text-muted">Learning Quran online without guidance can lead to mistakes in Tajweed and
                    recitation. A professional teacher helps you:</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Pronounce letters correctly</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Understand Tajweed rules in detail
                    </li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Build fluency in recitation</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Memorize Quran effectively</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Stay motivated with proper feedback
                    </li>
                </ul>
            </div>
        </div>

        {{-- Types of Teachers --}}
        <div class="row mt-5">
            <div class="col-12 text-center mb-4" data-aos="fade-up">
                <h4 class="fw-semibold">Types of Online Quran Teachers We Provide</h4>
            </div>

            <div class="col-md-4 mb-4" data-aos="zoom-in">
                <div class="card h-100 shadow border-0 rounded-3">
                    <div class="card-body text-center">
                        <i class="bi bi-person-badge fs-2 text-primary mb-3"></i>
                        <h6 class="fw-bold">Male Quran Teachers</h6>
                        <p class="text-muted small">Certified in Tajweed & Qiraat, ideal for boys, men, and advanced
                            students. Experienced in Hifz and Tafsir.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card h-100 shadow border-0 rounded-3">
                    <div class="card-body text-center">
                        <i class="bi bi-person-fill fs-2 text-primary mb-3"></i>
                        <h6 class="fw-bold">Female Quran Teachers</h6>
                        <p class="text-muted small">Perfect for sisters & young children. Patient, gentle, and fluent in
                            English, Urdu, and Arabic.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card h-100 shadow border-0 rounded-3">
                    <div class="card-body text-center">
                        <i class="bi bi-mortarboard fs-2 text-primary mb-3"></i>
                        <h6 class="fw-bold">Specialist Tutors</h6>
                        <p class="text-muted small">Experts for Tajweed, Hifz, and Ijazah Programs. Advanced teachers
                            with years of experience.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Benefits --}}
        <div class="row mt-5">
            <div class="col-12 text-center mb-4" data-aos="fade-up">
                <h4 class="fw-semibold">Benefits of Learning with Our Teachers</h4>
            </div>
            <div class="col-lg-10 mx-auto">
                <ul class="list-group list-group-flush shadow-sm">
                    <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i> One-on-one live
                        sessions for maximum attention</li>
                    <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i> Qualified Hafiz,
                        Qari, and Islamic scholars</li>
                    <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i> Flexible timings
                        for international students</li>
                    <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i> Male and female
                        Quran tutors available</li>
                    <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i> Step-by-step
                        progress tracking</li>
                    <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i> Free trial class
                        before you enroll</li>
                    <li class="list-group-item"><i class="bi bi-check-circle text-success me-2"></i> Affordable fees
                        with family packages</li>
                </ul>
            </div>
        </div>

    </div>
</section>

{{-- start of faq --}}
<section id="faq" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color:#44137c;">Frequently Asked Questions</h2>
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
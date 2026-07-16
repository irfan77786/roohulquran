@extends('main')
@section('title', 'About Rooh Ul Quran Academy | Learn Quran Online')
@section('meta_description' , 'Rooh Ul Quran Academy offers expert online Quran classes: Tajweed, Hifz, Tafsir & more,
flexible schedule, free trial available.')
@section('meta_keywords' , 'online quran academy, quran classes online, tajweed, hifz, tafsir, free trial, learn quran,
certified teachers, flexible timings')


<style>
  .about-us img {
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

  #about-us.about-refined,
  #about-why.about-refined {
    background: #ffffff;
    padding: 80px 0 40px;
  }

  #about-us.about-refined .about-media {
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 18px 40px rgba(18, 47, 42, 0.12);
  }

  #about-us.about-refined .about-media img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    display: block;
  }

  #about-us.about-refined h4.fw-semibold,
  #about-why.about-refined h4.fw-semibold {
    color: #122F2A;
    font-weight: 800;
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }

  #about-us.about-refined .text-muted {
    color: #5f6670 !important;
    line-height: 1.75;
  }

  #about-us.about-refined .about-checklist {
    list-style: none;
    padding: 0;
    margin: 1.25rem 0 0;
  }

  #about-us.about-refined .about-checklist li {
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

  #about-us.about-refined .about-checklist li i {
    color: #1A685B;
    margin-top: 0.15rem;
    flex-shrink: 0;
  }

  #about-us.about-refined .mission-band {
    margin-top: 70px;
    background: linear-gradient(120deg, #122F2A 0%, #1A685B 100%);
    border-radius: 22px;
    overflow: hidden;
  }

  #about-us.about-refined .mission-band .mission-copy {
    padding: 2.75rem 2.25rem;
  }

  #about-us.about-refined .mission-band h4 {
    color: #fff !important;
    font-weight: 800;
  }

  #about-us.about-refined .mission-band p,
  #about-us.about-refined .mission-band .text-muted {
    color: rgba(255, 255, 255, 0.88) !important;
  }

  #about-us.about-refined .mission-band ol {
    padding-left: 1.15rem;
    margin-bottom: 1rem;
  }

  #about-us.about-refined .mission-band ol li {
    color: rgba(255, 255, 255, 0.92);
    margin-bottom: 0.4rem;
    line-height: 1.55;
  }

  #about-us.about-refined .mission-band .mission-media img {
    width: 100%;
    height: 100%;
    min-height: 360px;
    object-fit: cover;
    display: block;
  }

  #about-us.about-refined .why-section,
  #about-why.about-refined .why-section {
    margin-top: 70px;
    padding-bottom: 30px;
  }

  #about-why.about-refined .why-card {
    height: 100%;
    background: #fff;
    border: 1px solid rgba(18, 47, 42, 0.08);
    border-radius: 16px;
    padding: 1.75rem 1.5rem;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  #about-why.about-refined .why-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(18, 47, 42, 0.1);
  }

  #about-why.about-refined .why-card .why-icon {
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

  #about-why.about-refined .why-card h6 {
    font-size: 1.05rem;
    font-weight: 700;
    color: #122F2A;
  }

  #about-why.about-refined .why-card p {
    margin: 0;
    color: #6b7280;
    font-size: 0.92rem;
    line-height: 1.6;
  }

  @media (max-width: 991px) {
    #about-us.about-refined,
    #about-why.about-refined {
      padding: 60px 0 20px;
    }

    #about-us.about-refined .about-media img {
      height: 320px;
    }

    #about-us.about-refined .mission-band {
      margin-top: 50px;
    }

    #about-us.about-refined .mission-band .mission-copy {
      padding: 2rem 1.5rem;
    }

    #about-us.about-refined .why-section,
    #about-why.about-refined .why-section {
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
          <h1 class="fw-bold mb-3" style="font-size: 2.6rem !important">About <span>Rooh ul Quran Academy</span></h1>
          <p style="font-size: larger; text-align: justify;" class="col-lg-10 col-md-12 col-sm-12">
            At Rooh ul Quran Academy, we believe the Quran is not just a book to be read, but a divine guidance to be
            lived.
            Our mission is to make Quran learning accessible for everyone across the world through professional online
            Quran classes with qualified teachers.
          </p>

          <a href="{{ route('home.contact.us') }}" class="btn-get-started text-bold">Free Trial</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about-us" class="section about-us about-refined py-5">
  <div class="container">

    {{-- About Content --}}
    <div class="row gy-5 align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="about-media">
          <img src="{{ asset('assets/img/ai/about.webp') }}"
            alt="About Rooh ul Quran Academy" loading="lazy">
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left">
        <h4 class="fw-semibold">Who We Are</h4>
        <p class="text-muted">
          Since our beginning, we have helped hundreds of students – children, adults, and professionals – learn Quran
          with Tajweed, memorize the Holy Quran, and understand its deeper meanings through Tafsir.
        </p>
        <ul class="about-checklist">
          <li><i class="bi bi-check-circle-fill"></i> Learn Quran Online with Tajweed</li>
          <li><i class="bi bi-check-circle-fill"></i> Online Noorani Qaida Course (for beginners and kids)</li>
          <li><i class="bi bi-check-circle-fill"></i> Online Tajweed Course (for fluency and accuracy)</li>
          <li><i class="bi bi-check-circle-fill"></i> Online Quran Memorization Course (Hifz)</li>
          <li><i class="bi bi-check-circle-fill"></i> Online Tafsir Course (to understand the Quran deeply)</li>
          <li><i class="bi bi-check-circle-fill"></i> Online Ijazah Course (for advanced students)</li>
        </ul>
      </div>
    </div>

    {{-- Mission Section --}}
    <div class="mission-band" data-aos="fade-up">
      <div class="row g-0 align-items-stretch">
        <div class="col-lg-6 order-2 order-lg-1">
          <div class="mission-copy">
            <h4 class="fw-semibold">Our Mission</h4>
            <p class="text-muted">Our mission is simple:</p>
            <ol>
              <li>Spread authentic Quran education worldwide.</li>
              <li>Provide flexible online classes for kids and adults.</li>
              <li>Empower students with Tajweed, Tafsir, and memorization.</li>
              <li>Create future teachers and Huffaz who can serve the Ummah.</li>
            </ol>
            <p class="text-muted">
              We want to remove barriers of distance, time, and accessibility, so every Muslim can learn the Quran at their
              own pace.
            </p>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <div class="mission-media">
            <img src="{{ asset('assets/img/ai/our-mission.webp') }}" loading="lazy"
              alt="quran academy mission">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Courses + Testimonials after Mission --}}
@include('layouts.partials.featured-courses')
@include('layouts.testimonial')

<section id="about-why" class="section about-us about-refined py-5">
  <div class="container">
    {{-- Why Choose Us --}}
    <div class="why-section" style="margin-top: 0;">
      <div class="row">
        <div class="col-12 text-center" data-aos="fade-up">
          <h4 class="fw-semibold mb-4">Why Choose Rooh ul Quran Academy?</h4>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-person-check"></i></div>
            <h6 class="fw-bold">Qualified Teachers</h6>
            <p class="small">Male and female Quran teachers with certification in Quranic studies.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-clock"></i></div>
            <h6 class="fw-bold">Flexible Timings</h6>
            <p class="small">We offer flexible schedules to suit international students across time zones.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-currency-dollar"></i></div>
            <h6 class="fw-bold">Affordable Fees</h6>
            <p class="small">Affordable plans with free trial class for every new student.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-people"></i></div>
            <h6 class="fw-bold">One-on-One Sessions</h6>
            <p class="small">Interactive classes that give full attention and guidance to each student.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-book"></i></div>
            <h6 class="fw-bold">Structured Courses</h6>
            <p class="small">Courses designed step-by-step for beginners, kids, and advanced learners.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="500">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-globe"></i></div>
            <h6 class="fw-bold">Global Reach</h6>
            <p class="small">Trusted by students from USA, UK, Canada, Australia, and Middle East.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

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
            How do online Quran classes work?
          </button>
        </h2>
        <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-heading-1"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We provide <strong>live one-on-one classes</strong> through Zoom or Skype with professional Quran teachers.
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-heading-2">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
            Can kids also join?
          </button>
        </h2>
        <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we have <strong>online Quran classes for kids</strong>, starting from Noorani Qaida to Tajweed and
            Hifz.
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-heading-3">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
            Do you have female teachers for sisters?
          </button>
        </h2>
        <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we have <strong>certified female Quran tutors</strong> available for women and girls.
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-heading-4">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
            What is the class timing?
          </button>
        </h2>
        <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We offer <strong>flexible timings</strong> to suit students in USA, UK, Canada, Australia, and Middle East.
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-heading-5">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
            How can I start?
          </button>
        </h2>
        <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Simply <strong>register on our website</strong> for a free trial class. Our team will assign you a teacher
            and schedule your first session.
          </div>
        </div>
      </div>

    </div>
  </div>

  <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "url": "https://roohulquranacademy.com/about",
  "name": "About Rooh Ul Quran Academy",
  "description": "Rooh Ul Quran Academy is an online Quran learning platform offering Tajweed, Noorani Qaida, Hifz, Tafsir, and Ijazah courses with certified male and female teachers. Our mission is to make Quran learning accessible worldwide with flexible timings and affordable fees.",
  "publisher": {
    "@type": "EducationalOrganization",
    "name": "Rooh Ul Quran Academy",
    "url": "https://roohulquranacademy.com/"
  },
  "mainEntity": {
    "@type": "Organization",
    "name": "Rooh Ul Quran Academy",
    "description": "Dedicated to spreading authentic Quran education through online classes for kids and adults worldwide.",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+92-334-4066429",
      "contactType": "Customer Support",
      "availableLanguage": ["English", "Urdu", "Arabic"]
    }
  }
}
  </script>

</section>

@endsection

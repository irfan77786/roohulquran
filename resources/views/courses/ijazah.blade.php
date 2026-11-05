@extends('main')

@section('title', 'Online Ijazah Course - Quran Certification | Rooh Ul Quran')
@section('meta_description' , 'Earn your Quran Ijazah online with Rooh Ul Quran Academy. Certified scholars assess
recitation, memorization & Tafsir skills. Free trial available.')
@section('meta_keywords' , 'online ijazah course, quran ijazah, ijazah certificate online, quran certification,
sanad quran, ijazah in tajweed, online quran ijazah')

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
      display: none;
    }

    #hero .mobile-image {
      display: block;
      width: 100%;
    }

    #hero {
      text-align: center;
      padding: 0px 0px;
      min-height: 500px;
    }

    .hero-heading {
      font-size: 2.2rem;
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
</style>
@include('layouts.partials.hero-banner-styles')
@include('layouts.partials.hero-banner', [
    'heroTitle' => 'Online Ijazah Course',
    'heroSubtitle' => 'Begin a focused journey into advanced Quranic sciences and earn the respected Ijazah certification with scholars at Rooh Ul Quran Academy.',
    'heroFeatures' => [
        'Advanced studies in Tajweed, Tafsir & Hifz',
        'One-to-one sessions with Ijazah-holding scholars',
        'Flexible online format for every time zone',
        'Start with a free trial class',
    ],
    'heroCtaText' => 'Free Trial',
    'heroCtaUrl' => route('home.contact.us'),
])

<section id="course-details" class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="card mb-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Online Ijazah Course</h4>
            <p class="card-text">
              Welcome to Rooh Ul Quran Academy’s Online Ijazah Course, an invitation to deepen your mastery of Quranic
              sciences and work toward the respected Ijazah certification. This program is designed for learners who aim
              to become trusted voices in Quranic education and to develop a thorough understanding of the Book of
              Allah. Join us on a path of learning, dedication, and formal recognition.
            </p>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">The Core of Our Online Ijazah Course</h4>
            <p class="card-text">
              Our Online Ijazah Course is a specialized advanced program that goes beyond basic reading. It is built to
              prepare capable students who may later teach and share the Quran with confidence. Traditionally, Ijazah
              means permission or authorization, ensuring authentic knowledge is passed from teacher to student. This
              online track honors that scholarly tradition while fitting modern schedules.
            </p>
          </div>
        </div>

        <div class="card mb-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Key Features of the Online Ijazah Course</h4>

            <h5 class="fw-bold mt-3" style="color: #122F2A; font-size: 1.05rem;">In-Depth Quranic Studies</h5>
            <p class="card-text">
              Students engage with advanced Quranic sciences, including Tafsir (exegesis), Tajweed (recitation rules),
              and Hifz (memorization). Under experienced teachers, you explore meanings, details, and nuances of
              Quranic verses with care and clarity.
            </p>

            <h5 class="fw-bold mt-3" style="color: #122F2A; font-size: 1.05rem;">Strong Recitation &amp; Pronunciation</h5>
            <p class="card-text">
              A central focus is refining Quranic recitation through Tajweed. Learners practice pronunciation,
              intonation, and the rules that protect the beauty and accuracy of every ayah.
            </p>

            <h5 class="fw-bold mt-3" style="color: #122F2A; font-size: 1.05rem;">Thorough Tafsir Study</h5>
            <p class="card-text">
              Through structured Tafsir study, students examine linguistic, historical, and contextual layers of the
              verses. Classical and contemporary references help strengthen interpretive skill and understanding.
            </p>

            <h5 class="fw-bold mt-3" style="color: #122F2A; font-size: 1.05rem;">Hifz: Memorizing the Quran</h5>
            <p class="card-text">
              According to ability and goals, students memorize selected portions or pursue fuller memorization. Hifz
              remains a vital part of the journey, building a closer bond with the Quranic text.
            </p>

            <h5 class="fw-bold mt-3" style="color: #122F2A; font-size: 1.05rem;">One-to-One Guidance from Accredited Scholars</h5>
            <p class="card-text mb-0">
              Personalized sessions are led by qualified scholars who themselves hold Ijazah. Direct instruction from
              experienced teachers helps preserve authenticity and quality throughout your preparation.
            </p>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Why Choose Our Online Ijazah Course?</h4>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span><strong>Qualified scholars:</strong> Taught by recognized instructors who hold Ijazah in Quranic
                  sciences and guide you with experience and care.</span>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span><strong>Personalized learning:</strong> The one-to-one model matches your pace, with tailored
                  feedback and clear direction at every stage.</span>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span><strong>Flexible online format:</strong> Study from home with schedules that work across different
                  time zones and routines.</span>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span><strong>Well-rounded curriculum:</strong> Broad coverage of advanced Quranic sciences so graduates
                  leave with a solid, balanced understanding.</span>
              </li>
              <li class="d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span><strong>Respected certification:</strong> Completing Ijazah preparation supports your credibility
                  as you teach and share Quranic knowledge more widely.</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="card shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Begin Your Ijazah Journey</h4>
            <p class="card-text mb-0">
              Enroll in Rooh Ul Quran Academy’s Online Ijazah Course and take a meaningful step toward mastering the
              sciences of the Quran. Whether your aim is to become a capable teacher, a dedicated scholar, or to help
              preserve and pass on Quranic knowledge, this course offers a transformative learning experience. Start
              your Online Ijazah Course with Rooh Ul Quran Academy today, and uphold the honored tradition of Ijazah.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12">
        <div class="card shadow-sm mb-4" style="border: none; border-radius: 10px; background-color: #122F2A;">
          <div class="card-body text-center">
            <div class="badge bg-dark text-white mb-3" style="font-size: 0.9rem;">Starting From</div>
            <div class="container d-flex flex-column align-items-center">
              <h3 style="color: #36c47d; font-weight: bold; margin-bottom: 0.3rem;">0 USD</h3>
              <h6 style="color: #ccc; font-weight: bold; text-decoration: line-through; font-size: 1rem;">80 USD</h6>
            </div>
            <p class="text-white mt-3">Begin Your Spiritual Journey with a Free Trial Class</p>
            <a href="{{ route('home.contact.us') }}" class="btn btn-danger rounded-pill px-4"
              style="background-color: #e74c3c; border: none;">Free Trial</a>
          </div>
        </div>

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
                <span><strong>Instructors:</strong> M/F</span>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-award me-2" style="font-size: 1.5rem; color: #122F2A;"></i>
                <span><strong>Credential:</strong> Ijazah</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="card shadow-sm" style="border: none; border-radius: 10px; background-color: #000; color: #fff;">
          <div class="card-body text-center">
            <p>If you have any further query then you can contact our helpline:</p>
            <h5 class="mb-0" style="color: #36c47d !important">Call Us</h5>
            <p style="font-size: 1.25rem; font-weight: bold;">+92 334 4066429</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.youtube')

@include('layouts.partials.featured-courses')

<section class="py-5 bg-light">
  <div class="container">
    <h3 class="fw-bold text-center mb-4">Frequently Asked Questions (FAQs)</h3>
    <div class="accordion" id="faqAccordion">

      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading1">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
            Who can join the Online Ijazah Course?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Advanced students who already recite well (and, for Hifz tracks, have strong memorization) may join after a
            readiness assessment with our scholars.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading2">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
            What types of Ijazah do you offer?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Pathways typically cover Quranic recitation with Tajweed, memorization (Hifz), and selected Tafsir tracks,
            depending on eligibility and teacher availability.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading3">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
            How long does Ijazah preparation take?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Duration varies by track and current level. Many students need several months of focused preparation before
            formal evaluation.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading4">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
            Are female teachers available for sisters?
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, qualified female Quran tutors are available for sisters who prefer them.
          </div>
        </div>
      </div>

    </div>
  </div>

  <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Course",
  "url": "https://roohulquranacademy.com/online-ijazah-course",
  "name": "Online Ijazah Course",
  "description": "Prepare for Quranic Ijazah certification in recitation, memorization, or Tafsir with certified scholars at Rooh Ul Quran Academy. One-on-one online classes, flexible timings, and a free trial are available.",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Rooh Ul Quran Academy",
    "url": "https://roohulquranacademy.com"
  },
  "audience": {
    "@type": "Audience",
    "audienceType": ["Advanced students", "Hifz graduates", "Tajweed specialists"]
  }
  @include('layouts.partials.course-schema-extras')
}
  </script>

</section>

@include('layouts.testimonial')
@include('layouts.partials.trial-form-scripts')

@endsection

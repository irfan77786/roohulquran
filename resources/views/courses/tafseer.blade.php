@extends('main')

@section('title', 'Quran Reading with Tajweed - Online Classes by Rooh Ul Quran Academy')

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
      padding: 100px 20px;
      /* More padding on mobile */
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
  <img src="assets/img/hero-bg-3.webp" alt="" class="desktop-image" data-aos="fade-in">
  <img src="assets/img/hero-bg-1.webp" alt="" class="mobile-image" data-aos="fade-in">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-7 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
        <h2 class="hero-heading">Online Tafsir Course</h2>
        <p class="mt-3" style="font-size: 18px; line-height: 1.8rem;">Our teachers explain Tafsir in an
          easy-to-understand way, making it suitable for kids <br> adults, and new learners.
        </p>
        <a href="{{ route('home.contact.us') }}" class="btn-get-started text-bold">Free Trial</a>
      </div>
    </div>
  </div>
</section>
<!-- /Hero Section -->

<section id="course-details" class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <div class="row">
      <!-- Left Side -->
      <div class="col-lg-8 col-md-12">
        <!-- Card 1 -->
        <div class="card mb-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">Online Tafsir Course</h4>
            <p class="card-text">
              Understand the true meanings of the Quran with our Online Tafsir Course. This program is designed for
              students of all ages who want to go beyond recitation and explore the depth of Allah’s words. With expert
              online Quran teachers, you will learn Tafsir step by step, covering the linguistic, historical, and
              spiritual context of the Quran.
            </p>
          </div>
        </div>



        <!-- Card 3 -->
        <div class="card mt-4 shadow-sm">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">What You Will Learn</h4>
            <ul class="list-unstyled">
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Word-to-word translation of the Quran</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Explanation of verses with authentic Tafsir references</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Context and reasons for revelations (Asbab al-Nuzul)</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Key lessons for personal development and spirituality</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Application of Quranic guidance in modern life</span>
              </li>
              <li class="d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Opportunities to ask questions and interact with teachers</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="card mt-4 shadow-sm" style="border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">Why Choose Our Online Tafsir Course?</h4>
            <ul class="list-unstyled">
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Certified Quran scholars and Tafsir experts</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>One-to-one and group classes available</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Flexible scheduling for students worldwide</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Separate male and female Quran teachers available</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Affordable fee with free trial classes</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Step-by-step study from basic Tafsir to advanced levels</span>
              </li>
              <li class="d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <span>Strong focus on practical lessons from the Quran</span>
              </li>
            </ul>
            <p class="mt-2">
              We also recommend combining Tafsir with our Online Quran Memorization Course for those who want to not
              only memorize but also understand the Quran. Beginners can also benefit from our Online Noorani Qaida
              Course to improve reading skills before starting Tafsir.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">Deepen Your Knowledge of the Quran</h4>
            <p>
              Reciting the Quran is a great blessing, but understanding its meanings is equally important. At Roohul
              Quran Academy, our Online Tafsir Course helps students discover the message of the Quran in a simple and
              structured way.
            </p>
            <ul class="list-unstyled mt-3">
              <li class="mb-2">Learn the translation and explanation (Tafsir) of each Surah.</li>
              <li class="mb-2">Understand the historical background of revelations (Asbab al-Nuzul).</li>
              <li class="mb-2">Study important lessons, rulings, and wisdom from the Quran.</li>
              <li class="mb-2">Develop a strong spiritual connection with Allah through the Quran.</li>
              <li>Get guidance on applying Quranic teachings in daily life.</li>
            </ul>
          </div>
        </div>

      </div>

      <!-- Right Side -->
      <div class="col-lg-4 col-md-12">
        <!-- Pricing -->
        <div class="card shadow-sm mb-4" style="border: none; border-radius: 10px; background-color: #44137c;">
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

        <!-- Sessions -->
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
                <span><strong>Instructors:</strong> M/F</span>
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-person-check me-2" style="font-size: 1.5rem; color: #44137c;"></i>
                <span><strong>Students:</strong> 100+</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Contact -->
        <div class="card shadow-sm" style="border: none; border-radius: 10px; background-color: #000; color: #fff;">
          <div class="card-body text-center">
            <p>If you have any further query then you can contact our helpline:</p>
            <h5 class="mb-0" style="color: #36c47d !important">Call Us</h5>
            <p style="font-size: 1.25rem; font-weight: bold;">+92 343 8078216</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.youtube')

<!-- Courses Section -->
<section id="courses" class="courses section" style="background-color: #fdf1dd; padding: 10px 0;">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    {{-- <h2 class="text-black">Highlighted Program</h2> --}}
    <p style="color:#44137c;">Our Featured Courses</p>
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
              sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 25vw" alt="memorize quran" loading="lazy"
              width="400" height="260" />

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
              sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 33vw" alt="noorani qaidah class" loading="lazy"
              width="400" height="260" />

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
              sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 33vw" alt="Quran reading with Tajweed"
              loading="lazy" width="400" height="260" />

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
              sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 33vw" alt="Tafseer ul Quran course"
              loading="lazy" width="400" height="260" />

          </div>
          <div class="course-info">
            {{-- <div class="meta">
              <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
              <span><i class="bi bi-clock"></i> 24/7 Available</span>
            </div> --}}
            <h3 class="title"><a href="{{ route('kids.classes') }}">Online Quran Classes for Kids</a></h3>
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

<section class="py-5 bg-light">
  <div class="container">
    <h3 class="fw-bold text-center mb-4">Frequently Asked Questions (FAQs)</h3>
    <div class="accordion" id="faqAccordion">

      <!-- Q1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading1">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
            Who can join the Online Tafsir Course?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Anyone who wants to understand the Quran in depth — students, professionals, adults, or children — is
            welcome to join.
          </div>
        </div>
      </div>

      <!-- Q2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading2">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
            Do I need to know Arabic before joining?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            No, you don’t need prior knowledge of Arabic. Our teachers explain Tafsir in English and Urdu with simple
            translations for easy understanding.
          </div>
        </div>
      </div>

      <!-- Q3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading3">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
            How long does the course take?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The duration depends on the number of Surahs you wish to study. A complete Tafsir of the Quran usually takes
            1–2 years.
          </div>
        </div>
      </div>

      <!-- Q4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading4">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
            Are female teachers available?
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we provide qualified female Quran tutors for sisters and children who prefer them.
          </div>
        </div>
      </div>

      <!-- Q5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading5">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
            Will I get study material?
          </button>
        </h2>
        <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, we provide notes, references, and authentic Tafsir book extracts to support your learning journey.
          </div>
        </div>
      </div>

    </div>
  </div>

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "url": "https://roohulquranacademy.com/tafseer-course-online",
  "name": "Tafseer Course Online",
  "description": "Learn Tafseer ul Quran online with Rooh Ul Quran Academy. From foundation to advanced level, this course helps students understand the deeper meaning of Quranic verses with historical and contemporary context. One-on-one classes, flexible timings, and a free trial are available.",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Rooh Ul Quran Academy",
    "url": "https://roohulquranacademy.com"
  },
  "audience": {
    "@type": "Audience",
    "audienceType": ["Beginners", "Adults", "Students with prior Islamic knowledge"]
  }
}
</script>

</section>

@include('layouts.testimonial')
@endsection
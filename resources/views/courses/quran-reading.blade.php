@extends('main')

@section('title', 'Quran Reading with Tajweed - Online Quran Classes')
@section('meta_description' , 'Learn Quran reading with Tajweed online — improve pronunciation, fluency, and recitation with expert Quran tutors. ')
@section('meta_keywords' , 'quran reading with tajweed, online quran classes, tajweed course, quran pronunciation, learn quran online, quran recitation classes, islamic learning')
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
  <img src="assets/img/hero-bg-3.webp" alt="quran reading course" class="desktop-image" data-aos="fade-in">


  <img src="assets/img/hero-bg-1.webp" alt="online quran reading course" class="mobile-image" data-aos="fade-in">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-7 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
        <h1 class="hero-heading"style="font-size: 2.6rem !important"><b>Quran </b>Reading With <br> Tajweed Course</h1>
        <p class="mt-3" style="font-size: 18px; line-height: 1.8rem;">Our Online Quran Classes are structured and
          student-focused making learning Tajweed simple and achievable.
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
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-1">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-1">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"
                required>
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
            <button type="submit" class="w-100 p-2 rounded-2" style="background-color: #44137c;color:white">Get Free
              Trial Class</button>
          </form>
        </div>
      </div> --}}
    </div>
  </div>
</section><!-- /Hero Section -->



<section id="course-details" class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <div class="row">
      <!-- Left Side: Two Cards -->
      <div class="col-lg-8 col-md-12">
        <!-- Card 1: Summary -->
        <div class="card mb-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">Summary</h4>
            <p class="card-text">
              Learn the Quran with perfection and beauty through our Online Tajweed Course. Designed for kids, adults,
              and beginners, this course helps you master the rules of Tajweed with step-by-step guidance from certified
              online Quran teachers. Build fluency, correct your pronunciation, and recite the Quran as it was revealed.
            </p>
            <p class="card-text">
              At Roohul Quran Academy, our mission is to make Quran learning easy and effective for every student.
              Tajweed is the science of reciting the Quran correctly, ensuring that each letter is pronounced from its
              proper point of articulation (Makharij). Without Tajweed, the meaning and beauty of Quranic recitation can
              change.
            </p>
            <p class="card-text">
              Whether you are just starting with Noorani Qaida Online or already know basic Quran reading, this course
              will elevate your recitation skills.
            </p>
          </div>
        </div>

        <!-- Card 2: What You Will Learn -->
        <div class="card shadow-sm" style="border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">What You Will Learn in the Online Tajweed
              Course</h4>
            <ul class="list-unstyled">
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Proper articulation of Arabic alphabets (Makharij)</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Mastery of Tajweed rules for flawless recitation</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Practical exercises with one-to-one guidance</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Fluency and accuracy in Tilawat (recitation)</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Confidence to recite in Salah with Tajweed</p>
              </li>
              <li class="d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Choice of male or female Quran teacher based on preference</p>
              </li>
            </ul>
          </div>
        </div>

        <!-- Card 3: Why Choose Us -->
        <div class="card shadow-sm mb-2" style="border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">Why Choose Our Online Tajweed Course?</h4>
            <ul class="list-unstyled">
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>One-to-one interactive online classes</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Certified Tajweed experts as teachers</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Flexible timings for kids, adults, and working professionals</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Affordable monthly fee with free trial classes</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Progress tracking and regular feedback</p>
              </li>
              <li class=" d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Available worldwide for students of all ages</p>
              </li>
              <li class="d-flex align-items-start"><span class="me-2" style="color: #36c47d;">✔</span>
                <p>Both male and female Quran tutors available</p>
              </li>
            </ul>
            <p class="card-text mt-3">
              If you are just starting your Quran journey, we recommend beginning with our Online Noorani Qaida Course.
              Once you gain a strong foundation, moving into Online Tajweed Classes becomes much easier. For those who
              want to advance further, we also offer Online Quran Memorization Course and Online Tafsir Course.
            </p>
          </div>
        </div>

        <!-- Card 4: Getting Started -->
        <div class="card mt-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">Getting Started</h4>
            <p class="card-text">
              Don’t let your busy routine prevent you from learning the Quran. Start this amazing spiritual journey
              today from the comfort of your home. Grab the free trial session immediately to evaluate our platform’s
              syllabus, instructors, teaching styles, flexibility, and reliability.
            </p>
          </div>
        </div>
      </div>

      <!-- Right Side: Three Vertical Cards -->
      <div class="col-lg-4 col-md-12">
        <!-- Card 1: Starting From -->
        <div class="card shadow-sm" style="border: none; border-radius: 10px; background-color: #44137c;">
          <div class="card-body text-center">
            <div class="badge bg-dark text-white mb-3" style="font-size: 0.9rem;">Starting From</div>
            <div class="container d-flex flex-column align-items-center">
              <h3 style="color: #36c47d; font-weight: bold; margin-bottom: 0.3rem;">0 USD</h3>
              <h6 style="color: #ccc; font-weight: bold; text-decoration: line-through; font-size: 1rem;">80 USD</h6>
            </div>
            <p class="text-white mt-3">Quran Reading with Tajweed with expert guidance and progress tracking.</p>
            <a href="{{ route('home.contact.us') }}" class="btn btn-danger rounded-pill px-4"
              style="background-color: #e74c3c; border: none;">Free Trial</a>
          </div>
        </div>

        <!-- Card 2: Sessions -->
        <div class="card mb-4 shadow-sm" style="border: none; border-radius: 10px; background-color: #fff;">
          <div class="card-body">
            <ul class="list-unstyled">
              <li class="mb-3 d-flex align-items-center"><i class="bi bi-person-video me-2"
                  style="font-size: 1.5rem; color: #44137c;"></i><span><strong>Sessions:</strong> 1 on 1</span></li>
              <li class="mb-3 d-flex align-items-center"><i class="bi bi-clock me-2"
                  style="font-size: 1.5rem; color: #44137c;"></i><span><strong>Availability:</strong> 24/7</span></li>
              <li class="mb-3 d-flex align-items-center"><i class="bi bi-people me-2"
                  style="font-size: 1.5rem; color: #44137c;"></i><span><strong>Instructors:</strong> M/F</span></li>
              <li class="d-flex align-items-center"><i class="bi bi-person-check me-2"
                  style="font-size: 1.5rem; color: #44137c;"></i><span><strong>Students:</strong> 100+</span></li>
            </ul>
          </div>
        </div>

        <!-- Card 3: Course Overview -->
        <div class="card mb-4 shadow-sm" style="border: none; border-radius: 10px; background-color: #fff8f0;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">Course Overview</h4>
            <ul class="list-unstyled">
              <li class="mb-2 d-flex align-items-start"><i class="bi bi-check-circle-fill me-2"
                  style="color: #36c47d;"></i><span>Level 1: Mastering the Basics</span></li>
              <li class="mb-2 d-flex align-items-start"><i class="bi bi-check-circle-fill me-2"
                  style="color: #36c47d;"></i><span>Level 2: Building Tajweed Foundations</span></li>
              <li class="mb-2 d-flex align-items-start"><i class="bi bi-check-circle-fill me-2"
                  style="color: #36c47d;"></i><span>Level 3: Advanced Rule Application</span></li>
              <li class="d-flex align-items-start"><i class="bi bi-check-circle-fill me-2"
                  style="color: #36c47d;"></i><span>Level 4: Becoming a Certified Reciter</span></li>
            </ul>
          </div>
        </div>

        <!-- Card 4: Contact -->
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

<section id="faq-tajweed" class="py-5 bg-light">
  <div class="container" data-aos="fade-up">
    <!-- Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color:#44137c;">Tajweed Course – Frequently Asked Questions</h2>
      <p class="text-muted">Find answers about our Online Tajweed Course for kids and adults.</p>
    </div>

    <!-- FAQ Accordion -->
    <div class="accordion" id="faqTajweedAccordion">

      <!-- Item 1 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-tajweed-heading-1">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-tajweed-collapse-1" aria-expanded="false" aria-controls="faq-tajweed-collapse-1">
            Who can join the Online Tajweed Course?
          </button>
        </h2>
        <div id="faq-tajweed-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-tajweed-heading-1"
          data-bs-parent="#faqTajweedAccordion">
          <div class="accordion-body">
            Anyone who wants to improve their <strong>Quran recitation with proper Tajweed rules</strong> — kids,
            adults, or beginners.
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-tajweed-heading-2">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-tajweed-collapse-2" aria-expanded="false" aria-controls="faq-tajweed-collapse-2">
            Do I need to know Arabic before starting?
          </button>
        </h2>
        <div id="faq-tajweed-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-tajweed-heading-2"
          data-bs-parent="#faqTajweedAccordion">
          <div class="accordion-body">
            No, beginners can start from <strong>Noorani Qaida Online</strong> and then gradually move into Tajweed
            lessons.
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-tajweed-heading-3">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-tajweed-collapse-3" aria-expanded="false" aria-controls="faq-tajweed-collapse-3">
            How long does it take to master Tajweed?
          </button>
        </h2>
        <div id="faq-tajweed-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-tajweed-heading-3"
          data-bs-parent="#faqTajweedAccordion">
          <div class="accordion-body">
            On average, <strong>6–12 months</strong> of regular classes are enough, depending on your pace.
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-tajweed-heading-4">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-tajweed-collapse-4" aria-expanded="false" aria-controls="faq-tajweed-collapse-4">
            Can I choose a female Quran tutor?
          </button>
        </h2>
        <div id="faq-tajweed-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-tajweed-heading-4"
          data-bs-parent="#faqTajweedAccordion">
          <div class="accordion-body">
            Yes, we provide <strong>experienced female Quran teachers</strong> for sisters and children.
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="accordion-item mb-3 shadow-sm rounded">
        <h2 class="accordion-header" id="faq-tajweed-heading-5">
          <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
            data-bs-target="#faq-tajweed-collapse-5" aria-expanded="false" aria-controls="faq-tajweed-collapse-5">
            Are trial classes available?
          </button>
        </h2>
        <div id="faq-tajweed-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-tajweed-heading-5"
          data-bs-parent="#faqTajweedAccordion">
          <div class="accordion-body">
            Yes, you can join our <strong>free trial classes</strong> before registration.
          </div>
        </div>
      </div>

    </div>
  </div>

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "url": "https://roohulquranacademy.com/quran-reading-with-tajweed",
  "name": "Quran Reading with Tajweed Online Course",
  "description": "Learn Quran reading with Tajweed through structured levels from beginner to advanced. One-on-one sessions with certified male and female instructors are available 24/7. Includes personalized assessments, progress tracking, and a free trial class.",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Rooh Ul Quran Academy",
    "url": "https://roohulquranacademy.com"
  },
  "audience": {
    "@type": "Audience",
    "audienceType": ["Kids", "Adults", "Beginners", "Advanced Learners"]
  }
}
</script>

</section>
@include('layouts.testimonial')
@endsection
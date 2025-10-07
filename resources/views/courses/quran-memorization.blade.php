@extends('main')

@section('title', 'Memorize Quran Online - Hifz Classes for Kids & Adults')

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
  <img src="assets/img/hero-bg-3.webp" alt="quran memorization online" class="desktop-image" data-aos="fade-in">


  <img src="assets/img/hero-bg-1.webp" alt="online memorize quran" class="mobile-image" data-aos="fade-in">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-7 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
        <h2 class="hero-heading" style="font-size: 2.6rem !important"><b>Quran </b>Memorization <br> Course Online</h2>
        <ul class="list-unstyled text-start mt-3 hero-features">
          <li class="d-flex align-items-start mb-2">
            <span class="me-2 text-white fw-bold">✔</span>
            Start Where You Are , Learn at Your Pace
          </li>
          <li class="d-flex align-items-start mb-2">
            <span class="me-2 text-white fw-bold">✔</span>
            Even If Yuo Can't Read Arabic Yet
          </li>
          <li class="d-flex align-items-start mb-2">
            <span class="me-2 text-white fw-bold">✔</span>
            Start Your Journey With Free Trial Class
          </li>
        </ul>
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
              Our Quran memorization course is designed for beginners who can’t read Arabic and those proficient in
              basic Arabic reading. We offer customized learning based on students’ mental capabilities and learning
              attitudes. Our expert guidance and interactive sessions ensure you retain whatever you learn. Our
              user-friendly platform, practical approaches, and transparent progress tracking make your Quran learning
              easy, smooth, and effective.
            </p>
          </div>
        </div>

        <!-- Card 2: What Makes This Course Different -->
        <div class="card shadow-sm" style="border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">What Makes This Course Different?</h4>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>We take a quick test to determine your reading level, provide lessons that match your skills, and
                  ensure you move forward at a speed that works for you.</p>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>We don’t just make you memorize; we boost your memorization fluency through regular revision classes,
                  ensuring you retain lessons for the long run.</p>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>Our class procedure is simple and user-friendly and you can join with just one click find all your
                  lessons in one place and track them easily on any device.</p>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>Our staff is highly certified and provides you with personal attention when you need help providing
                  satisfactory answers and growing you professionally.</p>
              </li>
              <li class="d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>We track your skills to improve each day, making you complete lessons and earn achievements so you
                  can celebrate every step forward.</p>
              </li>
            </ul>
          </div>
        </div>
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
            <p class="text-white mt-3">Quran memorization with expert guidance and progress tracking.
            </p>
            <a href="{{ route('home.contact.us') }}" class="btn btn-danger rounded-pill px-4"
              style="background-color: #e74c3c; border: none;">Free
              Trial</a>
          </div>
        </div>


        <!-- Card 2: Sessions -->
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

        <!-- Card 3: Course Overview -->
        <div class="card mb-4 shadow-sm" style="border: none; border-radius: 10px; background-color: #fff8f0;">
          <div class="card-body">
            <h4 class="card-title" style="color: #44137c; font-weight: bold;">Course Overview</h4>
            <ul class="list-unstyled">
              <li class="mb-2 d-flex align-items-start">
                <i class="bi bi-check-circle-fill me-2" style="color: #36c47d;"></i>
                <span>Level 1: Mastering the Basics</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <i class="bi bi-check-circle-fill me-2" style="color: #36c47d;"></i>
                <span>Level 2: Building Tajweed Foundations</span>
              </li>
              <li class="mb-2 d-flex align-items-start">
                <i class="bi bi-check-circle-fill me-2" style="color: #36c47d;"></i>
                <span>Level 3: Advanced Rule Application</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill me-2" style="color: #36c47d;"></i>
                <span>Level 4: Becoming a Certified Reciter</span>
              </li>
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
<section id="courses" class="courses section" style="background-color: #fdf1dd; padding: 50px 0;">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2 class="text-black">Highlighted Program</h2>
    <p class="text-black">Our <b>Featured</b> Courses</p>
    <h4 class="col-lg-8 mx-auto text-black">
      Explore our expertly designed Quran courses, including Tajweed, Hifz, and Quran translation. Each course is
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
              sizes="(max-width: 480px) 100vw, (max-width: 768px) 50vw, 25vw" alt="memorize quran" loading="lazy"
              width="400" height="260" />

          </div>
          <div class="course-info">
            <div class="meta">
              <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
              <span><i class="bi bi-clock"></i> 24/7 Available</span>
            </div>
            <h3 class="title"><a href="{{ route('quran.memorization') }}">Memorize Quran Online</a></h3>
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
            <div class="meta">
              <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
              <span><i class="bi bi-clock"></i> 24/7 Available</span>
            </div>
            <h3 class="title"><a href="{{ route('quran.recitation') }}">Qaidah Reading</a></h3>
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
            <div class="meta">
              <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
              <span><i class="bi bi-clock"></i> 24/7 Available</span>
            </div>
            <h3 class="title"><a href="{{ route('quran.tajweed') }}">Quran Reading with Tajweed</a></h3>
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

        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "url": "https://roohulquranacademy.com/memorize-quran-online",
  "name": "Memorize Quran Online - Hifz Classes",
  "description": "Join our Quran memorization (Hifz) course designed for kids and adults. We provide one-on-one online classes, certified male and female tutors, progress tracking, revision sessions, and flexible timings. Start your spiritual journey with a free trial class.",
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


    </section><!-- /Courses Section -->


@include('layouts.testimonial')
@endsection
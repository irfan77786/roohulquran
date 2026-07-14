@extends('main')

@section('title', 'Memorize Quran Online - Hifz Classes for Kids & Adults')
@section('meta_description' , 'Memorize the Quran online with Rooh Ul Quran Academy — live one-on-one Hifz classes,
flexible schedule & expert tutors')
@section('meta_keywords' , 'memorize quran online, hifz classes online, online quran memorization, hifz course, memorize
quran with tajweed, quran hifz academy, online hifz program')

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
    'heroTitle' => 'Quran Memorization Course Online',
    'heroSubtitle' => 'Begin your Hifz journey with personalized online memorization classes designed for every level.',
    'heroFeatures' => [
        'Start Where You Are, Learn at Your Pace',
        'Even If You Can\'t Read Arabic Yet',
        'Start Your Journey With Free Trial Class',
    ],
    'heroCtaText' => 'Free Trial',
    'heroCtaUrl' => route('home.contact.us'),
])

<section id="course-details" class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <div class="row">
      <!-- Left Side: Two Cards -->
      <div class="col-lg-8 col-md-12">
        <!-- Card 1: Summary -->
        <div class="card mb-4 shadow-sm" style="background-color: #fff8e6; border: none; border-radius: 10px;">
          <div class="card-body">
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Summary</h4>
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
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">What Makes This Course Different?</h4>
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
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Getting Started</h4>
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
        <div class="card shadow-sm" style="border: none; border-radius: 10px; background-color: #122F2A;">
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
                <i class="bi bi-person-check me-2" style="font-size: 1.5rem; color: #122F2A;"></i>
                <span><strong>Students:</strong> 100+</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Card 3: Course Overview -->
        <div class="card mb-4 shadow-sm" style="border: none; border-radius: 10px; background-color: #fff8f0;">
          <div class="card-body">
            <h4 class="card-title" style="color: #122F2A; font-weight: bold;">Course Overview</h4>
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
            <p style="font-size: 1.25rem; font-weight: bold;">+92 334 4066429</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.youtube')



@include('layouts.partials.featured-courses')



@include('layouts.testimonial')
@include('layouts.partials.trial-form-scripts')

@endsection
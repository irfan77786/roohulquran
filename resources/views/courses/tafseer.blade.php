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
    padding: 100px 20px; /* More padding on mobile */
  }

  .hero-heading {
    font-size: 2.2rem; /* Increase heading size on mobile */
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
  <img src="assets/img/hero-bg-3.svg" alt="" class="desktop-image" data-aos="fade-in">


  <img src="assets/img/hero-bg-1.svg" alt="" class="mobile-image" data-aos="fade-in">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-7 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
        <h2 class="hero-heading"><b>Tafseer </b>Course Online <br> By Roohul Quran</h2>
        <ul class="mt-4 hero-subtext" style="font-size: 20px;  line-height: 2rem;">
          <li>Quranic Interpretation From Fondation to Advance Level</li>
          <li>Discover the Deeper Meaning Behind Every Verse</li>
          <li>Start Your Journey With Free Trial Class</li>

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
             We designed this course for beginners and those with some prior Islamic knowledge belonging to any cultural and language background. By simplifying the complex terminologies and eliminating language barriers, we are transforming traditional tafsir studies into modern, more accessible, easy-to-understand, step-by-step learning processes. We help you learn at your own pace, schedule, and location with your preferred instructor and teaching style.
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
                <p>Our unique teaching methodology adapts to your current understanding of Islamic studies and ensures steady progress in understanding Quranic interpretations at your own pace.</p>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>We integrate historical context with contemporary relevance, helping you understand how to apply Quranic teachings in modern life through real-world applications.</p>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>Our comprehensive learning platform combines live one-on-one sessions with rich study resources, making complex tafsir concepts accessible through structured lessons.</p>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>Our instructors ensure you receive authentic knowledge presented in an engaging, understandable manner, bridging classical tafsir with contemporary understanding.</p>
              </li>
              <li class="d-flex align-items-start">
                <span class="me-2" style="color: #36c47d;">✔</span>
                <p>We focus on developing your independent interpretative skill, enabling you to gradually build the confidence to understand and reflect upon Quranic verses on your own.</p>
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
              <h3 style="color: #36c47d; font-weight: bold; margin-bottom: 0.3rem;">50 USD</h3>
              <h6 style="color: #ccc; font-weight: bold; text-decoration: line-through; font-size: 1rem;">80 USD</h6>
            </div>
            <p class="text-white mt-3">Tafsir Course begin Your Spiritual Journey with a Free Trial Class</p>
            <a href="{{ route('home.contact.us') }}" class="btn btn-danger rounded-pill px-4" style="background-color: #e74c3c; border: none;">Free
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

  <section id="video" class="section video-section"  style="background-image: url('assets/img/about-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2><b>Watch Our Introduction</b></h2>
          <p class="mb-4">
            Learn more about our mission, vision, and how we provide high-quality Quran education to students worldwide.
          </p>
          <div class="video-container">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/YZYoqH3RsGk?si=FHHuca05TItNfcXZ"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- Courses Section -->
<section id="courses" class="courses section" style="background-color: #fdf1dd; padding: 50px 0;">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2 class="text-black">Highlighted Program</h2>
    <p class="text-black">Our <b>Featured</b> Courses</p>
    <h6 class="col-lg-8 mx-auto text-black">
      Explore our expertly designed Quran courses, including Tajweed, Hifz, and Quran translation. Each course is
      tailored to help you achieve your learning goals with ease and excellence.
    </h6>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row">

      <div class="course-wrapper " data-aos="fade-up">
        <div class="course-card " data-aos="fade-up">
          <div class="course-image">
            <span class="badge-level">Intermediate</span>
            <img src="assets/img/ai/course-1.svg" alt="Memorize Quran">
          </div>
          <div class="course-info">
            <div class="meta">
              <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
              <span><i class="bi bi-clock"></i> 24/7 Available</span>
            </div>
            <h3 class="title"><a href="{{route('quran.memorization')}}">Memorize Quran Online</a></h3>
            <p class="description">Memorizing the Holy Quran is a spiritual and physical program. It’s a miracle.</p>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="reviews">(39 Reviews)</span>
            </div>
            <div class="footer-course">
              <span class="price">30 USD / 20 POUNDS</span>
              <span class="enroll"><i class="bi bi-mortarboard"></i> 120+ Enroll</span>
            </div>
          </div>
        </div>
        <div class="course-card" data-aos="fade-up">
          <div class="course-image">
            <span class="badge-level">Beginner</span>
            <img src="assets/img/ai/course-2.svg" alt="Memorize Quran">
          </div>
          <div class="course-info">
            <div class="meta">
              <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
              <span><i class="bi bi-clock"></i> 24/7 Available</span>
            </div>
            <h3 class="title"><a href="{{route('quran.recitation')}}">Qaidah Reading</a></h3>
            <p class="description">For the purpose of learning the basics of tajweed rules, one has to learn this
              booklet</p>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="reviews">(24 Reviews)</span>
            </div>
            <div class="footer-course">
              <span class="price">30 USD / 20 POUNDS</span>
              <span class="enroll"><i class="bi bi-mortarboard"></i> 378+ Enroll</span>
            </div>
          </div>
        </div>
        <div class="course-card" data-aos="fade-up">
          <div class="course-image">
            <span class="badge-level">Advance</span>
            <img src="assets/img/ai/course-3.jpg" alt="Memorize Quran">
          </div>
          <div class="course-info">
            <div class="meta">
              <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
              <span><i class="bi bi-clock"></i> 24/7 Available</span>
            </div>
            <h3 class="title"><a href="{{route('quran.tajweed')}}">Quran Reading with Tajweed</a></h3>
            <p class="description">Quran reading with Tajweed has immense significance in preservation of Quran</p>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="reviews">(32 Reviews)</span>
            </div>
            <div class="footer-course">
              <span class="price">30 USD / 20 POUNDS</span>
              <span class="enroll"><i class="bi bi-mortarboard"></i> 378+ Enroll</span>
            </div>
          </div>
        </div>
        <div class="course-card" data-aos="fade-up">
          <div class="course-image">
            <span class="badge-level">Advance</span>
            <img src="assets/img/ai/course-4.svg" alt="Memorize Quran">
          </div>
          <div class="course-info">
            <div class="meta">
              <span><i class="bi bi-person-video"></i> 1 on 1 Session</span>
              <span><i class="bi bi-clock"></i> 24/7 Available</span>
            </div>
            <h3 class="title"><a href="{{route('quran.tafseer')}}">Tafseer ul Quran</a></h3>
            <p class="description">Learn Quran by understanding with translation</p>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="reviews">(82 Reviews)</span>
            </div>
            <div class="footer-course">
              <span class="price">30 USD / 20 POUNDS</span>
              <span class="enroll"><i class="bi bi-mortarboard"></i> 378+ Enroll</span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Course Item-->

    </div>

  </div>

</section><!-- /Courses Section -->


@include('layouts.testimonial')

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Course",
    "name": "Tafseer Course Online",
    "description": "An online Tafseer course designed for beginners and those with prior Islamic knowledge, focusing on Quranic interpretation from foundational to advanced levels, integrating historical context with contemporary relevance.",
    "provider": {
      "@type": "Organization",
      "name": "Roohul Quran Academy",
      "url": "https://roohulquranacademy.com",
      "logo": "https://roohulquranacademy.com/assets/img/logo.png",
    },
    "url": "https://roohulquranacademy.com/tafseer-course-online",
    "offers": {
      "@type": "Offer",
      "price": "50.00",
      "priceCurrency": "USD",
      "availability": "https://schema.org/InStock",
      "url": "https://roohulquranacademy.com/tafseer-course-online"
    }
  }
  
  </script>
  
@endsection
@extends('main')

@section('title', 'Rooh Ul Quran Academy - Online Quran Classes for Kids & Adults')

@section('meta_description', 'Join our expert online Quran tutors for kids and adults. Learn Tajweed, Hifz, and more at Rooh Ul Quran Academy with flexible online sessions.')

@section('meta_keywords', 'Quran classes online, Tajweed courses, Hifz programs, online Islamic education, Rooh Ul Quran teachers')
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

  #about .card {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    height: 600px;
  }

  #about .card .nested-card {
    border-radius: 8px;
    padding: 16px;
    margin-bottom: 16px;
  }

  #counts {
    color: #fff;
    /* Ensure text is readable on the background image */
    padding: 50px 0;
  }

  #counts h2 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  #counts p {
    font-size: 1.3rem;
    margin-bottom: 30px;
  }

  .stats-item span {
    font-size: 2.5rem;
    font-weight: bold;
  }

  .stats-item p {
    font-size: 10rem;
    margin-top: 10px;
  }

  .stats-item span,
  .stats-item p {
    color: white;
  }

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

  #why-us {
    padding: 50px 0;
    color: #000000;
  }

  .icon-box img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    margin-bottom: 15px;
  }

  #why-us {
    background-image: url('assets/img/about-bg.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 50px 0;
  }

  /* General Styling */
  /* General Styling */
  .bg-dark {
    background-color: #1c1c1c;
  }

  .bg-danger {
    background-color: #a63d2e;
  }

  .text-white {
    color: #ffffff;
  }

  .rounded-pill {
    border-radius: 50px !important;
  }

  .btn-dark {
    background-color: #000000;
    color: #ffffff;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease;
  }

  .btn-dark:hover {
    background-color: #333333;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .w-lg-50 {
      width: 100% !important;
    }

    .d-lg-block {
      display: none !important;
      /* Hide thumbs-up image on mobile */
    }

    .rounded {
      border-radius: 10px !important;
    }

    .form-container {
      max-width: 40%;
      /* Adjust the width of the form inputs */
    }

  }

  .form-container {
    max-width: 60%;
    /* Adjust the width of the form inputs */
  }

  .input-large {
    height: 40px;
    /* Adjust the height as needed */
    font-size: 1.1rem;
    /* Optional: Increase font size for better readability */
  }


  /* contact us  */
  .contact-section {
    position: relative;
    padding: 50px 0;
    color: white;
  }


  .contact-section .contact-form {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 2px solid #44137c;
  }

  .contact-section .contact-form input,
  .contact-section .contact-form select {
    border: 1px solid #ddd;
    padding: 10px 15px;
    font-size: 14px;
  }

  .contact-section .contact-form input:focus,
  .contact-section .contact-form select:focus {
    border-color: #44137c;
    outline: none;
  }

  .contact-section .contact-form button {
    background-color: #36c47d;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    padding: 10px 20px;
    transition: background-color 0.3s ease;
  }

  .contact-section .contact-form button:hover {
    background-color: #2a9f5d;
  }

  @media (max-width: 768px) {
    .contact-section .contact-form {
      padding: 20px;
    }
  }

  .hover-popout {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .hover-popout:hover {
    transform: scale(1.05);
    /* Slightly enlarges the form */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    /* Adds a stronger shadow */
  }
</style>
<!-- Hero Section -->

<section id="hero" class="hero section dark-background">
  <img src="assets/img/hero-bg-2.svg" alt="" class="desktop-image" data-aos="fade-in">


  <img src="assets/img/hero-bg-1.svg" alt="" class="mobile-image" data-aos="fade-in">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-7 col-sm-12 mb-4 mb-md-0 text-md-start text-center" data-aos="fade-up"
        data-aos-delay="100">
        <h2 class="hero-heading">Unlock The Beauty <br> Of The Quran</h2>
        <p class="hero-subtext">
          Online Quran classes for Tajweed, Hifz and Arabic <br>Your time, Your choice.
        </p>
        <a href="{{ route('home.contact.us') }}" class="btn-get-started mt-3">Get Started</a>
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

<!-- About Section -->
<section id="about" class="about section"
  style="background-image: url('assets/img/about-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <!-- Image on the Left -->
      <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/about.png" class="img-fluid rounded shadow" alt="About Us">
      </div>

      <!-- Card for About Us Description -->
      <div class="col-lg-6 order-2 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <div class="card p-4 shadow"
          style="position: relative; top: -30px; background: #ffffff; border-radius: 10px; height: 600px;">
          <!-- Increased height -->
          <h5>Who we are</h5>
          <h2><b>About</b> Us ?</h2>
          <p>
            Millions of Muslims worldwide face challenges accessing quality Islamic education due to time constraints,
            lack of local experts, and commuting issues.
            <br><br>
            Roohul Quran addresses this need by offering accessible Islamic education globally to those who lack
            resources.
          </p>

          <!-- Nested Card 1 -->
          <div class="nested-card p-3 mb-3 nt-5" style="background-color: #f3d8d8; border-radius: 8px;">
            <h5><b>Our Mission</b></h5>
            <p>
              Our mission is to democratize Islamic education by providing world-class instruction with top-notch
              Islamic instructors, especially those with native Arabic backgrounds, and eliminating geographical
              barriers.
            </p>
          </div>

          <!-- Nested Card 2 -->
          <div class="nested-card p-3" style="background-color: #cad4dd; border-radius: 8px;">
            <h5><b>Our Vision</b></h5>
            <p>
              Our Vision
              Our vision is to empower global Muslim communities through transformative, readily accessible,
              budget-friendly, high-quality Islamic education, providing them with an advanced technology-based
              learning platform.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /About Section -->

<!-- Counts Section -->
<section id="counts" class="section counts light-background"
  style="background-image: url('assets/img/choos-us.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <!-- Title -->
      <div class="col-12 text-center mb-4">
        <h1 style="color: #36c47d">Why Choose Us</h1>
        <p class="col-lg-6 mx-auto mt-5" style="text-align:inherit;line-height: 1.8;">
          There are many reasons to choose Roohul Quran for your Online Quran learning journey. Our Online Quran
          academy provides a structured and immersive approach to learn the Quran Online, ensuring a deep
          understanding of Islamic knowledge.
        </p>
      </div>

      <!-- Stats Items -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"
            style="color: white;"></span>
          <p style="color: white;">Years</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"
            style="color: white;"></span>
          <p style="color: white;">Tutors</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"
            style="color: white;"></span>
          <p style="color: white;">Graduates</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1" class="purecounter"
            style="color: white;"></span>
          <p style="color: white;">Students</p>
        </div>
      </div><!-- End Stats Item -->
      <!-- End Stats Item -->
    </div>
  </div>
</section>
<!-- /Counts Section -->
<!-- Video Section -->
<section id="video" class="section video-section" style="background-color: #f9f9f9; padding: 50px 0;">
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
<!-- Why Us Section -->
<section id="why-us" class="section why-us"
  style="background-image: url('assets/img/about-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
  <div class="container">
    <div class="row gy-4">
      <!-- New Content -->
      <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100">
        <h2 style="color: #000000;">Perks of Choosing Us</h2>
        <p style="color: #000000; font-size: 1.1rem; line-height: 1.8; text-align: center;" class="col-lg-8 mx-auto">
          Learn the Quran easily from home with expert teachers. Our online classes fit your daily schedule, and our
          certified teachers help you learn at your own speed. We work with students at every level, giving you the
          time and attention you need to learn well.
          <br><br>
          At Q Teaching, we focus on what works best for you – whether you’re just starting or want to learn more.
          Start with a free class today and see how easy Quran learning can be.
        </p>
      </div>

      <!-- Icon Boxes -->
      <div class="col-lg-10 d-flex align-items-center justify-content-center mx-auto" data-aos="fade-up"
        data-aos-delay="200">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
              <img src="assets/img/icons/teacher.png" alt="Expert Quran Tutors"
                style="width: 80px; height: 80px; object-fit: contain; margin-bottom: 15px;">
              <h4>Expert Quran Tutors</h4>
              <p>Renowned Quran tutors integrate teachings for life, faith, and character.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <img src="assets/img/icons/presentation.png" alt="Expert Quran Tutors"
                style="width: 80px; height: 80px; object-fit: contain; margin-bottom: 15px;">
              <h4>One-to-One
                Classes</h4>
              <p>Personalized learning based on your needs with expert help & feedback.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <img src="assets/img/icons/muslimah.png" alt="Expert Quran Tutors"
                style="width: 80px; height: 80px; object-fit: contain; margin-bottom: 15px;">
              <h4>Female Quran Teachers
                Available</h4>
              <p>Female tutors ensure respectful, comfortable, and culturally sensitive learning.</p>
            </div>
          </div><!-- End Icon Box -->


          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <img src="assets/img/icons/schedule.png" alt="Expert Quran Tutors"
                style="width: 80px; height: 80px; object-fit: contain; margin-bottom: 15px;">
              <h4>Flexible Class
                Timings</h4>
              <p>24/7 flexible classes with preferred tutors for convenient Quran learning.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <img src="assets/img/icons/laptop.png" alt="Expert Quran Tutors"
                style="width: 80px; height: 80px; object-fit: contain; margin-bottom: 15px;">
              <h4>Supervised
                Learning</h4>
              <p>A structured curriculum with guidance ensures steady progress and confidence.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <img src="assets/img/icons/mosque.png" alt="Expert Quran Tutors"
                style="width: 80px; height: 80px; object-fit: contain; margin-bottom: 15px;">
              <h4>Ideal Quran
                Study Option</h4>
              <p>Global online classes offer flexible Quran learning at your own pace.</p>
            </div>
          </div><!-- End Icon Box -->

        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Why Us Section -->


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

<section style="background-color: #fdf1dd;">
  <div class="container position-relative">
    <div class="bg-white shadow d-flex flex-column flex-lg-row position-relative">

      <!-- Left Content -->
      <div class="text-white p-5 rounded w-100 w-lg-50 d-flex align-items-center justify-content-center"
        style="z-index: 1; background: linear-gradient(80deg, #44137c, #9a8f50, #e5a72a);">
        <div>
          <h2 class="mb-4 fs-3 text-center text-white">Make Quran learning simple with dedicated teaching support</h2>
          <ul class="list-unstyled text-start">
            <li class="mb-3">✅ Start your learning journey at any level</li>
            <li class="mb-3">✅ Study flexibly with online scheduled classes</li>
            <li class="mb-3">✅ Grow through personalized attention</li>
            <li>✅ Advance confidently with expert guidance</li>
          </ul>
        </div>
      </div>

      <!-- Right Form -->
      <div class="text-white p-5 rounded w-100 w-lg-50 mt-4 mt-lg-0"
        style="z-index: 1; background: linear-gradient(270deg, #44137c, #9a8f50, #e5a72a);">
        <form id="trial-forms" class="form-container mx-auto">
          @csrf
          <div class="mb-3">
            <input type="text" class="form-control rounded-pill" name="name" placeholder="Enter your Full Name"
              required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control rounded-pill" name="email" placeholder="Enter Your Email Address"
              required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control rounded-pill" name="phone" placeholder="Enter Your Phone Number"
              required>
          </div>
          <div class="mb-3">
            <select class="form-control rounded-pill" name="country" required>
              <option value="" disabled selected>Select Your Country</option>
              <option value="Pakistan">Pakistan</option>
              <option value="India">India</option>
              <option value="USA">USA</option>
              <option value="UK">UK</option>
            </select>
          </div>
          <div class="mb-3">
            <textarea class="form-control rounded-pill" name="message" placeholder="Any message (optional)"></textarea>
          </div>
          <input type="hidden" name="course_enroll" value="Course Title Here">

          <button type="submit" id="submit-btn" class="btn btn-dark w-100 rounded-pill">
            <span id="btn-text">BOOK FREE TRIAL CLASS</span>
            <span id="btn-loading" class="spinner-border spinner-border-sm d-none"></span>
          </button>
        </form>

      </div>

    </div>

    <!-- Center Image -->
    <div class="position-absolute top-50 start-50 translate-middle d-none d-lg-block"
      style="z-index: 2; margin-top: 20px;">
      <img src="assets/img/ai/thumbsup1.png" alt="Person" class="img-fluid" style="max-height: 310px;">
    </div>
  </div>
</section>
{{-- end of form --}}


{{-- start testimonial --}}

@include('layouts.testimonial')

{{-- contact us --}}

<section id="contact" class="contact-section position-relative"
  style="background: url('assets/img/ai/contact-us.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
  <!-- Transparent Black Box -->
  <div class="overlay"></div>

  <div class="container position-relative" style="z-index: 1;">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-lg-6 col-md-12 text-white" data-aos="fade-up">
        <h2 class="mb-4" style="font-weight: bold; color: #f8f8f8;">Register Your Free Online Quran Classes</h2>
        <ul class="list-unstyled">
          <li class="mb-4 d-flex align-items-start">
            <img src="assets/img/icons/pointing-up.png" alt="Registration" class="me-3"
              style="width: 40px; height: 40px;">
            <div>
              <h5 style="color: #1bd634; font-weight: bold;">Simple and Convenient Registration</h5>
              <p>Sign up easily for free Quran classes with experienced teachers. Just provide your name and contact to
                start learning!</p>
            </div>
          </li>
          <li class="mb-4 d-flex align-items-start">
            <img src="assets/img/icons/schedule.png" alt="Schedule" class="me-3" style="width: 40px; height: 40px;">
            <div>
              <h5 style="color: #1bd634; font-weight: bold;">Schedule Your Free Trial</h5>
              <p>After you register, we will reach out to you to arrange a convenient time for your free Quran trial
                classes.</p>
            </div>
          </li>
          <li class="mb-4 d-flex align-items-start">
            <img src="assets/img/icons/koran.png" alt="Start Class" class="me-3" style="width: 40px; height: 40px;">
            <div>
              <h5 style="color: #1bd634; font-weight: bold;">Start Your First Class</h5>
              <p>We’ll quickly connect you with one of our expert Quran teachers, allowing you to schedule your first
                class at a time that works best for you.</p>
            </div>
          </li>
          <li class="d-flex align-items-start">
            <img src="assets/img/icons/quality.png" alt="Certificate" class="me-3" style="width: 40px; height: 40px;">
            <div>
              <h5 style="color: #1bd634; font-weight: bold;">Get Your Certificate from Us</h5>
              <p>Get your certificate after successfully completing the course. Start your learning journey with us
                today!</p>
            </div>
          </li>
        </ul>
      </div>

      <!-- Right Form -->
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
        <div class="contact-form bg-white p-4 shadow hover-popout"
          style="border: 2px solid #44137c; border-radius: 20px;">
          <h3 class="mb-4 text-center" style="color: #44137c; font-weight: bold;">FREE TRIAL CLASS</h3>
          <form id="trial-form">
            <div class="mb-3">
              <input type="text" class="form-control rounded-pill" name="name" placeholder="Enter your Full Name"
                required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control rounded-pill" name="email" placeholder="Enter Your Email Address"
                required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control rounded-pill" name="phone" placeholder="Enter Your Phone Number"
                required>
            </div>
            <div class="mb-3">
              <select class="form-control rounded-pill" name="country" required>
                <option value="" disabled selected>Select Your Country</option>
                <option value="Pakistan">Pakistan</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
              </select>
            </div>

            <!-- Button with loading spinner -->
            <button type="submit" class="btn w-100 rounded-pill" id="submit-btn"
              style="background: linear-gradient(120deg, #44137c, #2bab6d); font-weight: bold;">
              <span id="btn-text">Get Free Trial Class</span>
              <span id="btn-loading" class="spinner-border spinner-border-sm d-none"></span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $('#trial-form').on('submit', function (e) {
  e.preventDefault();

  let form = $(this);
  let submitBtn = $('#submit-btn');
  let btnText = $('#btn-text');
  let btnLoading = $('#btn-loading');

  btnText.addClass('d-none');
  btnLoading.removeClass('d-none');
  submitBtn.prop('disabled', true);

  $.ajax({
      url: '{{ route('trial-class.store') }}',
      type: 'POST',
      data: form.serialize(),
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (response) {
          btnText.removeClass('d-none');
          btnLoading.addClass('d-none');
          submitBtn.prop('disabled', false);

          Swal.fire('JazakAllah', response.message, 'success');
          form[0].reset();
      },
      error: function (xhr) {
          btnText.removeClass('d-none');
          btnLoading.addClass('d-none');
          submitBtn.prop('disabled', false);

          let message = 'Something went wrong.';
          if (xhr.status === 422) {
              const errors = xhr.responseJSON.errors;
              message = Object.values(errors).flat().join('\n');
          }

          Swal.fire('Error', message, 'error');
      }
  });
});


$('#trial-forms').on('submit', function (e) {
  e.preventDefault();

  let form = $(this);
  let submitBtn = $('#submit-btn');
  let btnText = $('#btn-text');
  let btnLoading = $('#btn-loading');

  btnText.addClass('d-none');
  btnLoading.removeClass('d-none');
  submitBtn.prop('disabled', true);

  $.ajax({
      url: '{{ route('trial-class.store') }}',
      type: 'POST',
      data: form.serialize(),
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (response) {
          btnText.removeClass('d-none');
          btnLoading.addClass('d-none');
          submitBtn.prop('disabled', false);

          Swal.fire('JazakAllah', response.message, 'success');
          form[0].reset();
      },
      error: function (xhr) {
          btnText.removeClass('d-none');
          btnLoading.addClass('d-none');
          submitBtn.prop('disabled', false);

          let message = 'Something went wrong.';
          if (xhr.status === 422) {
              const errors = xhr.responseJSON.errors;
              message = Object.values(errors).flat().join('\n');
          }

          Swal.fire('Error', message, 'error');
      }
  });
});

</script>


<script type="application/ld+json">
  {
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Rooh Ul Quran Academy",
  "url": "http://roohulquranacademy.com/",
  "logo": "https://roohulquranacademy.com/assets/img/logo.png",
  "description": "Rooh Ul Quran Academy is a trusted online platform offering Quran classes with Tajweed, Hifz, Translation, and Islamic Studies. Our expert tutors teach kids and adults worldwide through personalized online sessions.",
  "founder": {
    "@type": "Person",
    "name": "Shaykh or Ustadh Name"  <!-- Optional: replace with actual name -->
  },
  "foundingDate": "2020",
  "sameAs": [
    "https://www.facebook.com/roohulquranacademy",
    "https://www.instagram.com/roohulquranacademy",
    "https://www.youtube.com/@roohulquranacademy"
  ],
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "PK"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+92-343-8078216",
    "contactType": "Customer Service",
    "areaServed": "Worldwide",
    "availableLanguage": ["English", "Urdu", "Arabic"]
  }
}
</script>


{{-- blog scrip --}}
{{-- <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://roohulquranacademy.com/blogs/rights-of-wives-in-quran-and-hadith"
    },
    "headline": "Rights of Wives in Quran and Hadith",
    "description": "An article discussing the rights of wives in Islam as outlined in the Quran and Hadith, emphasizing respect, kindness, financial support, and the right to seek divorce.",
    "image": "https://roohulquranacademy.com/storage/blogs/7/bdHag0iljvPPjerb9BS8TfgOM2b0rgrfMWV4uY7b.webp",
    "author": {
      "@type": "Person",
      "name": "Admin"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Roohul Quran Academy",
      "logo": {
        "@type": "ImageObject",
        "url": "https://roohulquranacademy.com/assets/img/logo.png"
      }
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+92-343-8078216",
      "contactType": "Customer Service",
      "areaServed": "Worldwide",
      "availableLanguage": ["English", "Urdu", "Arabic"]
    }
    "datePublished": "2025-05-28",
    "dateModified": "2025-05-28"
  }
  

</script> --}}

@endsection
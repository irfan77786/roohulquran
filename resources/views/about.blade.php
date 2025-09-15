@extends('main')


<style>
  .about-us img {
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
</style>

@section('content')

<section id="hero" class="hero section dark-background">
  <img src="assets/img/hero-bg-3.webp" alt="" class="desktop-image" data-aos="fade-in">


  <img src="assets/img/hero-bg-1.webp" alt="" class="mobile-image" data-aos="fade-in">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-7 col-sm-12 mb-2 mb-md-0" data-aos="fade-up" data-aos-delay="100">
        <h2 class="fw-bold mb-3">About <span>Rooh ul Quran Academy</span></h2>
        <p style="font-size: larger" class="col-lg-10 col-md-7 col-sm-12">
          At Rooh ul Quran Academy, we believe the Quran is not just a book to be read, but a divine guidance to be
          lived.
          Our mission is to make Quran learning accessible for everyone across the world through professional online
          Quran classes with qualified teachers.
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
</section>
<section id="about-us" class="section about-us py-5 bg-light">
  <div class="container">

    {{-- Section Heading --}}

    {{-- About Content --}}
    <div class="row gy-5 align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset('assets/img/ai/about.webp') }}" class="img-fluid rounded shadow"
          alt="About Rooh ul Quran Academy" loading="lazy" style="height: 400px; ">
      </div>

      <div class="col-lg-6" data-aos="fade-left">
        <h4 class="fw-semibold">Who We Are</h4>
        <p class="text-muted">
          Since our beginning, we have helped hundreds of students – children, adults, and professionals – learn Quran
          with Tajweed, memorize the Holy Quran, and understand its deeper meanings through Tafsir.
        </p>
        <ul class="list-unstyled">
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Learn Quran Online with Tajweed</li>
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Online Noorani Qaida Course (for beginners and
            kids)</li>
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Online Tajweed Course (for fluency and accuracy)
          </li>
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Online Quran Memorization Course (Hifz)</li>
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Online Tafsir Course (to understand the Quran
            deeply)</li>
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Online Ijazah Course (for advanced students)
          </li>
        </ul>
      </div>
    </div>

    {{-- Mission Section --}}
    <div class="row mt-5 gy-4">
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up">
        <h4 class="fw-semibold">Our Mission</h4>
        <p class="text-muted">Our mission is simple:</p>
        <ol class="ps-3">
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
      <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-left">
        <img src="{{ asset('assets/img/ai/our-mission.webp') }}" loading="lazy" style="height: 400px;"
          class="img-fluid rounded shadow" alt="Our Mission">
      </div>
    </div>

    {{-- Why Choose Us --}}
    <div class="row mt-5">
      <div class="col-12 text-center" data-aos="fade-up">
        <h4 class="fw-semibold mb-4">Why Choose Rooh ul Quran Academy?</h4>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
        <div class="card h-100 shadow border-0 rounded-3">
          <div class="card-body text-center">
            <i class="bi bi-person-check fs-2 text-primary mb-3"></i>
            <h6 class="fw-bold">Qualified Teachers</h6>
            <p class="text-muted small">Male and female Quran teachers with certification in Quranic studies.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="card h-100 shadow border-0 rounded-3">
          <div class="card-body text-center">
            <i class="bi bi-clock fs-2 text-primary mb-3"></i>
            <h6 class="fw-bold">Flexible Timings</h6>
            <p class="text-muted small">We offer flexible schedules to suit international students across time zones.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="card h-100 shadow border-0 rounded-3">
          <div class="card-body text-center">
            <i class="bi bi-currency-dollar fs-2 text-primary mb-3"></i>
            <h6 class="fw-bold">Affordable Fees</h6>
            <p class="text-muted small">Affordable plans with free trial class for every new student.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="card h-100 shadow border-0 rounded-3">
          <div class="card-body text-center">
            <i class="bi bi-people fs-2 text-primary mb-3"></i>
            <h6 class="fw-bold">One-on-One Sessions</h6>
            <p class="text-muted small">Interactive classes that give full attention and guidance to each student.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="card h-100 shadow border-0 rounded-3">
          <div class="card-body text-center">
            <i class="bi bi-book fs-2 text-primary mb-3"></i>
            <h6 class="fw-bold">Structured Courses</h6>
            <p class="text-muted small">Courses designed step-by-step for beginners, kids, and advanced learners.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="500">
        <div class="card h-100 shadow border-0 rounded-3">
          <div class="card-body text-center">
            <i class="bi bi-globe fs-2 text-primary mb-3"></i>
            <h6 class="fw-bold">Global Reach</h6>
            <p class="text-muted small">Trusted by students from USA, UK, Canada, Australia, and Middle East.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
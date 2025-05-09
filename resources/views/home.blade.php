@extends('main')

@section('content')

<main class="main">

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

    .mobile-image {
      display: none;
    }

    @media (max-width: 768px) {
      .desktop-image {
        display: none;
        /* Hide desktop image on mobile */
      }

      .mobile-image {
        display: block;
        /* Show mobile-specific image */
        width: 100%;
        /* Ensure it spans the full width */
      }

      .text-content {
        flex: 0 0 100%;
        /* Make the text content take full width */
        max-width: 100%;
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
  </style>
  <!-- Hero Section -->

  <section id="hero" class="hero section dark-background">
    <img src="assets/img/hero-bg-2.png" alt="" class="desktop-image" data-aos="fade-in">


    <img src="assets/img/hero-bg-1.png" alt="" class="mobile-image d-none" data-aos="fade-in">

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-7 col-sm-12 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <h2>Unlock The Beauty <br> Of The Quran</h2>
          <p>
            Online Quran classes for Tajweed, Hifz and Arabic <br>Your time, Your choice.
          </p>
          <a href="courses.html" class="btn-get-started">Get Started</a>
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
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                  required>
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
    style="background-image: url('assets/img/header-bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
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
  <section id="counts" class="section counts light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Students</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Courses</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Events</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Trainers</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Counts Section -->

  <!-- Why Us Section -->
  <section id="why-us" class="section why-us">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="why-box">
            <h3>Why Choose Our Products?</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Duis aute irure dolor in reprehenderit
              Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
            </p>
            <div class="text-center">
              <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
            </div>
          </div>
        </div><!-- End Why Box -->

        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

            <div class="col-xl-4">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-clipboard-data"></i>
                <h4>Corporis voluptates officia eiusmod</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-gem"></i>
                <h4>Ullamco laboris ladore pan</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-inboxes"></i>
                <h4>Labore consequatur incidid dolore</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>

    </div>

  </section><!-- /Why Us Section -->

  <!-- Features Section -->
  <section id="features" class="features section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="features-item">
            <i class="bi bi-eye" style="color: #ffbb2c;"></i>
            <h3><a href="" class="stretched-link">Lorem Ipsum</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="features-item">
            <i class="bi bi-infinity" style="color: #5578ff;"></i>
            <h3><a href="" class="stretched-link">Dolor Sitema</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="features-item">
            <i class="bi bi-mortarboard" style="color: #e80368;"></i>
            <h3><a href="" class="stretched-link">Sed perspiciatis</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="features-item">
            <i class="bi bi-nut" style="color: #e361ff;"></i>
            <h3><a href="" class="stretched-link">Magni Dolores</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="features-item">
            <i class="bi bi-shuffle" style="color: #47aeff;"></i>
            <h3><a href="" class="stretched-link">Nemo Enim</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="features-item">
            <i class="bi bi-star" style="color: #ffa76e;"></i>
            <h3><a href="" class="stretched-link">Eiusmod Tempor</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
          <div class="features-item">
            <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
            <h3><a href="" class="stretched-link">Midela Teren</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
          <div class="features-item">
            <i class="bi bi-camera-video" style="color: #4233ff;"></i>
            <h3><a href="" class="stretched-link">Pira Neve</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
          <div class="features-item">
            <i class="bi bi-command" style="color: #b2904f;"></i>
            <h3><a href="" class="stretched-link">Dirada Pack</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
          <div class="features-item">
            <i class="bi bi-dribbble" style="color: #b20969;"></i>
            <h3><a href="" class="stretched-link">Moton Ideal</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
          <div class="features-item">
            <i class="bi bi-activity" style="color: #ff5828;"></i>
            <h3><a href="" class="stretched-link">Verdo Park</a></h3>
          </div>
        </div><!-- End Feature Item -->

        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
          <div class="features-item">
            <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
            <h3><a href="" class="stretched-link">Flavor Nivelanda</a></h3>
          </div>
        </div><!-- End Feature Item -->

      </div>

    </div>

  </section><!-- /Features Section -->

  <!-- Courses Section -->
  <section id="courses" class="courses section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Courses</h2>
      <p>Popular Courses</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="course-item">
            <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="category">Web Development</p>
                <p class="price">$169</p>
              </div>

              <h3><a href="course-details.html">Website Design</a></h3>
              <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                  <a href="" class="trainer-link">Antonio</a>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bi bi-person user-icon"></i>&nbsp;50
                  &nbsp;&nbsp;
                  <i class="bi bi-heart heart-icon"></i>&nbsp;65
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="course-item">
            <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="category">Marketing</p>
                <p class="price">$250</p>
              </div>

              <h3><a href="course-details.html">Search Engine Optimization</a></h3>
              <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-2-2.jpg" class="img-fluid" alt="">
                  <a href="" class="trainer-link">Lana</a>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bi bi-person user-icon"></i>&nbsp;35
                  &nbsp;&nbsp;
                  <i class="bi bi-heart heart-icon"></i>&nbsp;42
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="course-item">
            <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="category">Content</p>
                <p class="price">$180</p>
              </div>

              <h3><a href="course-details.html">Copywriting</a></h3>
              <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-3-2.jpg" class="img-fluid" alt="">
                  <a href="" class="trainer-link">Brandon</a>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bi bi-person user-icon"></i>&nbsp;20
                  &nbsp;&nbsp;
                  <i class="bi bi-heart heart-icon"></i>&nbsp;85
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

      </div>

    </div>

  </section><!-- /Courses Section -->

  <!-- Trainers Index Section -->
  <section id="trainers-index" class="section trainers-index">

    <div class="container">

      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Walter White</h4>
              <span>Web Development</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut
                aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>William Anderson</h4>
              <span>Content</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Trainers Index Section -->

</main>
@endsection
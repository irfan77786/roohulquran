<style>
  #top-header {
    background-image: url('assets/img/header-bg.png'); /* Replace with your image path */
    background-size: cover; /* Ensures the image covers the entire header */
    background-position: center;
    padding: 10px 0;
    font-size: 14px;
    color: #fff;
  }

  #top-header .contact-info {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    flex-wrap: wrap;
    text-align: center;
  }

  #top-header .contact-info > div {
    margin-bottom: 10px;
  }

  @media (min-width: 768px) {
  #top-header .contact-info {
    flex-wrap: nowrap;
    justify-content: center;
    text-align: left;
    gap: 40px; /* larger gap on desktop */
    font-size: 1.0rem;
  }

  #top-header .contact-info > div {
    margin-bottom: 0;
  }
  }
</style>

<header id="top-header" class="top-header text-white">
  <div class="container-fluid">
    <div class="contact-info">
      
      <!-- Phone section -->
      <div class="d-flex align-items-center justify-content-center me-md-4">
        <i class="fa-brands fa-whatsapp me-2" style="color: #FFD43B; font-size: 1.5rem;"></i>
        <span class="phone-number">+92-343-8078216</span>
      </div>

      <!-- Email section -->
      <div class="d-flex align-items-center justify-content-center">
        <i class="fa-regular fa-envelope me-2" style="color: #d8b73e; font-size: 1.5rem;"></i>
        <span class="email">hafizirfan8078@gmail.com</span>
      </div>

    </div>
  </div>
</header>





<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><img height="1000px" src="assets/img/logo.png" class="img-fluid" alt=""></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home.index')}}" class="active">Home<br></a></li>
          <li><a href="{{route('home.about')}}">About</a></li>
          <li><a href="{{route('home.courses')}}">Courses</a></li>
          {{-- <li><a href="trainers.html">Trainers</a></li> --}}
          <li><a href="{{route('home.events')}}">Events</a></li>
          <li><a href="{{route('home.pricing')}}">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="{{route('home.contact.us')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="courses.html">Get Started</a>

    </div>
  </header>
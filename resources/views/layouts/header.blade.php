
<header id="top-header" class="top-header text-white">
  <div class="container-fluid">
    <div class="contact-info">

      <!-- Phone section -->
      <div class="d-flex align-items-center justify-content-center me-md-4">
        <i class="fa-brands fa-whatsapp me-2" style="color: #FFD43B; font-size: 1.5rem;"></i>
        <span class="phone-number">
          <a href="tel:+923344066429" class="text-white text-decoration-none">+92-334-4066429</a>
          <span class="mobile-separator" style="color: rgba(255, 255, 255, 0.5);">|</span>
          <a href="tel:+923446781539" class="text-white text-decoration-none">+92-344-6781539</a>
        </span>
      </div>


      <!-- Email section -->
      <div class="d-flex align-items-center justify-content-center">
        <i class="fa-regular fa-envelope me-2" style="color: #d8b73e; font-size: 1.5rem;"></i>
        <span class="email">info@roohulquranacademy.com</span>
      </div>

    </div>
  </div>
</header>

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
      <img src="{{ asset('assets/img/logo.svg') }}" alt="Rooh Ul Quran Academy Logo" width="160" height="160"
        decoding="async" loading="eager" />
    </a>


    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{route('home.index')}}" class="active">Home<br></a></li>
        <li><a href="{{route('home.about')}}">About Us</a></li>
        <li class="dropdown"><a href="#"><span>Courses</span> <i
              class="bi bi-chevron-down toggle-dropdown color-yellow"></i></a>
          <ul>
            <li><a href="{{route('quran.tajweed')}}">Quran Reading With Tajweed</a></li>
            <li><a href="{{route('quran.recitation')}}">Noorani Qaida</a></li>
            <li><a href="{{route('quran.memorization')}}">Quran Memorization</a></li>
            <li><a href="{{route('quran.tafseer')}}">Tafseer Course</a></li>

          </ul>
        </li>
        <li><a href="{{route('home.pricing')}}">Pricing</a></li>
        {{-- <li><a href="trainers.html">Trainers</a></li> --}}
        <li><a href="{{route('teachers')}}">Teachers</a></li>


        <li><a href="{{route('home.contact.us')}}">Contact Us</a></li>
        <li><a href="{{route('blogs.index')}}">Blogs</a></li>

      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <div class="d-flex align-items-center gap-2 header-actions">
      <a href="{{ route('student.login') }}" class="btn-getstarted" style="color: white !important; background: transparent; border: 1px solid white; padding: 8px 20px; border-radius: 5px; text-decoration: none; transition: all 0.3s;">Student Login</a>
      <a href="{{ route('home.contact.us') }}" class="btn-getstarted" style="color: white !important">Get Started</a>
    </div>

  </div>
</header>
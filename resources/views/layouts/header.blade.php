
<header id="top-header" class="top-header">
  <div class="container-fluid">
    <div class="contact-info">

      <!-- Phone section -->
      <div class="d-flex align-items-center justify-content-center me-md-4">
        <i class="bi bi-whatsapp me-2"></i>
        <span class="phone-number">
          <a href="tel:+923344066429" class="text-decoration-none">+92-334-4066429</a>
          <span class="mobile-separator" style="color: rgba(255, 255, 255, 0.5);">|</span>
          {{-- <a href="tel:+923446781539" class="text-decoration-none">+92-344-6781539</a> --}}
        </span>
      </div>


      <!-- Email section -->
      <div class="d-flex align-items-center justify-content-center">
        <i class="bi bi-envelope-fill me-2"></i>
        <span class="email">info@roohulquranacademy.com</span>
      </div>

    </div>
  </div>
</header>

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
      <img src="{{ asset('assets/img/logo-rooh-ul-quran.webp') }}" alt="Rooh Ul Quran Academy Logo"
        decoding="async" loading="eager" />
    </a>

    <div class="d-flex align-items-center gap-2 header-actions">
      <a href="https://wa.me/923344066429" class="header-icon-btn header-icon-wa" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <i class="bi bi-whatsapp"></i>
      </a>
      <a href="mailto:info@roohulquranacademy.com" class="header-icon-btn header-icon-mail" aria-label="Email us">
        <i class="bi bi-envelope-fill"></i>
      </a>
      <button type="button" class="mobile-nav-toggle d-xl-none" aria-label="Open menu" aria-expanded="false">
        <span class="mobile-nav-toggle-box" aria-hidden="true">
          <span class="mobile-nav-toggle-line"></span>
          <span class="mobile-nav-toggle-line"></span>
          <span class="mobile-nav-toggle-line"></span>
        </span>
      </button>
      <a href="{{ route('home.contact.us') }}" class="btn-getstarted d-none d-sm-inline-flex" style="color: white !important">Get Started</a>
    </div>

    <nav id="navmenu" class="navmenu">
      <div class="mobile-nav-overlay" aria-hidden="true"></div>

      <div class="mobile-nav-panel">
        <div class="mobile-nav-top d-xl-none">
          <a href="{{ url('/') }}" class="mobile-nav-logo">
            <img src="{{ asset('assets/img/logo-rooh-ul-quran.webp') }}" alt="Rooh ul Quran Academy" width="140" height="86" decoding="async">
          </a>
          <button type="button" class="mobile-nav-close" aria-label="Close menu">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>

        <ul>
          <li><a href="{{ route('home.index') }}" class="active">Home</a></li>
          <li><a href="{{ route('home.about') }}">About Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle-link"><span>Courses</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('quran.tajweed') }}">Quran Reading With Tajweed</a></li>
              <li><a href="{{ route('quran.recitation') }}">Noorani Qaida</a></li>
              <li><a href="{{ route('quran.memorization') }}">Quran Memorization</a></li>
              <li><a href="{{ route('quran.tafseer') }}">Tafseer Course</a></li>
            </ul>
          </li>
          <li><a href="{{ route('home.pricing') }}">Pricing</a></li>
          <li><a href="{{ route('teachers') }}">Teachers</a></li>
          <li><a href="{{ route('home.contact.us') }}">Contact Us</a></li>
          <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
        </ul>

        <div class="mobile-nav-footer d-xl-none">
          <a href="{{ route('home.contact.us') }}" class="mobile-nav-cta">Get Started</a>
          <p class="mobile-nav-contact">
            <i class="bi bi-whatsapp"></i>
            <a href="https://wa.me/923344066429" target="_blank" rel="noopener">+92-334-4066429</a>
          </p>
        </div>
      </div>
    </nav>

  </div>
</header>

<style>
  /* Modern Top Header Design */
  #top-header {
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
    position: relative;
    overflow: hidden;
    padding: 15px 0;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
  }

  /* Animated gradient overlay */
  #top-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    animation: shimmer 3s infinite;
  }

  @keyframes shimmer {
    0% {
      left: -100%;
    }
    100% {
      left: 100%;
    }
  }

  #top-header .contact-info {
    width: 100%;
    display: flex;
    flex-wrap: nowrap;
    gap: 30px;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;
  }

  #top-header .contact-info > div {
    margin-bottom: 0;
    padding: 8px 20px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 25px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
  }

  #top-header .contact-info > div:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  }

  #top-header .contact-info i {
    font-size: 1.3rem !important;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0%, 100% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.1);
    }
  }

  #top-header a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  #top-header a:hover {
    color: #FFD43B;
  }

  .mobile-break {
    display: none;
  }

  .mobile-separator {
    display: none;
  }

  .logo img {
    width: 160px;
    height: 160px;
    aspect-ratio: 1 / 1;
    transition: transform 0.3s ease;
  }

  .logo img:hover {
    transform: scale(1.05);
  }



  /* Medium Mobiles & Small Tablets (300px – 768px) */
  @media (min-width: 300px) and (max-width: 768px) {
    #top-header {
      padding: 12px 0;
    }

    #top-header .contact-info {
      flex-direction: column;
      gap: 10px;
      font-size: 12px;
      padding: 0 10px;
    }

    #top-header .contact-info > div {
      width: 100%;
      max-width: 350px;
      padding: 10px 15px;
      text-align: center;
      justify-content: center;
    }

    #top-header .contact-info .phone-number {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: nowrap;
      gap: 8px;
    }

    #top-header .contact-info .phone-number a {
      white-space: nowrap;
    }

    #top-header .contact-info i {
      font-size: 1.2rem !important;
    }

    .logo img {
      width: 130px;
      height: 130px;
    }

    .mobile-break {
      display: none;
    }

    .mobile-break br {
      display: none;
    }

    .mobile-separator {
      display: inline-block;
      margin: 0 5px;
      font-weight: 300;
    }

    #navmenu ul {
      /* Hidden by default on mobile */
      top: 70px;
      /* Below header */
      left: 0;
      width: 100%;
      color: white;
      background: linear-gradient(120deg, #44137c, #2bab6d);
    }

    #navmenu.active ul {
      display: block;
      /* Shown when toggled */
    }

    #navmenu .dropdown i {
      background: white;
      color: black;
      text-align: center;
      margin-top: 20px
    }

    #navmenu .dropdown ul {
      background: #fff8e6;
      color: black
    }

    /* Prevent Safari from auto-styling phone numbers */
    a,
    a:link,
    a:visited,
    a:active,
    a:hover {
      color: inherit !important;
      text-decoration: none !important;
    }

    /* Specific to phone-number span */
    .phone-number {
      color: #fff !important;
      /* force white */
      text-decoration: none !important;
    }

  }

  /* Small Mobile Phones (<400px) */
  @media (max-width: 399px) {
    #top-header .contact-info {
      font-size: 11px;
    }

    #top-header .contact-info > div {
      padding: 8px 12px;
    }

    #top-header .contact-info .phone-number {
      gap: 5px;
    }

    #top-header .contact-info i {
      font-size: 1.1rem !important;
    }
  }

  /* Tablets (769px – 1024px) */
  @media (min-width: 769px) and (max-width: 1024px) {
    #top-header .contact-info {
      gap: 8px;
      font-size: 14px;
    }
  }

  /* Large Screens (1200px+) */
  @media (min-width: 1200px) {
    #top-header .contact-info {
      gap: 15px;
      font-size: 16px;
    }
  }
</style>


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
      <img src="{{ cloudinary_image('assets/img/logo.svg') }}" alt="Rooh Ul Quran Academy Logo" width="160" height="160"
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

    <a href="{{ route('home.contact.us') }}" class="btn-getstarted" style="color: white !important">Get Started</a>

  </div>
</header>
<style>
  /* Base styles */
  #top-header {
    background-image: url('{{ asset('assets/img/header-bg.webp') }}');
    background-size: cover;
    background-position: center;
    font-size: 14px;
    color: #fff;
  }

  #top-header .contact-info {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    flex-wrap: wrap;
    gap: 10px;
    /* default gap for desktop */
    text-align: center;
    font-size: medium;
  }

  #top-header .contact-info>div {
    margin-bottom: 0;
  }

  .mobile-break {
    display: none;
    /* default hidden */
  }

  /* Extra Small Mobiles (<300px) */
  @media (max-width: 299px) {
    #top-header .contact-info {
      flex-direction: column;
      gap: 5px;
      font-size: 10px;
    }

    .mobile-break {
      display: block;
    }
  }

  /* Small Mobiles (300px – 400px) */
  @media (min-width: 300px) and (max-width: 400px) {
    #top-header .contact-info {
      flex-wrap: wrap;
      gap: 5px;
      font-size: 11px;

    }

    .mobile-break {
      display: inline;
      /* keep in one line */
    }
  }

  /* Medium Mobiles & Small Tablets (401px – 768px) */
  @media (min-width: 401px) and (max-width: 768px) {
    #top-header .contact-info {
      flex-wrap: nowrap;
      gap: 5px;
      font-size: 12px;
    }

    .mobile-break {
      display: inline;
      /* keep in one line */
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
        <span class="phone-number">+92-334-4066429 <span class="mobile-break"><br></span> +92-344-6781539</span>
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
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename"><img src="{{ asset('assets/img/logo.svg') }}" alt="Rooh Ul Quran Academy" />
      </h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{route('home.index')}}" class="active">Home<br></a></li>
        <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{route('quran.tajweed')}}">Quran Reading With Tajweed</a></li>
            <li><a href="{{route('quran.recitation')}}">Noorani Qaida</a></li>
            <li><a href="{{route('quran.memorization')}}">Quran Memorization</a></li>
            <li><a href="{{route('quran.tafseer')}}">Tafseer Course</a></li>

          </ul>
        </li>
        <li><a href="{{route('home.pricing')}}">Pricing</a></li>
        {{-- <li><a href="trainers.html">Trainers</a></li> --}}
        {{-- <li><a href="{{route('home.about')}}">About</a></li> --}}

        <li><a href="{{route('home.contact.us')}}">Contact</a></li>
        <li><a href="{{route('blogs.index')}}">Blogs</a></li>

      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a href="{{ route('home.contact.us') }}" class="btn-getstarted" href="courses.html">Get Started</a>

  </div>
</header>
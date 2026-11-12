<style>
  .sr-only {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  border: 0 !important;
  white-space: nowrap !important;
}

.footer-links-col h4 {
  color: #ffffff;
  font-size: 1rem;
  font-weight: 700;
  margin-bottom: 0.85rem;
}

.footer-link-list {
  list-style: none;
  margin: 0;
  padding: 0;
}

.footer-link-list li {
  margin-bottom: 0.45rem;
}

.footer-link-list a {
  color: rgba(255, 255, 255, 0.88);
  text-decoration: none;
  font-size: 0.92rem;
  transition: color 0.2s ease;
}

.footer-link-list a:hover,
.footer-link-list a:focus {
  color: #ffffff;
  text-decoration: underline;
}

.footer-bottom-nav {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.75rem 1.25rem;
  margin-bottom: 0.75rem;
}

.footer-bottom-nav a {
  color: rgba(255, 255, 255, 0.9);
  text-decoration: underline;
  font-size: 0.9rem;
}
</style>

@php
  use App\Helpers\SiteLinks;
  $footerCourses = SiteLinks::allCourses();
  $footerQuick = SiteLinks::footerQuickLinks();
@endphp

<footer id="footer" class="footer position-relative" style="background-color: #122F2A; color: white !important;">
  <div class="container footer-top">
    <div class="row gy-4">
      <!-- Brand / Contact -->
      <div class="col-lg-4 col-md-6 footer-about text-center text-lg-start">
        <a href="{{ route('home.index') }}" class="logo d-flex align-items-center justify-content-center justify-content-lg-start">
          <img src="{{ asset('assets/img/logo-rooh-ul-quran.webp') }}" class="img-fluid footer-logo" alt="roohul quran academy logo" width="160" height="99" decoding="async" loading="lazy">
        </a>
        <div class="footer-contact pt-3">
          <p><strong>WHATSAPP / CALL:</strong></p>
          <p class="phone-number">
            <i class="bi bi-whatsapp"></i>
            <a href="https://wa.me/19172036999" class="text-white text-decoration-none" target="_blank" rel="noopener">US +1 (917) 203-6999</a>
          </p>
          <p class="phone-number">
            <i class="bi bi-whatsapp"></i>
            <a href="https://wa.me/923344066429" class="text-white text-decoration-none" target="_blank" rel="noopener">PK +92-334-4066429</a>
          </p>
          <p><strong>GET IN TOUCH:</strong></p>
          <p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@roohulquranacademy.com" class="text-white text-decoration-none">info@roohulquranacademy.com</a></p>
        </div>
      </div>

      <!-- Quick links -->
      <div class="col-lg-2 col-md-6 footer-links-col text-center text-lg-start">
        <h4>Quick Links</h4>
        <ul class="footer-link-list">
          @foreach($footerQuick as $link)
            <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
          @endforeach
        </ul>
      </div>

      <!-- Courses -->
      <div class="col-lg-3 col-md-6 footer-links-col text-center text-lg-start">
        <h4>Quran Courses</h4>
        <ul class="footer-link-list">
          @foreach($footerCourses as $link)
            <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
          @endforeach
        </ul>
      </div>

      <!-- Newsletter + Social -->
      <div class="col-lg-3 col-md-6 text-center text-lg-start">
        <div class="footer-newsletter">
          <h4 class="text-white">Subscribe to our Newsletter</h4>
          <p>We will always stay in touch!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form d-flex justify-content-center justify-content-lg-start">
              <input type="email" name="email" placeholder="Your email address" required>
              <button type="submit"><b>Subscribe</b></button>
            </div>
          </form>
        </div>
        <h4 class="text-white mt-4">Stay Connected</h4>
        <div class="social-links d-flex justify-content-center justify-content-lg-start mt-3">
          <a href="https://www.facebook.com/roohulquran" rel="noopener" class="facebook" aria-label="Visit us on Facebook">
            <span class="sr-only">Visit us on Facebook</span>
            <i class="bi bi-facebook text-black"></i>
          </a>
          <a href="https://www.instagram.com/roohulquranacademy?igsh=MWptYzU3a2M4aTl4OA==" rel="noopener" class="instagram" aria-label="Visit us on Instagram">
            <span class="sr-only">Visit us on Instagram</span>
            <i class="bi bi-instagram text-black"></i>
          </a>
          <a href="https://wa.me/19172036999" class="whatsapp" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp USA">
            <span class="sr-only">Chat with us on WhatsApp USA</span>
            <i class="bi bi-whatsapp text-black"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

 <div class="container text-center mt-4">
    <nav class="footer-bottom-nav" aria-label="Legal and site pages">
      <a href="{{ route('home.privacy.policy') }}">Privacy Policy</a>
      <a href="{{ route('home.faq') }}">FAQ</a>
      <a href="{{ route('home.contact.us') }}">Contact Us</a>
      <a href="{{ route('blogs.index') }}">Blogs</a>
    </nav>
    <p>Copyright © {{ date('Y') }}. All Rights Reserved.</p>
  </div>
</footer>
<style>
  .footer-logo {
    max-height: 92px;
    width: auto;
    height: auto;
  }
</style>

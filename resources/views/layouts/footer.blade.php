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

</style>

<footer id="footer" class="footer position-relative" style="background-color: #122F2A; color: white !important;">
  <div class="container footer-top">
    <div class="row gy-4 align-items-center text-center text-lg-start">
      <!-- Left Content -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ route('home.index') }}" class="logo d-flex align-items-center justify-content-center justify-content-lg-start">
          <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid" alt="roohul quran academy logo" width="160" height="40" decoding="async" loading="lazy">
        </a>
        <div class="footer-contact pt-3">
          <p><strong>CALL FOR MORE INFO:</strong></p>
          <p class="phone-number"><i class="bi bi-telephone-fill"></i> +92-334-4066429</p>
          <p><strong>GET IN TOUCH:</strong></p>
          <p><i class="bi bi-envelope-fill"></i> info@roohulquranacademy.com</p>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4 class="text-white">Subscribe to our Newsletter</h4>
        <p>We will always stay in touch!</p>
        <form action="forms/newsletter.php" method="post" class="php-email-form">
          <div class="newsletter-form d-flex justify-content-center">
            <input type="email" name="email" placeholder="Your email address" required>
            <button type="submit"><b>Subscribe</b></i></button>
          </div>
        </form>
      </div>

      <!-- Social Links -->
<div class="col-lg-4 col-md-12 text-center text-lg-end">
  <h4 class="text-white">STAY CONNECTED:</h4>
  <div class="social-links d-flex justify-content-center justify-content-lg-end mt-3">
    
    <!-- Facebook -->
    <a href="https://www.facebook.com/roohulquran" rel="noopener" class="facebook" aria-label="Visit us on Facebook">
      <span class="sr-only">Visit us on Facebook</span>
      <i class="bi bi-facebook text-black"></i>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/roohulquranacademy?igsh=MWptYzU3a2M4aTl4OA==" rel="noopener" class="instagram" aria-label="Visit us on Instagram">
      <span class="sr-only">Visit us on Instagram</span>
      <i class="bi bi-instagram text-black"></i>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/+923344066429" class="whatsapp" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
      <span class="sr-only">Chat with us on WhatsApp</span>
      <i class="bi bi-whatsapp text-black"></i>
    </a>

  </div>
</div>

    </div>
  </div>

  <div class="container text-center mt-4">
    <p>Copyright © 2025. All Rights Reserved.</p>
  </div>
</footer>
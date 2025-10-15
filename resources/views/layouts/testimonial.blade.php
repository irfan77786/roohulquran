<style>
  #testimonials {
    background-color: #f5f5f5;
  }

  .testimonial-card {
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .badge-card {
    bottom: -20px;
    transform: translateX(-50%);
  }
   
  .badge-card i {
    font-size: 2rem;
    color: #e5a72a;
  }

  .swiper {
    width: 100%;
    height: auto;
  }

  .swiper-slide {
    width: 300px;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    aspect-ratio: 16 / 9;
  }

  @media (max-width: 768px) {
    .swiper-slide {
      width: 100%;
    }
  }

  .testimonial-card {
    max-width: 90%;
    margin: auto;
  }

  .swiper-pagination-bullet {
    width: 12px;
    /* visual size */
    height: 12px;
    background: #333;
    /* or your color */
    opacity: 0.5;
    margin: 8px;
    border-radius: 50%;
    position: relative;
  }

  .swiper-pagination-bullet::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 48px;
    height: 48px;
    transform: translate(-50%, -50%);
    background: transparent;
    pointer-events: none;
    /* keeps the bullet clickable */
  }

  .swiper-pagination-bullet-active {
    background: #007bff;
    /* or any highlight color */
    opacity: 1;
  }

  /* Fallback styles when Swiper doesn't load */
  .testimonial-slider:not(.swiper-initialized) .swiper-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  .testimonial-slider:not(.swiper-initialized) .swiper-slide {
    flex: 0 0 auto;
    width: 300px;
    max-width: 100%;
  }

  .testimonial-slider:not(.swiper-initialized) .swiper-pagination {
    display: none;
  }
</style>
<section id="testimonials" class="py-5" style="background-color: #f5f5f5;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-lg-6" data-aos="fade-up">
        <h2 class="text-danger">Our Testimonial</h2>
        <h2 class="mb-4">
          Why Students Love <span style="color: #212529;">Learning</span> Quran with Us
        </h2>
        <!-- Swiper Slider -->
        <div class="swiper testimonial-slider">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  Rooh ul Quran Academy made it so easy for my son to start Noorani Qaida. The teacher is patient and
                  professional.
                </p>
                <div class="d-flex align-items-center">
                  <div class="position-relative" style="width: 50px; height: 50px;">
                    <img src="{{ asset('assets/img/ai/test-1.webp') }}" alt="islamic studies" class="rounded-circle"
                      style="width: 50px; height: 50px; object-fit: cover;" loading="lazy">
                    <!-- Flag badge -->
                    <span class="fi fi-gb fis position-absolute bottom-0 end-0"
                      style="font-size: 1rem; border-radius: 80%; padding: 2px;"></span>
                  </div>
                  <div class="ms-3">
                    <h3 class="mb-0">Muhammad Zakir</h3>
                  </div>
                </div>

              </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  I always wanted to learn Quran with Tajweed. Alhamdulillah, I improved my recitation within a few
                  months.
                </p>
                <div class="d-flex align-items-center">
                  <div class="position-relative" style="width: 50px; height: 50px;">

                    <img src="{{ asset('assets/img/ai/test-2.webp') }}" alt="islamic teacher"
                      class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;" loading="lazy">
                    <span class="fi fi-us fis ms-2 position-absolute bottom-0 end-0"
                      style="font-size: 1rem; border-radius: 80%; padding: 2px;"></span>
                  </div>
                  <div class="ms-3">
                    <h3 class="mb-0">Ayesha Khan</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  As a working professional, the flexible timings helped me continue my Quran classes online.
                </p>
                <div class="d-flex align-items-center">
                  <div class="position-relative" style="width: 50px; height: 50px;">
                    <img src="{{ asset('assets/img/ai/test-3.webp') }}" alt="online quran classes"
                      class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;" loading="lazy">
                    <span class="fi fi-ca fis ms-2 position-absolute bottom-0 end-0"
                      style="font-size: 1rem; border-radius: 80%; padding: 2px;"></span>
                  </div>
                  <div class="ms-3">
                    <h3 class="mb-0">Muhammad Zeeshan</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  Their female Quran tutor is very kind and supportive. Highly recommended for sisters.
                </p>
                <div class="d-flex align-items-center">
                  <div class="position-relative" style="width: 50px; height: 50px;">
                    <img src="{{ asset('assets/img/ai/test-4.webp') }}" alt="learning quran" class="rounded-circle me-3"
                      style="width: 50px; height: 50px; object-fit: cover;" loading="lazy">
                    <span class="fi fi-au fis ms-2 position-absolute bottom-0 end-0"
                      style="font-size: 1rem; border-radius: 80%; padding: 2px;"></span>
                  </div>
                  <div class="ms-3">
                    <h3 class="mb-0">M Yaseen</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  Learning Quran online has been a blessing for me. The instructors are very knowledgeable and
                  patient.
                  I highly recommend QTeaching to anyone looking to deepen their understanding of the Quran.
                </p>
                <div class="d-flex align-items-center">
                  <div class="position-relative" style="width: 50px; height: 50px;">
                    <img src="{{ asset('assets/img/ai/test-5.webp') }}" alt="parents review" class="rounded-circle me-3"
                      style="width: 50px; height: 50px; object-fit: cover;" loading="lazy">
                    <span class="fi fi-de fis ms-2 position-absolute bottom-0 end-0"
                      style="font-size: 1rem; border-radius: 80%; padding: 2px;"></span>
                  </div>
                  <div class="ms-3">
                    <h3 class="mb-0">Habibullah</h3>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more slides as needed -->
          </div>
          <br><br>
          <div class="swiper-pagination"></div>
          <!-- Swiper Pagination -->
        </div>
        
        <!-- Fallback for when Swiper doesn't load -->
        <script>
          // Fallback: Hide pagination if Swiper doesn't initialize within 3 seconds
          setTimeout(function() {
            const swiperContainer = document.querySelector('.testimonial-slider');
            const pagination = document.querySelector('.swiper-pagination');
            if (swiperContainer && !swiperContainer.swiper && pagination) {
              pagination.style.display = 'none';
              console.log('Swiper fallback: Pagination hidden');
            }
          }, 3000);
        </script>
      </div>

      <!-- Right Content -->
      <div class="col-lg-6 text-center position-relative" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('assets/img/ai/happystudent.webp') }}" alt="quran student" class="img-fluid rounded"
          style="max-height: 400px;" loading="lazy">
        <div
          class="badge-card position-absolute bottom-0 start-50 translate-middle-x bg-white shadow p-3 rounded d-flex align-items-center"
          style="margin-bottom: -30px;">
          <i class="bi bi-mortarboard text-danger" style="font-size: 2rem;"></i>
          <div class="ms-3">
            <h4 class="mb-0 text-danger">400+</h4>
            <p class="mb-0">Satisfied Students</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>